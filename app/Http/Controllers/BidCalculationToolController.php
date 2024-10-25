<?php

namespace App\Http\Controllers;

use App\Services\Bid;
use Illuminate\Http\Request;

class BidCalculationToolController extends Controller
{
    private Bid $service;

    public function __construct(Bid $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $data = $request->validate([
            'price' => 'required|numeric',
            'type' => 'required|string',
        ]);

        $result = $this->service->getFee($data['price'], $data['type']);

        return response()->json(['result' => $result]);
    }
}
