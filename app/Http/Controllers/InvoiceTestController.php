<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendOrderInvoice;

use Auth;
use App\User;
use App\Order;

class InvoiceTestController extends Controller
{
    public function createInvoice()
    {
        $user = User::find(Auth::id());
        $order = Order::where('user_id', Auth::id())->orderBy('id', 'desc')->first();
        $filepath = storage_path('app/' . 'invoice' . $user->id . '_' . $order->order_number . '.pdf' );
        SendOrderInvoice::dispatch($user, $order, $filepath);
    }
}
