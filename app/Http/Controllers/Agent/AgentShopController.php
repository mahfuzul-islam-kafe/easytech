<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentShopController extends Controller
{
    public function AgentShop(){
        return view('agent.customize_shop');
    }
}
