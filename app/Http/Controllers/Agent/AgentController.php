<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function Index(){
        $user = Auth::user();
        return view('agent.dashboard',compact('user'));
    }
}
