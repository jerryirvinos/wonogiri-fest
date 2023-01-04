<?php

namespace App\Http\Controllers;

use App\Models\Line_up;
use App\Models\Merchandise;
use App\Models\Ticket_type;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        $tickets = Ticket_type::where('status',1)->get();
        $merchandises = Merchandise::where('status',1)->get();
        $lineups= Line_up::where('status',1)->orderBy('orders', 'ASC')->get();
        
        return view('frontend.landing',compact('tickets','merchandises','lineups'));
    }

    public function lineuplist(){
        $lineups= Line_up::where('status',1)->orderBy('orders', 'ASC')->get();
        
        return view('frontend.detail_lineup',compact('lineups'));
    }
}
