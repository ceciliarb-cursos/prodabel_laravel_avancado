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
        $request->validate([
            "id" => "numeric|exists:times,id"
            ]);
            if(isset($request->id)) 
            $result = Time::where('id', $request->id)->get();
            else 
            $result = Time::paginate(5);
            
        } catch (\Exception $e) {
            dd($e);
        }
        //$paginator = new LengthAwarePaginator();
        return view('times.index', ['times' => $result]);
    }

    public function index2()
    {
        return "access";
    }
}
