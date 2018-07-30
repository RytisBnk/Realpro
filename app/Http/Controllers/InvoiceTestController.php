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
        /*
        $user = User::find(Auth::id());
        $order = Order::where('user_id', Auth::id())->orderBy('id', 'desc')->first();
        $filepath = storage_path('app/' . 'invoice' . $user->id . '_' . $order->order_number . '.pdf' );
        SendOrderInvoice::dispatch($user, $order, $filepath);*/

        $invoice = new phpinvoice('A4', '$', 'lt');
        /* Header Settings */
        $invoice->setLogo(base_path('img/logo.png'));   //logo image path
        $invoice->setColor("#007fff");      // pdf color scheme
        $invoice->setType("Pardavimo sąskaita");    // Invoice Type
        $invoice->setReference("INV-55033645");   // Reference
        $invoice->setDate(date('M dS ,Y',time()));   //Billing Date
        $invoice->setTime(date('h:i:s A',time()));   //Billing Time
        $invoice->setDue(date('M dS ,Y',strtotime('+3 months')));    // Due Date
        $invoice->setFrom(array("ąčęėįšųū","Sample ąčęę Name","128 AA Juanita Ave","Glendora , CA 91740"));
        $invoice->setTo(array("Purchaser Name","Sample Company Name","128 AA Juanita Ave","Glendora , CA 91740"));
        
        /* Adding Items in table */
        $invoice->addItem("čęėąį","2.4GHz/1GB/160GB/SMP-DVD/VB",6,0,580,0,3480);
        $invoice->addItem("PDC-E5300","2.6GHz/1GB/320GB/SMP-DVD/FDD/VB",4,0,645,0,2580);
        $invoice->addItem('LG 18.5" WLCD',"",10,0,230,0,2300);
        $invoice->addItem("HP LaserJet 5200","",1,0,1100,0,1100);
        /* Add totals */
        $invoice->addTotal("Total",9460);
        $invoice->addTotal("VAT 21%",1986.6);
        $invoice->addTotal("Total due",11446.6,true);
        /* Set badge */ 
        $invoice->addBadge("Payment Paid");
        /* Add title */
        $invoice->addTitle("Important Notice");
        /* Add Paragraph */
        $invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you.");
        /* Set footer note */
        $invoice->setFooternote("My Company Name Here");
        /* Render */
        $invoice->setFooterImage(base_path('img/logo.png'));
        $invoice->render('example1.pdf','I'); 
  /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
    }
}
