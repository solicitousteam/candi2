<?php   
 include 'auth_session.php';
 include 'header.html';
?>
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
                                
                              //  echo '------',$array['candidate_image']
                           
                            ?>
                                <!-- Default accordion -->
                                
                                   
                                    <div class="accordion__item">
                                        <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapse<?php echo $k; ?>">
                                            
                                            <?php if( $array['candidate_image'] !='' ){ ?>
                                            
                                            <img src="<?php echo "superio/pfp/".$array['candidate_image']; ?>" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <?php  }else { ?>
                                            <img src="<?php echo "images/Candi-AI-06.png"; ?>" class="mr-3" width="50" height="50" viewBox="0 0 80 80" fill="none">
                                            <?php } ?>
                                            
                                            
                                            
                                            
                                            
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
                                                                     </div>
                                                                     
                                                                   
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
                                </div>
                            </div>
                        </div>
                    </div>
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
             