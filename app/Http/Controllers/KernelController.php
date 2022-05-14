<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Sale;
use App\Models\SalesPersons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KernelController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $Question_1 = Cars::where('manufacturer', 'Toyota')
        ->where('model', 'Corolla')->get();

        $Question_2 = Cars::whereBetween('price', [150000, 250000])->get();

        $Question_3 = Cars::get()->map(function ($row) {

            $row->new_price = $row->price + ($row->price * .07);

            return $row;
        });

        $Question_4 = Cars::with('options')->get()
        ->map(function ($car) {

            $car->total_option = $car->options->sum('price');

            return $car;
        });

        $Question_5 = Cars::with('options')->get()
        ->map(function ($car) {

            $car->total_option = $car->options->sum('price');

            return $car;
        });

        $Question_6 = SalesPersons::where('name', 'LIKE', 'S%')->get();

        $Question_7 = SalesPersons::whereNull('phone')->get();

        $Question_8 = Sale::with(['car', 'person'])->get();

        $Question_9 = SalesPersons::with('sales')->get()->map(function ($person) {
            $person->solds_num = $person->sales->count('id');
            $person->solds_prices = $person->sales->sum('sale_price');

            return $person;
        });

        $Question_10 = Cars::wherePrice(DB::table('cars')->max('price'))->get();


        return view('index', compact(
            'Question_1', 
            'Question_2',
            'Question_3',
            'Question_4',
            'Question_5',
            'Question_6',
            'Question_7',
            'Question_8',
            'Question_9',
            'Question_10',
        ));
    }
}
