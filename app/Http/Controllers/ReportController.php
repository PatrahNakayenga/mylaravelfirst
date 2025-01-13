<?php
namespace App\Http\Controllers;


use App\Models\Payment;
use App;
use Auth;




//use App\Http\Controllers\ReportController;



class ReportController extends Controller

{
    public function report1($pid){

    $payment = Payment::find($pid);
    $pdf = App::make('dompdf.wrapper');
    $print = "<div style='margin:20px; padding: 20px;'>";
    $print .= "<h1 align= 'center'>Payment Receipt</h1>";
    $print .= "<hr/>";
    $print .= "<p> Receipt No: <b>" . $pid . "</br> </p>";
    $print .= "<p> Receipt No: <b>" . $payment->paid_date . "</br> </p>";
    $print .= "<p> Receipt No: <b>" . $payment->enrollment->enroll_no . "</br> </p>";
    $print .= "<p> Receipt No: <b>" . $payment->enrollment->student->name . "</br> </p>";
    $print .= "<hr/>";
    $print .= "<table style='width:100%'>";
    $print .= "<tr>";
    $print .= "<td> Description</td>";
    $print .= "<td> Amount</td>";

    $print .= "</tr>";




    $print .= "<tr>";
    $print .= "<td> <h3>" . $payment->enrollment->batch->name . "<h3></td>";
    $print .= "<td><h3>" .$payment->amount . "</h3> </td>";

    $print .= "</tr>";
    $print .= "<span>Printed Date : <b>" . date('Y-m-d') . "</b></span>";



    $print .= "</table>";
   //$print = "<span> Printed By: <br>" . Auth::user()->name . "</br><span>";
    $print .= "</div>";
    $pdf->loadHTML($print);

    return $pdf->stream('payment_receipt.pdf');


    }
}





