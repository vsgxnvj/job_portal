<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class LocationController extends Controller
{
    function getStatesOfCountry(string $country_id): Response
    {
        $states = State::where('country_id', $country_id)->get();
        return response($states);
    }
}
