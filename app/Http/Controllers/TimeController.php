<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;

class TimeController extends Controller
{
    public function index(Request $request)
    {
        $result = null;
        try {
            $request->validate([
                "id" => "numeric|exists:times,id"
            ]);
            $result = Time::findOrFail($request->id);
        } catch (\Exception $e) {
            dd($e);
        }
        return $result;
    }
}
