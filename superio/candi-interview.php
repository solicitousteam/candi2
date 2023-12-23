<?php
    include 'candidate-auth-session.php';
    include '../connect.php';
    include 'candidate-header.html';
?>
</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
<?php
    include 'candidate-sidebar.php';
?>

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
            <h3>Interview Details</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <!-- <h4>Reschedule Meeting Details<br>
                                Reschedule date must be within 3 days of interview date</h4> -->
                                <h4>Select Interview Date and Time</h4>
                            </div>
                            
                        <?php
                            $j=$_GET['id'];
                            $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND job_applications.candidate_id='".$arrays['candidate_id']."' AND job_applications.job_id='".$j."'";
                            $result2=mysqli_query($conn,$query2);
                            while($array2=mysqli_fetch_assoc($result2)){
                                $time=$array2['interview_time'];
                                $date=$array2['interview_date'];
                                $time= date('H:i', strtotime($time));
                        ?>
                            <div class="widget-content">
                                 <form class="default-form" action="reschedule.php?id=<?php echo $j; ?>" method="post">
                                
                                    <!-- <div class="row"> -->
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Date: </label>
                                            <!--<input type="date" name="date" value="<?php echo $array2['interview_date']; ?>" min="<?php echo $array2['interview_date']; ?>" max="<?php echo date( "Y-m-d", strtotime("$date +3 day")); ?>"  required>-->
                                            <?php echo $array2['interview_date']; ?>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                        <label>Interview Time: </label><br>
                                            <input  type="radio" name="time1" id="min-date" value="<?php echo $array2['interview_time']; ?>" checked>
                                          <label  for="exampleRadios1">
                                           <?php echo $array2['interview_time']; ?>
                                          </label>
                                          </div>

                                          <div class="form-group col-lg-6 col-md-12">
                                          <input  type="radio" name="time1" id="min-date" value="<?php echo $array2['interview_time2']; ?>">
                                          <label for="exampleRadios2">
                                           <?php echo $array2['interview_time2']; ?>
                                          </label>
                                          </div>

                                          <div class="form-group col-lg-6 col-md-12">
                                          <input type="radio" name="time1" id="min-date" value="<?php echo $array2['interview_time3']; ?>">
                                          <label  for="exampleRadios2">
                                            <?php echo $array2['interview_time3']; ?>
                                          </label>
                                          </div>
                                        

                                        <!-- <div class="form-group col-lg-6 col-md-12">
                                            <label>Slot</label>
                                            <select class="chosen-select" name="slot" required>
                                           <?php /*if(!empty($array2['interview_slot']))
                                                    echo "<option value='".$array2['interview_slot']."' selected disabled hidden>".$array2['interview_slot']."</option>";
                                                 else
                                                    echo "<option value='none' selected disabled hidden>Select a Slot</option>";*/  
                                           ?>
                                            <option value="10 am - 11 am">Morning: 10 am - 11 am</option>
                                            <option value="11 am - 12 pm">Morning: 11 am - 12 pm</option>
                                            <option value="12 pm - 1 pm">Afternoon: 12 pm - 1 pm</option>
                                            <option value="1 pm - 2 pm">Afternoon: 1 pm - 2 pm</option>
                                            <option value="2 pm - 3 pm">Afternoon: 2 pm - 3 pm</option>
                                            <option value="3 pm - 4 pm">Afternoon: 3 pm - 4 pm</option>
                                            <option value="4 pm - 5 pm">Afternoon: 4 pm - 5 pm</option>
                                            <option value="5 pm - 6 pm">Evening: 5 pm - 6 pm</option>
                                            <option value="6 pm - 7 pm">Evening: 6 pm - 7 pm</option>
                                          </select>
                                          <br>
                                        </div> -->
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <input type="submit" class="theme-btn btn-style-one" name="submit">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                 }

                                 
                                ?>
                            </div>
                        </div>
                    </div>

                  
                                

                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->
<?php
    include 'candidate-footer.html';
?>
</body>

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
</html>


