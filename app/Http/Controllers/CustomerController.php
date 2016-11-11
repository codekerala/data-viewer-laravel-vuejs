<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }

    public function getData()
    {
        $model = Customer::searchPaginateAndOrder();
        $columns = Customer::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }
}
