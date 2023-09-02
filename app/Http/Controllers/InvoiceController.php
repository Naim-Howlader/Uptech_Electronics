<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Order;

class InvoiceController extends Controller
{
    public function generateInvoice($id){
        $order = Order::find($id);
        //$data = compact('order');
        $pdf = Pdf::loadView('frontend.invoice', compact('order'));
        return $pdf->stream('Invoice');
    }
}
