<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaChartController extends Controller
{
    public function generateChart(Request $request)
{
    $data = $request->json()->all();
    $values = array_values($data);

    $total = array_sum($values);

    $angles = [];
    foreach ($values as $value) {
        $angle = round(($value / $total) * 360, 2);
        $angles[] = $angle;
    }    

    $labels = array_keys($data);
    $chartData = array_combine($labels, $angles);
    return response()->json($chartData);
}
}
