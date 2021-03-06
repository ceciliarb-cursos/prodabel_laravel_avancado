<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
use Illuminate\Pagination\LengthAwarePaginator;

class TimeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $result = null;
        try {
        $request->validate(["id" => "numeric|exists:times,id" ]);

        
        if($request->isMethod('post')) {
            $time = Time::find($request->id);
            $time->clona();
            $result = Time::paginate(5);
            
        } else if($request->isMethod('delete')) {
            $time = Time::find($request->id);
            $time->delete();
            $result = Time::paginate(5);
            
        } else {
            $result = Time::paginate(5);
            if(isset($request->nome)) {
                $result = Time::where('nome', 'like', $request->nome."%")->paginate(5);
            } else if(isset($request->id)) {
                $result = Time::where('id', $request->id)->paginate(5);
            }
        }
        
        
        } catch (\Exception $e) {
            dd($e);
        }
        //$paginator = new LengthAwarePaginator();
        return view('times.index', ['times' => $result, 'pesquisa' => $request->nome ]);
        return view('times.index')
                ->with('times', $result)
                ->with('pesquisa', $request->nome);
    }

    public function form(\App\Time $time, Request $request)
    {
        if($request->isMethod('post')) {
            $time->salva($request->except('_token'));
            return redirect("/time/{$time->id}");
        }

        return view('times.form', ['time' => $time]);
    }
    
    public function teste(\App\Time $time)
    {
        dd($time);
    }

    public function index2()
    {
        return "access";
    }
}
