<thead>
                              <tr>
                                <th class="time">TIME</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturay</th>
                                <th>Sunday</th>
                              </tr>
                            </thead>
                            <tbody id="room_sched_list">

                            <?php 
                              $times = array("06:00:00","07:00:00","08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00"
                                ,"16:00:00","17:00:00","18:00:00","19:00:00","20:00:00");
                              $result =0;
                              foreach($times as $t){
                                echo '<tr>
                                  <td>'.$t.'</td>';
                               foreach($hey as $h)
                                {
                                  $result++;
                                  if ($result!=0)
                                  {
                                          if($h->sched_from==$t&&$h->sched_days=="monday")
                                           {
                                                echo '
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>';
                                           }
                                           if($h->sched_from==$t&&$h->sched_days=="tuesday")
                                           {
                                                echo '
                                                <td></td>
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>';
                                           }
                                           if($h->sched_from==$t&&$h->sched_days=="wednesday")
                                           {
                                                echo ' <tr>
                                                
                                                <td></td>
                                                <td></td>
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>';
                                           }
                                           if($h->sched_from==$t&&$h->sched_days=="thursady")
                                           {
                                                echo ' <tr>
                                               
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>';
                                           }
                                           if($h->sched_from==$t&&$h->sched_days=="friday")
                                           {
                                                echo ' <tr>
                                               
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                <td></td>
                                                <td></td>
                                                </tr>';
                                           }
                                           if($h->sched_from==$t&&$h->sched_days=="saturday")
                                           {
                                                echo ' <tr>
                                               
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                <td></td>
                                                </tr>';
                                           }
                                           if($h->sched_from==$t&&$h->sched_days=="sunday")
                                           {
                                                echo ' <tr>
                                                
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>'.$h->subject_name.'<br>'.$h->last_name.'&nbsp'.$h->first_name.'&nbsp '.$h->middle_name.'</td>
                                                </tr>';
                                           }


                                  }
                                      
                               
                             }
                           }
                            ?>                             
                             
                            </tbody>