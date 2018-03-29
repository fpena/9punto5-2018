<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gentor\ActiveCampaign;

class HomeController extends Controller
{
    function register(ActiveCampaign $ac) {

        $this->validate(request(), [
            'email' => 'required|email'
        ]);
        ActiveCampaign::contactView('felipe@penya.cl');

        return redirect('/')->with('success', 'true');
    }

    function submit() {
        return view('submit');
    }
}
