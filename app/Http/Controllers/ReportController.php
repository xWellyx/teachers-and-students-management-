<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{

    public function report1($pid)
    {

    $payment = Payment::find($pid);
    $pdf = App::make ('dompdf.wrapper')->setPaper('a4', 'landscape');

    $print ="<div style ='margin:20px; padding:20px; background-color:#94b8b8;'>";
    $print.= "<h1 align='center' style = 'font-size:50px;  font-style: italic;'> Cerificate Of Completion </h1>";
    
    $print.= "<br>";
    
    
    $print.= "<h1 align='center' style =  font-size:30px;'> This Cerificate is presented to  </h1>";
 


   
   

    $print.="<h1 align='center' style = 'font-size:50px; color :#006666; font-style: italic;'>  <b>" . $payment->enrollment ->student->name .  "</b></h1>";

    
  

    $print.= "<h1 align='center' style = 'font-size:30px';> for successfully completing the course</h1>";
    $print.="<h3 align='center' style = 'font-size:30px';> Cource Name : <b><span style= 'color :#006666;'>" . $payment->enrollment->batch->Cource->name . "</span> at <span style= 'color :#006666;'>" .$payment->enrollment->batch->start_date."</span></b></h3>";

   
    
    


    $print.= "<br>";

    $print.= "<br>";

    $print.= "<br>";

   $print.="<span> Printed By: <b>  Waleed alreheli </b> </span>";
   
   $print.= "<br>";
    $print.= "<span> Printed Date: <b>". date('Y-m-d') . "</b> </span>";

    $print.="</div>";
    $pdf->loadHTML($print);
    return $pdf->stream();


}

}
?>