 <?php   
 session_start();
 include 'auth_session.php';
   include 'header.html';
   
    ?>
 
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

       <?php 
       include 'sidebar.php';
       include 'connect.php';
       date_default_timezone_set("Asia/Calcutta");
       $date = date("Y-m-d");
       $time=date("h:i a");
        ?>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- container starts -->
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Candidates</a></li>
					</ol>
                </div>
                <!-- row -->
                <!-- Row starts -->
                <!-- <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Filter Results</h4>
                                
                            </div>
                            <div class="card-body">
                                <div id="accordion-seven" class="accordion accordion-header-bg accordion-bordered">
                                    <div class="accordion__item">
                                        <div class="accordion__header accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseOne">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Willing to Relocate</span>
                                            <span class="accordion__header--indicator"></span>
                                            
                                        </div>
                                        <div id="header-bg_collapseOne" class="collapse accordion__body show" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> Yes</label><br>
                                               <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2" style="margin-left: 15px;"> No</label><br>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapse4">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Posted Date</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapse4" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                               <p><a href="#">Today</a></p>
                                               <p><a href="#">Last 3 days</a></p>
                                               <p><a href="#">Last 7 days</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapse10">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Work Authorization</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapse10" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;">H1 </label><br>
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2" style="margin-left: 15px;"> GC</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3" style="margin-left: 15px;"> Citizen</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3" style="margin-left: 15px;"> GC EAD</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3" style="margin-left: 15px;"> H4 EAD</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapse7">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Skills</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapse7" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;">HTML </label><br>
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2" style="margin-left: 15px;"> CSS</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3" style="margin-left: 15px;"> Java Script</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3" style="margin-left: 15px;"> Php</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3" style="margin-left: 15px;"> C++</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapse6">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Years of Experience</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapse6" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> 1-3 Years</label><br>
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2" style="margin-left: 15px;"> 2-4</label><br>
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2" style="margin-left: 15px;"> 5-6</label><br>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapse5">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Willing to Travel to work</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapse5" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> Yes</label><br>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> No</label><br>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapse9">
                                            <span class="accordion__header--icon"></span>
                                            <span class="accordion__header--text">Desired Salary/Rate</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="header-bg_collapse9" class="collapse accordion__body" data-parent="#accordion-seven">
                                            <div class="accordion__body--text">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> 1099</label><br>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> W2</label><br>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1" style="margin-left: 15px;"> C2C</label><br>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Candidates</h4>
                                <!-- <p class="m-0 subtitle">Default accordion. Add <code>accordion</code> class in root</p> -->
                            </div>
                            <div class="card-body">
                            <div id="accordion-one" class="accordion accordion-primary">
                            <?php

                            $queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
                            $resulti=mysqli_query($conn,$queryi);
                            $arrayi=mysqli_fetch_array($resulti);
                            $adminid = $arrayi[0];


                            $i=$_GET['id'];
                            $k=1;
                            $query1="Select count(job_applications.job_id) from job_applications,job_details,candidate_profile,candidate_register where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_profile.candidate_id=job_applications.candidate_id and job_details.job_id=job_applications.job_id and admin_id='".$adminid."' and job_applications.job_id='".$i."'"; 
                            $result1=mysqli_query($conn,$query1);
                            $array1=mysqli_fetch_array($result1);
                            $count = $array1[0];

                            while($k<=$count){
                                // if(isset($_POST['submit'])){
                                //     $query=$sql1;
                                // }else{
                                    $query="SELECT * FROM job_details,job_applications,candidate_profile,candidate_register where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_profile.candidate_id=job_applications.candidate_id and job_details.job_id=job_applications.job_id and admin_id=' ".$adminid." ' and job_applications.job_id='".$i."'"; 
                                
                            $_SESSION['job_id']=$i;
                            $result=mysqli_query($conn,$query);
                            if ($result->num_rows > 0):
                               
                            while($array=mysqli_fetch_assoc($result)){ 
                           
                            ?>
                                <!-- Default accordion -->
                                
                                   
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse<?php echo $k; ?>">
                                            <img src="<?php echo "superio/pfp/".$array['candidate_image']; ?>" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <span class="accordion__header--text"><b> <?php echo $array["candidate_fname"]." ".$array["candidate_lname"]; ?></b> </span>
                                           
                                            
                                            <span class="accordion__header--indicator">
                                                <div class="btn-group mb-1">
                                                    <?php
                                                    

                                                    if($array["application_status"]=="Rejected")
                                                        echo "<button class='btn btn-primary light px-3' style='border-radius: 50%;' ><img src='images/remove.png'  style='height: 25px; width: 25px;'></button>";
                                                    else if($array["application_status"]=="Accepted")
                                                        echo "<button class='btn btn-primary light px-3' style='border-radius: 50%;' ><img src='images/check.png'  style='height: 25px; width: 25px;'></button>";
                                                    else if($array["is_rejected"]=="1")
                                                        echo "<button class='btn btn-primary light px-3' style='border-radius: 50%;' ><img src='images/remove.png'  style='height: 25px; width: 25px;'></button>";
                                                    else
                                                        echo " ";
                                                    ?>
                                                    <!-- <i class='fa fa-window-close' aria-hidden='true'></i>
                                                    <i class='fa fa-check-square-o' aria-hidden='true'></i> -->
                                                    </div>
                                            </span>
                                        </div>
                                        <div id="default_collapse<?php echo $k; ?>" class="collapse accordion__body" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                                <div class="card">
                                                   
                                                            <div class="media-body">
                                                                 <div class="d-flex">
																<p class="mb-0 mr-auto">Skills : <?php  echo $array["candidate_skills"]; ?></p>
                                                             
                                                                    </div>
                                                                <div class="d-flex">
                                                                 <p class="mb-0 mr-auto">Location : <?php echo $array["candidate_location"]; ?></p>
                                                                 <!-- <i class="ti-map" ></i>  Not willing to relocate<br> -->
                                                                <!-- //php echo "<button type='button' class='btn btn-primary light px-3' ><a href='view-m.php?id=".$array['candidate_id']."'>View More</a></button>"; -->
                                                                 
                                                             </div>
                                                             <div class="d-flex">
                                                                 <p class="mb-0 mr-auto">
                                                                 <span><i class="ti-map" ></i> <?php echo "Willing to relocate: ".$array["candidate_relo"]; ?></span>
                                                                 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;<span><i class="ti-receipt" ></i> <?php echo "Employment Title: ".$array["candidate_employ_title"]; ?></span><br>
                                                                   <span><i class="ti-world"></i> <?php echo "Work Authorization: ".$array["candidate_workauth"]; ?></span>&nbsp;&nbsp;  &nbsp;&nbsp;
             
                                                                 <!-- <span><i class="ti-mobile"></i>      571-379-2402</a></span> -->
                                                                
                                                                 <span><i class="ti-calendar"  ></i> <?php echo "Work Experience: ".$array["candidate_workexp"]; ?></span><br></p>
                                                                 <div class="btn-group mb-1">
                                                                    <?php
                                                                        
                                                                        $query2="SELECT view_status FROM `job_applications` WHERE job_id=".$i." and candidate_id=".$array['candidate_id']; 
                                                                        $result2=mysqli_query($conn,$query2);
                                                                        $array2=mysqli_fetch_assoc($result2);
                                                                        $count2 = $array2['view_status'];

                                                                        if( $array2['view_status']=="seen")
                                                                            echo "<button type='button' class='btn btn-primary light px-3' ><i class='fa fa-eye' aria-hidden='true' style='color: #00FF00'></i></button>";
                                                                        else
                                                                            echo "<button type='button' class='btn btn-primary light px-3'><i class='fa fa-eye' aria-hidden='true'></i></button>";
                                                                    ?>
                                                                
                                                                    </div>
                                                               </div>
                                                               <div class="d-flex">
                                                               <p class='mb-0 mr-auto'>
                                                                   <?php
                                                                   $date2=date('Y-m-d',strtotime($array["interview_date"].'+2 days'));
                                                                      $interviewtime=$array['interview_time'];
                                                                      $interviewtime = explode("-",$interviewtime);

                                                                      if($date>$date2 && time()>$interviewtime[0]){
                                                                        $queryrej="UPDATE `job_applications` SET `application_status`='Rejected', job_offer_final_date='".$date2."',job_offer_status='Rejected' WHERE job_id='$i' AND candidate_id='".$array['candidate_id']."'";
                                                                        $resultrej=mysqli_query($conn,$queryrej); 
                                                                      }
                                                                        
                                                                    if($array['application_status']=='Accepted' || $array['application_status']=='Rejected' ){
                                                                        echo "Status : <button type='button' class='btn btn-dark  px-3 '><a class='aa' href='javascript:void(0);' >Accept</a></button>&nbsp;&nbsp;&nbsp;&nbsp;";
                                                                  
                                                                        echo "<button type='button' class='btn btn-dark  px-3 '><a class='aa' href='javascript:void(0);'>Reject</a></button></p>";
                                                                  
                                                                   }
                                                                    elseif( $date>=$array['interview_date'] && $time>$interviewtime[0] && $date<$date2){
                                                                    echo "Status : <button type='button' class='btn btn-success  px-3 '><a class='aa' href='finaloffer.php?id=".$array['candidate_id']."' >Accept</a></button>&nbsp;&nbsp;&nbsp;&nbsp;";
                                                                  
                                                                    echo "<button type='button' class='btn btn-danger  px-3 '><a class='aa' href='rejectapplication.php?id=".$array['candidate_id']."' >Reject</a></button></p>";
                                                                    
                                                                    echo "<b>Please Accept or Reject before:</b> ";
                                                                    echo "&nbsp;<p  class='mb-0 mr-auto' id='demo'><span id='year'>2022</span></p>";
                                                                   
                                                               }
                                                               else{
                                                                   
                                                               }

                                                                     //echo $array["interview_date"]." ".$date2." ".$date3;
                                                                
                                                                    ?>

                                                                     <!-- Script for timer below -->
                                                                     <script>
                                                                    function timer(date, now){
                                                                    var countDownDate = date * 1000;
                                                                    var now = now * 1000;

                                                                    var x = setInterval(function() {

                                                                    now = now + 1000;

                                                                    // Find the distance between now an the count down date
                                                                    var distance = countDownDate - now;

                                                                    // Time calculations for days, hours, minutes and seconds
                                                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                                    // Output the result in an element with id="demo"
                                                                    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                                                                        minutes + "m " + seconds + "s ";

                                                                    // If the count down is over, write some text 
                                                                    if (distance < 0) {
                                                                        clearInterval(x);
                                                                        document.getElementById("demo").innerHTML = "<b>Session Expired, Candidate Rejected</b>";
                                                                    }
                                                                    }, 1000);
                                                                    }
                                                                    </script>
                                                                     <?php
                                                                        $queryt="SELECT * FROM job_details,job_applications,candidate_profile,candidate_register where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_profile.candidate_id=job_applications.candidate_id and job_details.job_id=job_applications.job_id and admin_id=' ".$adminid." ' and job_applications.job_id='".$i."'"; 
                                                                                                    

                                                                        $resultt=mysqli_query($conn,$queryt);
                                                                        $arrayt=mysqli_fetch_assoc($resultt);

                                                                        $date2=date('Y-m-d',strtotime($arrayt["interview_date"].'+2 days'));

                                                                        $interviewtime=$arrayt['interview_time'];
                                                                        $interviewtime = explode("-",$interviewtime);

                                                                        $date3=$date2." ".$interviewtime[0];

                                                                        $date3=strtotime($date3);

                                                                        echo "<script> timer(".$date3.",".time()."); </script>";
                                                                         
                                                                    ?>
                                                                     
                                                                    
                                                                                                                                    
                                                                   <button type='button' class='btn btn-primary  px-3' ><a class='aa' href='view-m.php?id=<?php echo $array['candidate_id']; ?>'>View More</a></button></p>
                                                                </div>
                                                                 
                                                                 <?php
                                                                    if($array['application_status']=="Accepted"){
                                                                        echo "<center><b>Offer Accepted for $".$array['job_offer']." ".$array['job_type']." on ".$array['job_offer_final_date']."</b></center>";
                                                                    }elseif($array['application_status']=="Rejected"){
                                                                        echo "<center><b>Offer Rejected ".$array['job_offer_final_date']."</b></center>";
                                                                    }else{

                                                                    }
                                                                 ?>
                                                                 
                                                                 <div class="toolbar mb-4" role="toolbar">
                                                                     <!-- <div class="btn-group mb-1">
                                                                                 <button type="button" class="btn btn-primary light px-3"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                                                 </div>
                                                                    <div class="btn-group mb-1">          
                                                                                 <button type="button" class="btn btn-primary light px-3"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                                                                 </div>
                                                                    <div class="btn-group mb-1"> 
                                                                                 <button type="button" class="btn btn-primary light px-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                                                                                </div> -->
                                                                    <!-- <div class="btn-group mb-1"> 
                                                                                 <button type="button" class="btn btn-primary light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                 </div>
                                                                    <div class="btn-group mb-1"> 
                                                                                 <button type="button" class="btn btn-primary light px-3"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                                                 </div>
                                                                    <div class="btn-group mb-1">  
                                                                                 <button type="button" class="btn btn-primary light px-3" data-text="Delete Aplication"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                 </div>
                                                                                 <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button> -->
                                                                                
                                                                     </div>
                                                                     
                                                                     <!-- <div class="btn-group mb-1">
                                                                         <button type="button" class="btn btn-primary light px-3 dropdown-toggle " data-toggle="dropdown">
                                                                             <i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
                                                                         </button>
                                                                         <div class="dropdown-menu"> 
                                                                             <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                                             <a class="dropdown-item" href="javascript: void(0);">Promotions</a> 
                                                                             <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                                             <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                                         </div>
                                                                     </div> -->
                                                                     <!-- <div class="btn-group mb-1">
                                                                         <button type="button" class="btn btn-primary light px-3 dropdown-toggle " data-toggle="dropdown">
                                                                             <i class="fa fa-tag"></i> <b class="caret m-l-5"></b>
                                                                         </button>
                                                                         <div class="dropdown-menu"> 
                                                                             <a class="dropdown-item" href="javascript: void(0);">Updates</a> 
                                                                             <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                                             <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                                             <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                                         </div>
                                                                     </div> -->
                                                                     <!-- <div class="btn-group mb-1">
                                                                         <button type="button" class="btn btn-primary light px-3 dropdown-toggle " data-toggle="dropdown">More <span class="caret m-l-5"></span>
                                                                         </button>
                                                                         <div class="dropdown-menu"> <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a> <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                                             <a class="dropdown-item" href="javascript: void(0);">Add Star</a> <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                                         </div>
                                                                     </div> -->
                                                                 </div>
                                                         </div>
                                                        </div>
                                            </div>
                                        </div>
                                    <?php
                                     $k++;
                                    }
                                        
                                        else: echo "No Data Found"; 
                                    
                                        endif;
                                        
                                       
                                    }
                                        ?>

                                    
                                    <!-- <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse14">
                                            <img src="images/profile/small/pic5.jpg" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <span class="accordion__header--text"><b>Burak Yucel</b></span>
                                            <span class="accordion__header--indicator">
                                                <div class="btn-group mb-1"> 
                                                    <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                                    </div>
                                            </span>
                                        </div>
                                        <div id="default_collapse14" class="collapse accordion__body" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                                <div class="card">
                                                   
															<p class="mb-0 mr-auto">Email : burack@gmail.com</p>
															
                                                            <div class="d-flex">
																<p class="mb-0 mr-auto">Skills : Java , Php , C++ , HTML , css</p>
                                                                <div class="btn-group mb-1"> 
                                                                    <button type="button" class="btn btn-primary light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                    </div>
                                                                    </div>
                                                            <div class="media-body">
                                                                <div class="d-flex">
																	
                                                                 <p class="mb-0 mr-auto">Location : Cupertino, CA, USA</p>
                                                                 
                                                                 <a href="view-m.html" class="btn-link">View More</a>
                                                                 
                                                             </div>
                                                             
                                                                 <span><i class="ti-map" ></i>  Not willing to relocate</span>
                                                                 &nbsp;&nbsp;  &nbsp;&nbsp; <span><i class="ti-receipt" ></i>      C2C</span>
                                                                 &nbsp;&nbsp; &nbsp;&nbsp;  <span><i class="ti-world"></i>     Employment Auth Document</span><br>
             
                                                                 
                                                                 
                                                                 <span><i class="ti-calendar"  ></i> 3 Years exp</span> &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; 
																 <span><i class="ti-mobile"  ></i> 23478957899</span>
                                                                 
                                                                 <div class="toolbar mb-4" role="toolbar"> -->
                                                                    <!-- <div class="btn-group mb-1">
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">          
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                                                                               </div> -->
                                                                   <!-- <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">  
                                                                                <button type="button" class="btn btn-primary light px-3" data-text="Delete Aplication"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </div>
                                                                                <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button> -->
                                                                               
                                                                    <!-- </div>
                                                         </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse15">
                                            <img src="images/profile/small/pic4.jpg" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <span class="accordion__header--text"><b>Burak Yucel</b></span>
                                            <span class="accordion__header--indicator">
                                                <div class="btn-group mb-1"> 
                                                    <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                                    </div>
                                            </span>
                                        </div>
                                        <div id="default_collapse15" class="collapse accordion__body" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                                <div class="card">
                                                   
															<p class="mb-0 mr-auto">Email : burack@gmail.com</p>
															
                                                            <div class="d-flex">
																<p class="mb-0 mr-auto">Skills : Java , Php , C++ , HTML , css</p>
                                                                <div class="btn-group mb-1"> 
                                                                    <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                    </div>
                                                                    </div>
                                                            <div class="media-body">
                                                                <div class="d-flex">
																	
                                                                 <p class="mb-0 mr-auto">Location : Cupertino, CA, USA</p>
                                                                 
                                                                 <a href="view-m.html" class="btn-link">View More</a>
                                                                 
                                                             </div>
                                                             
                                                                 <span><i class="ti-map" ></i>  Not willing to relocate</span>
                                                                 &nbsp;&nbsp;  &nbsp;&nbsp; <span><i class="ti-receipt" ></i>      C2C</span>
                                                                 &nbsp;&nbsp; &nbsp;&nbsp;  <span><i class="ti-world"></i>     Employment Auth Document</span><br>
             
                                                                 
                                                                 
                                                                 <span><i class="ti-calendar"  ></i> 3 Years exp</span> &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; 
																 <span><i class="ti-mobile"  ></i> 23478957899</span>
                                                                 
                                                                 <div class="toolbar mb-4" role="toolbar"> -->
                                                                    <!-- <div class="btn-group mb-1">
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">          
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                                                                               </div> -->
                                                                   <!-- <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">  
                                                                                <button type="button" class="btn btn-primary light px-3" data-text="Delete Aplication"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </div>
                                                                                <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button> -->
                                                                               
                                                                    <!-- </div>
                                                         </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse16">
                                            <img src="images/profile/small/pic3.jpg" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <span class="accordion__header--text"><b>Burak Yucel</b></span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="default_collapse16" class="collapse accordion__body" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                                <div class="card">
                                                   
															<p class="mb-0 mr-auto">Email : burack@gmail.com</p>
															
															<div class="d-flex">
																<p class="mb-0 mr-auto">Skills : Java , Php , C++ , HTML , css</p>
                                                                <div class="btn-group mb-1"> 
                                                                    <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                    </div>
                                                                    </div>
                                                            <div class="media-body">
                                                                <div class="d-flex">
																	
                                                                 <p class="mb-0 mr-auto">Location : Cupertino, CA, USA</p>
                                                                 
                                                                 <a href="view-m.html" class="btn-link">View More</a>
                                                                 
                                                             </div>
                                                             
                                                                 <span><i class="ti-map" ></i>  Not willing to relocate</span>
                                                                 &nbsp;&nbsp;  &nbsp;&nbsp; <span><i class="ti-receipt" ></i>      C2C</span>
                                                                 &nbsp;&nbsp; &nbsp;&nbsp;  <span><i class="ti-world"></i>     Employment Auth Document</span><br>
             
                                                                 
                                                                 
                                                                 <span><i class="ti-calendar"  ></i> 3 Years exp</span> &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; 
																 <span><i class="ti-mobile"  ></i> 23478957899</span>
                                                                 
                                                                 <div class="toolbar mb-4" role="toolbar"> -->
                                                                    <!-- <div class="btn-group mb-1">
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">          
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                                                                               </div> -->
                                                                   <!-- <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">  
                                                                                <button type="button" class="btn btn-primary light px-3" data-text="Delete Aplication"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </div>
                                                                                <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button> -->
                                                                               
                                                                    <!-- </div>
                                                         </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse17">
                                            <img src="images/profile/small/pic2.jpg" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <span class="accordion__header--text"><b>Burak Yucel</b>
                                               </span>
                                            <span class="accordion__header--indicator">
                                                <div class="btn-group mb-1"> 
                                                    <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                                    </div>
                                            </span>
                                        </div>
                                        <div id="default_collapse17" class="collapse accordion__body" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                                <div class="card">
                                                   
															<p class="mb-0 mr-auto">Email : burack@gmail.com</p>
															
                                                            <div class="d-flex">
																<p class="mb-0 mr-auto">Skills : Java , Php , C++ , HTML , css</p>
                                                                <div class="btn-group mb-1"> 
                                                                    <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                    </div>
                                                                    </div>
                                                            <div class="media-body">
                                                                <div class="d-flex">
																	
                                                                 <p class="mb-0 mr-auto">Location : Cupertino, CA, USA</p>
                                                                 
                                                                 <a href="view-m.html" class="btn-link">View More</a>
                                                                 
                                                             </div>
                                                             
                                                                 <span><i class="ti-map" ></i>  Not willing to relocate</span>
                                                                 &nbsp;&nbsp;  &nbsp;&nbsp; <span><i class="ti-receipt" ></i>      C2C</span>
                                                                 &nbsp;&nbsp; &nbsp;&nbsp;  <span><i class="ti-world"></i>     Employment Auth Document</span><br>
             
                                                                 
                                                                 
                                                                 <span><i class="ti-calendar"  ></i> 3 Years exp</span> &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; 
																 <span><i class="ti-mobile"  ></i> 23478957899</span>
                                                                 
                                                                 <div class="toolbar mb-4" role="toolbar"> -->
                                                                    <!-- <div class="btn-group mb-1">
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">          
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                                                                               </div> -->
                                                                   <!-- <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-success light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">  
                                                                                <button type="button" class="btn btn-primary light px-3" data-text="Delete Aplication"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </div>
                                                                                <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button> -->
                                                                               
                                                                    <!-- </div>
                                                         </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse19">
                                            <img src="images/profile/small/pic1.jpg" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <span class="accordion__header--text"><b>Burak Yucel</b> </span>
                                            <span class="accordion__header--indicator">
                                                <div class="btn-group mb-1"> 
                                                    <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                                    </div>
                                            </span>
                                        </div>
                                        <div id="default_collapse19" class="collapse accordion__body" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                                <div class="card">
                                                    
                                                            <div class="media-body">
                                                                <div class="d-flex">
                                                                    <p class="mb-0 mr-auto">Skills : Java , Php , C++ , HTML , css</p>
                                                                    <div class="btn-group mb-1"> 
                                                                        <button type="button" class="btn btn-primary light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                        </div>
                                                                        </div>
                                                                <div class="d-flex">
                                                                 <p class="mb-0 mr-auto">Location : Cupertino, CA, USA</p>
                                                                 
                                                                 <a href="view-m.html" class="btn-link">View More</a>
                                                                 
                                                             </div>
                                                                 <p class="mb-0 mr-auto"> Skills : Java , Php , C++ , HTML , css</p>
                                                                 <span><i class="ti-map" ></i>  Not willing to relocate</span>
                                                                 &nbsp;&nbsp;  &nbsp;&nbsp; <span><i class="ti-receipt" ></i>      C2C</span>
                                                                 &nbsp;&nbsp; &nbsp;&nbsp;  <span><i class="ti-world"></i>     Employment Auth Document</span><br>
             
                                                                 
                                                                 
                                                                 <span><i class="ti-calendar"  ></i> 3 Years exp</span>
                                                                 
                                                                 <div class="toolbar mb-4" role="toolbar"> -->
                                                                    <!-- <div class="btn-group mb-1">
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">          
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-download" aria-hidden="true"></i></button>
                                                                               </div> -->
                                                                   <!-- <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1"> 
                                                                                <button type="button" class="btn btn-primary light px-3"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                                                </div>
                                                                   <div class="btn-group mb-1">  
                                                                                <button type="button" class="btn btn-primary light px-3" data-text="Delete Aplication"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                                </div>
                                                                                <button type="button" class="btn btn-primary light px-3" ><i class="fa fa-check-square-o" aria-hidden="true"></i></button> -->
                                                                               
                                                                    <!-- </div>
                                                         </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                
                   
                </div>
                <!-- Row ends -->
            </div>
            <!-- container ends -->
        </div>
        <!--**********************************
                Content body end
            ***********************************-->


        <?php include 'footer.html'; ?>


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   
	
	<script>
		(function($) {
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);
	</script>
	
</body>


</html>