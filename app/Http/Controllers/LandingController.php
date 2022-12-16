<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use App\Models\Ticket_type;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        $tickets = Ticket_type::where('status',1)->get();
        $merchandises = Merchandise::where('status',1)->get();
        
        return view('frontend.landing',compact('tickets','merchandises'));
    }
}
