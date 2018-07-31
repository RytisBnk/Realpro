<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Mail;
use App\InvoicePdf\phpinvoice;
use App\Order;
use App\Mail\OrderCompleted;
use App\User;

class SendOrderInvoice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $order_number;
    private $price;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($order_number, $price)
    {
        $this->order_number = $order_number;
        $this->price = $price;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $order = Order::find($this->order_number - 100000);
        $user = User::find($order->user_id);
        $filepath = storage_path("app/invoices/sąskaita_" . $order->order_number . '.pdf');
        $basePrice = $this->price / (float) 121 * 100;
        $vat = $this->price - $basePrice;

        //SendOrderInvoice::dispatch($user, $this->order, $filepath);

        $invoice = new phpinvoice('letter', '€', 'lt');
        /* Header Settings */
        $invoice->setLogo(base_path('img/logo.png'));   //logo image path
        $invoice->setColor("#007fff");      // pdf color scheme
        $invoice->setType("Pardavimo sąskaita");    // Invoice Type
        $invoice->setReference("INV-" . $order->order_number);   // Reference
        $invoice->setDate(date('d-m-Y',strtotime('+3 hours')));   //Billing Date
        $invoice->setTime(date('H:i:s',strtotime('+3 hours')));   //Billing Time

        $invoice->setFrom(array("Realpro.lt","UAB Emiras","Girulių g. 10","Vilnius, LT-12112", "Įmonės kodas: 304836394"));
        $invoice->setTo(array($user->name, $user->email ,$user->tel_nr, "", ""));
        
        /* Adding Items in table */
        $invoice->addItem("Planas \"" . $order->planas . "\"", "", 1, $vat,$basePrice, 0 );
        /* Add totals */
        $invoice->addTotal("Mokėti",$this->price);
//        $invoice->addTotal("VAT 21%",1986.6);
//        $invoice->addTotal("Total due",11446.6,true);
        /* Set badge */ 
        $invoice->addBadge("Sąskaita apmokėta");
        /* Add title */
        $invoice->addTitle("Svarbu");
        /* Add Paragraph */
        $invoice->addParagraph("Šiuo apmokėjimu yra sudaroma paslaugų teikimo sutartis su RealPro.");
        /* Set footer note */
        $invoice->setFooternote("UAB Emiras");
        /* Render */
        $invoice->render($filepath,'F');
  /* I => Display on browser, D => Force Download, F => local path save, S => return document path */

        Mail::to($user->email)
        ->send(new OrderCompleted($filepath, 'Jūsų užsakymas Nr.' . $order->order_number . ' Realpro.lt', $user->name));
    }
}
