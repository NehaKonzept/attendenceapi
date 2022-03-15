<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class attenController extends Controller
{
    public function punch(Request $request)
    {
        $year=$request->year;
       $month=$request->month;
       if($year && $month)
       {
           $lines = array();
           $fopen = fopen('public/image/1_attlog (1).dat', 'r');
          
           while (!feof($fopen)) {
               $line=fgets($fopen);
               $line=trim($line);
               $lines[]=$line;

           }
           fclose($fopen);
           $finalOutput = array();
           foreach ($lines as $string)
           {
               $string = preg_replace('!\s+!', ' ', $string);
               $row = explode(" ", $string);
               array_push($finalOutput,$row);
           }
           echo "<pre>";
          
           $searchfor = $request->year.'-'.$request->month;
           $contents = file_get_contents('public/image/1_attlog (1).dat');
           
           $pattern = preg_quote($searchfor, '/');
           $pattern = "/^.*$pattern.*\$/m";

           if (preg_match_all($pattern, $contents, $matches))
           {
               $monthwiseData=implode("\n",$matches[0]);
               $monthwiseData1=explode("\n",$monthwiseData);
               $tab="\t";
               foreach($monthwiseData1 as $split)
               {
                   $row=explode($tab,trim($split));
                   $array[]=$row;
                   //dd($array);
               }
               $count = 0;
               $employee_id[] = null;
               //for date nd time
               for ($i = 1, $s = 0; $i < count($array) - 1; $i++, $s++) {
                   $date_array = explode(" ", $array[$i][1]);
                   $temp = array("e_id" => $array[$i][0], 
                   "punch_date" => $date_array[0], 
                   "time" => $date_array[1]);
                   $data[$s] = $temp;
                   //dd($temp);
                   ///finding uniqe emp id
                   if (!in_array($array[$i][0], $employee_id)) {
                       $employee_id[$count] = $array[$i][0];
                       $count++;
                   }
               }
                
                
         
////////////////////////////////////////// 
               $custom_date = $month . '/1/' . $year;
               // dd($custom_date);
               //count number of days for given month
               $lastdate = date('t', strtotime($custom_date));
              // dd($lastdate);
              //last date of the month
               $lastday = $year . "-" . $month . "-" . $lastdate;
              //dd($lastday);
               $f_count = 0;
               for ($s = 0; $s < count($employee_id); $s++) {
                   //starting date
                   $inc_date = date('Y-m-d', strtotime($custom_date));
                   //dd($inc_date);
                   while ($inc_date <= $lastday) {
                       $i = 0;//for date in the punch file
                       $p_count = 0;
                       $punch=0;
                       $attendance = 0;
                       while ($i < count($data)) {
                          
                           $exploded_date = explode("-", $data[$i]['punch_date']);
                          // print_r($exploded_date);
                           if ($year == $exploded_date[0]) {
                               if ($data[$i]['punch_date'] == $inc_date) {
                                   if ($data[$i]['e_id'] == $employee_id[$s]) {
                                       $punch = 'Regular';
                                       $attendance = 1;
                                       $p_count++;
                                   }
                               }
                           }
                           $t = array(
                               "e_id" => $employee_id[$s],
                               "punch_date" => $inc_date,
                               "dayType" => $punch,
                               'attendance' => $attendance
                           );
                           $final_data[$f_count] = $t;
                           $i++;
                       }
                       print_r( $final_data[$f_count]);
                       $f_count++;
                       $inc_date = date('Y-m-d', strtotime($inc_date . ' +1 day'));
                      // print_r($inc_date." ");
                   }
               }


              
        } 
       else 
       {
               echo "No matches found";
              
       }
           echo "</pre>";

       }
       else
       {
           return "Please enter year and month";
       }
       

   }

}
