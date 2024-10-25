<?php

namespace App\Http\Controllers;

use App\Services\BidCalculationService;
use Illuminate\Http\Request;

class BidCalculationToolController extends Controller
{
    private BidCalculationService $service;

    public function __construct(BidCalculationService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $data = $request->validate([
            'price' => 'required|numeric',
            'type' => 'required|string',
        ]);

        $result = $this->service->get(
            price: $data['price'],
            type: $data['type']
        );

        return response()->json(['result' => $result]);
    }
}
