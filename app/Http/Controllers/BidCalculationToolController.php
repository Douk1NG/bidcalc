<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Bid;

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

        $result = $this->service->getCalculation($data['price'], $data['type']);

        return response()->json(['result' => $result]);
    }
}
