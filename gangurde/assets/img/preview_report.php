<html>

    <head>
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0cm 0cm ;
              
            }

            /** Define now the real margins of every page in the PDF **/
            body {
             
              /*  */
                margin-top: 3cm  ; 
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
              
            }

                  .column {
                    float: left;
                    width: 50%;
                    padding: 10px;
                    height: 300px; /* Should be removed. Only for demonstration */
                  }

              /* Clear floats after the columns */
              .row:after {
                content: "";
                display: table;
                clear: both;
              }
            /** Define the header rules **/
            header {
                position: fixed;
                bottom:4cm; 
                /* ;        */
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm ;
                /* ;             */
                max-height: 5cm;
                /** Extra personal styles **/
                background-color:white;     /*#03a9f4;*/
                color: white;
                text-align: center;
                line-height: 1.5cm;
               
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

                /** Extra personal styles **/
                background-color: white;  /*#03a9f4;*/
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }

           
          
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        
        
        <header <center><img  src='<?php  echo base_url('header_images/'.$lab['header'])?>' width="100%" ></center></header>


        
        <footer><center><img  src='<?php  echo base_url('footer_images/'.$lab['footer'])?>' width="100%"></center></footer>

        <!-- Wrap the content of your PDF inside a main tag -->

        <main>
       
          <div class="start" >
        <div class="invoice-details row mx-0 my-5" style="width:100%;margin-top:8%; ">
       
        <div class="table-responsive"  style=" width:100%;height:23%" >
         <div class="row">
              <div class="column">
                    <h5>Patient Name:<?php  echo  $patient->first_name.$patient->last_name  ?></h5>
                    <h5>Patient Gender:<?php  echo  $patient->gender ?></h5>
                    <h5>Mob No:<?php  echo  $patient->mobile ?></h5>
                    <?php
                    if(($printing_data->mail) == "mail"){
                      ?>
                      <h5>Email:<?php  echo  $patient->email ?></h5>
                      <?php
                    }
                    ?>
                    
              </div>
              <div class="column">
                   
                  <?php
                                  
                  $date_created = DateTime::createFromFormat('Y-m-d H:i:s', $case->date_created);
                  $created = $date_created->format("l d M Y h:i:s A");
                   ?>
            

                    <h5>Registered On: <?php  echo $created?> </h5>
                    <h5>Collected On: <?php  echo $created?></h5>

                    <?php
                    if(($printing_data->address) == "address"){
                      ?>
                      <h5>Address:<?php  echo  $patient->address ?></h5>
                      <?php
                    }
                    ?>
              </div>
              
            </div>
            
            </div>
    			</div>
          <hr>
                        <?php
                         if(!empty($details)) {
                          foreach($details as $key => $value){
                            $arrayOrTests = $value;
                               ?>
            <center><h3 style="background-color: #fff;"><?php echo  $key ;?></h3></center>
            <?php
              foreach($arrayOrTests as $detail)
              { ?>
          <center><h5 style="background-color: #fff; font-weight: 700;"><?php echo $detail->test_name ;?></h5></center>

        <div style="width:100%;margin-left: 5%;border-bottom: 1px solid;;">
        <div style="border-bottom: 1px solid;">
        <table style="width:100%">
            <tr>
            <th style="padding-right: 20%; ">Parameter</th>
            <th style="padding-right: 15%; "> </th>
						<th style="padding-right: 25% ; padding-top: 1%;">VALUE</th>
						<th style="padding-right: 17% ; padding-top: 1%;">UNIT</th>
						<th style="padding-right: 25% ; padding-top: 1%;margin-: 25%; ">REFERENCE</th>
            </tr>
            <?php 
            
            if($detail->parameters == null)
                       {
                        ?>
                        <h2 style="color:red"><b>Parameters not set!..Please set parameters in master</b></h2>
                       
                        <?php
                       }else{


                      foreach($detail->parameters as $parameter){   
                        if(!($parameter->isGroup == null )) {
                          ?>
                           <tr>
                          <td><?php echo $parameter->parameter_name?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          </tr>
                          <?php
                          foreach($parameter->isGroup as $isGroup){
                          ?>
                          
                <tr>
                  <td><?php //echo $parameter->parameter_name?></td>
                  <td><?php echo $isGroup->sub_parameter_name?> </td>
                  <td> <?php
                 
                 $resultStr = "";

                  if(!empty($subpara_result)) {
                                      
                    foreach($subpara_result as $keyStr => $valueStr){
                    if($keyStr == $isGroup->sub_para_id)
                      {
                        $resultStr = $valueStr;
                      }
                    }
                  }
                      echo $resultStr 
                ?>	</td>
                  <td><?php echo $isGroup->unit_title?></td>
                  <td><?php
                          if($isGroup->Range == null) {?> <?php 
                          }else{
                            ?>
                    <?php echo($isGroup->Range->lower. ' - '.$isGroup->Range->upper.'  '.$isGroup->Range->words)   ?>
                    <?php }?>	</td>
                </tr>

                                  <?php  
                                        }
                  
                          }else if($parameter->isGroup == null){

                          ?>                  
                        <tr>
                          <td><?php echo $parameter->parameter_name?></td>
                          <td> </td>
                          <td> <?php      
                                  $resultStr = "";

                                                  if(!empty($para_result)) {
                                                                      
                                                    foreach($para_result as $keyStr => $valueStr){
                                                    if($keyStr == $parameter->parameterId)
                                                      {
                                                        $resultStr = $valueStr;
                                                      }
                                                    }
                                                  }
                                          echo $resultStr ;
                                  
                                  ?></td>
                          <td><?php echo $parameter->unit_title?></td>
                          <td>
                          <?php
                                  if($parameter->range == null) {
                                          }else{
                              echo($parameter->range->lower. ' - '.$parameter->range->upper.'  '.$parameter->range->words) ;   } 	?>
                                   </td>
                        </tr>
                                      <?php } //end of $parameter->isGroup
                                            
                                            }
                                          }
                                            ?>  
                      </table>
                         <?php 
                                     $editableresultStr = "";

                                      if(!empty($editable_results)) {
                                                          
                                        foreach($editable_results as $keyStr => $valueStr){
                                        if($keyStr == $detail->testId)
                                          {
                                            $editableresultStr = $valueStr;
                                          }
                                        }

                                      }
                                ?>
                                <?php
                                if(!($editableresultStr == "")){
                                  ?> 
                                  <b><h3 style="margin-left:100px;"><?php  echo   $editableresultStr;?></h3></b>
                                  <?php
                                  } ?>
                               

                               <?php
                                if(!($detail->non_editable == "")){
                                  ?> 
                                  <h3><?php echo  $detail->non_editable ?></h3>
                                  <?php
                                  } ?>
            </div>
           </div> 
             <?php 
						  }	   ?>  
          <?php          } } ?>

          <div class="end">
                            <center><h3>End of Report</h3></center>
                           <table style="width:100%">
                          <tr style="margin-left:25%">
                         <td  style="padding-left:15%;">

                      <?php
                    if(($printing_data->l_sing) == "l_sing"){
                      ?>
                     <img  style="height:50px;width:120px;margin-left:25px" src='<?php  echo base_url('incharge_signature_images/'.$lab['incharge_signature'])?>'  >  
                      <?php
                    }
                    ?>
                    
                    <?php
                    if(($printing_data->l_name) == "l_name"){
                      ?>
                            <span  style=" display: block; margin-bottom: 0em;"class="br"></span>
                            <h4 style="margin-left:10px"><?php  echo $lab['incharge_name'] ?><br>(<?php echo $lab['incharge_degree'] ?>)</h4>
                            <!-- <p style="font-size:15px;; margin-left:15px"></p> -->
                         
                     <?php
                    }
                    ?> 
             

                </td>
                  <td style= "padding-left:40%;">
                  <?php
                    if(($printing_data->dr_sing) == "dr_sing"){
                      ?>
                      <img style="height:50px;width:120px;margin-left:50px" src='<?php  echo base_url('doctor_signature_images/'.$lab['doctor_signature'])?>'  >  
                      <?php
                    }
                    ?>
           
           <?php
                    if(($printing_data->doctor) == "doctor"){
                      ?>
                     <span  style=" display: block; margin-bottom: 0em;"class="br"></span>

                  <h4> <?php  echo $lab['doctor_name']  ?><br>(<?php echo $lab['doctor_degree'] ?>)</h4>
                      <?php
                    }
                    ?>   
              </td>
          </tr>
 
         </table>
        </div>
         </div>
        </main>

       

    </body>
</html>
