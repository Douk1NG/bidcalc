<?php

use App\Services\BidCalculationService;

test('case common-398.00', function () {
    $service = new BidCalculationService();
    $result = $service->get(398.00, 'common');

    $expectedResult = [
        'fees' => [
            'Basic' => 39.80,
            'Special' => 7.96,
            'Association' => 5.00,
            'Storage' => 100.00
        ],
        'total' => 550.76
    ];

    $this->assertEquals($expectedResult, $result);

});

test('case common-501.00', function () {
    $service = new BidCalculationService();
    $result = $service->get(501.00, 'common');

    $expectedResult = [
        'fees' => [
            'Basic' => 50.00,
            'Special' => 10.02,
            'Association' => 10.00,
            'Storage' => 100.00
        ],
        'total' => 671.02
    ];

    $this->assertEquals($expectedResult, $result);

});

test('case common-57.00', function () {
    $service = new BidCalculationService();
    $result = $service->get(57.00, 'common');

    $expectedResult = [
        'fees' => [
            'Basic' => 10.00,
            'Special' => 1.14,
            'Association' => 5.00,
            'Storage' => 100.00
        ],
        'total' => 173.14
    ];

    $this->assertEquals($expectedResult, $result);

});

test('case luxury-1800.00', function () {
    $service = new BidCalculationService();
    $result = $service->get(1800.00, 'luxury');

    $expectedResult = [
        'fees' => [
            'Basic' => 180.00,
            'Special' => 72.00,
            'Association' => 15.00,
            'Storage' => 100.00
        ],
        'total' => 2167.00
    ];

    $this->assertEquals($expectedResult, $result);

});

test('case common-1100.00', function () {
    $service = new BidCalculationService();
    $result = $service->get(1100.00, 'common');

    $expectedResult = [
        'fees' => [
            'Basic' => 50.00,
            'Special' => 22.00,
            'Association' => 15.00,
            'Storage' => 100.00
        ],
        'total' => 1287.00
    ];

    $this->assertEquals($expectedResult, $result);

});

test('case luxury-10000000.00', function () {
    $service = new BidCalculationService();
    $result = $service->get(1000000.00, 'luxury');

    $expectedResult = [
        'fees' => [
            'Basic' => 200.00,
            'Special' => 40000.00,
            'Association' => 20.00,
            'Storage' => 100.00
        ],
        'total' => 1040320.00
    ];

    $this->assertEquals($expectedResult, $result);
});

