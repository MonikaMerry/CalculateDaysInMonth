<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Arr;

class CalculateDaysController extends Controller
{
    public function viewPage()
    {
        return view('welcome');
    }

    public function calculateLogic(Request $request)
    {
       

        $data = $request->month;
        $months = array(
            'january' => '01', 'febrauary' => '02', 'march' => '03', 
            'april' => '04', 'may' => '05', 'june' => '06', 
            'july' => '07', 'august' => '08', 'september' => '09','october'=>'10',
             'november' => '11','december'=>'12'
        );

        $day=$months[$data];
        $days = Carbon::now()->month($day)->daysInMonth;

        return 'The month of ' .$data .' '.'is :' . $days;
        }
       
    
}
