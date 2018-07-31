<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendOrderInvoice;

use Auth;
use App\User;
use App\Order;
use App\InvoicePdf\phpinvoice;

class InvoiceTestController extends Controller
{
    public function createInvoice()
    {
        $orderNumber = Order::where('user_id', Auth::id())->orderBy('order_number', 'desc')->first()->order_number;
        SendOrderInvoice::dispatch($orderNumber, 199);
    }
}
