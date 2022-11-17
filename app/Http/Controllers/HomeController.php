<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;

// use App\Order;
// use App\OrderDetails;
// use App\Delivery;
// use App\Expanse;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $data['total_invoice']=Order::count();
       // $data['total_undelivery']=OrderDetails::sum('stock');
       // $data['total_delivery']=Delivery::sum('qty');
       // $data['today_delivery']=Delivery::where('date',date('Y-m-d'))->sum('qty');

        return view('home');
    }
}
