<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Mail;
use Konekt\PdfInvoice\InvoicePrinter;
use App\Order;
use App\Mail\OrderCompleted;

class SendOrderInvoice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $fields;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $invoice = new InvoicePrinter('A4', '$', 'en');
        
        $invoice->setType("Sale Invoice");
        $invoice->setDate(date('M dS ,Y',time()));   //Billing Date
        $invoice->setTime(date('h:i:s A',time()));   //Billing Time
        $invoice->addItem("AMD Athlon X2DC-7450","2.4GHz/1GB/160GB/SMP-DVD/VB",6,0,580,0,3480);

        $invoice->addTotal("Total",3480);

        $invoice->render(storage_path('app/invoice.pdf'), 'F');

        Mail::to('rytis.bankieta@gmail.com')->send(new OrderCompleted(storage_path('app/invoice.pdf')));
    }
}
