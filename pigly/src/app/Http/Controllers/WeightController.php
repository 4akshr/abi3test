<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Http\Requests\WeightRequest;

class WeightController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function weight(WeightRequest $request)
    {
        $weight = $request->only(['name', 'email', 'password']);
        return view('weight', ['weight' => $weight]);
    }
}
