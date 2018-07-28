<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendOrderInvoice;

class InvoiceTestController extends Controller
{
    public function createInvoice()
    {
        $params = [
            
        ];

        SendOrderInvoice::dispatch($params);
    }
}
