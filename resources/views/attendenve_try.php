
//for making an array id wise and date wise
            //   foreach($temp as $k => $v) {
                    
            //     //$new_arr[$v['id']][]=$v;
            //     $new_arr1[$v['id']][$v['date']]=$v;
                
            //     //$array = array_column($new_arr, "id");
            //     //$array=array_values($new_arr1);
            //     $arr = array_map('array_values', $new_arr1);

            // }
                  
            //print_r($arr);
///////////////////////////////////////////////////////////////////
          // //Unique id
            foreach($temp as $key => $val) {
                $new_arr[$val['id']] = $val['id'];
            }
            $uniqid_arr = array_unique($new_arr,SORT_REGULAR);
            //print_r($uniqid_arr);
            foreach($temp as $keys => $vals) {
                $new_arr2[$vals['date']] = $vals['date'];
            }
            $uniqdate_arr = array_unique($new_arr2,SORT_REGULAR);
         //  print_r($uniqdate_arr);
////////////////////////////////////////
            foreach($uniqid_arr as $u => $uArray){
                $last=cal_days_in_month(CAL_GREGORIAN, $month, $year);
                for($i=1;$i<=$last;$i++){
                    $num_padded = sprintf("%02d", $i);//for adding the 0 to 1 to 9
                    $date = $request->year.'-'.$request->month.'-'.$num_padded;
                    //print_r($date);
                   
                    foreach($uniqdate_arr as $d=>$datearray)
                    {
                        //$date1=$datearray[1];
                        //print_r($datearray." ");
                       if($date===$datearray)
                        {
                            $temp1[]=array([
                                "id"=>$uArray,
                                "date"=>$date,
                                "attendence"=>"1"
                            ]);
                        } 
                      
                    }
                     $temp1[]=array([
                        "id"=>$uArray,
                         "date"=>$date,
                         "attendence"=>"0"
                     ]);
                    
                }
                
               
            }
           //print_r( $temp1);
            exit();
            $temp1=[];
             
             foreach($emp_id as $e=>$eId)
             {
                // print_r($eId." ");
              $last=cal_days_in_month(CAL_GREGORIAN, $month, $year);
             
                  for($i=1;$i<=$last;$i++)
                  {
                      $num_padded = sprintf("%02d", $i);//for adding the 0 to 1 to 9
                      $date = $request->year.'-'.$request->month.'-'.$num_padded;
                      
                      foreach ($temp as $key => $te)
                      {
                          
                          if($date===$te['date'])
                          {
                             //dd($date);
                           $temp1[]=array([
                               "id"=>$eId,
                               "date"=>$date,
                               "attendence"=>"1"
                           ]);
                          }
                             
                         
                        
                      }
                      if($temp!=$te['date'])
                      {  
                          $temp1[]=array([
                              "id"=>$eId,
                              "date"=>$date,
                              "attendence"=>"0"
                          ]);
                      }
                     
                      
                  }  
                
             }
           print_r($temp1);
