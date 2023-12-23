<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
<head>

<?php
    include 'connect.php';
?>
</head>

<body>

 
                                <h4>Reschedule Meeting Details<br>
                                Reschedule date must be within 3 days of interview date</h4>
                         
                            
                        <?php
                            $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id AND application_status='Accepted' AND job_applications.candidate_id='1' AND job_applications.job_id='4'";
                            $result2=mysqli_query($conn,$query2);
                            while($array2=mysqli_fetch_assoc($result2)){
                                $date=$array2['interview_date'];


                        ?>
                                 <form action="reschedule2.php" method="post">
                                
                                            <label>Date: </label>
                                            <input type="date" name="date" value="<?php echo $array2['interview_date']; ?>" min="<?php echo $array2['interview_date']; ?>" max="<?php echo date( "Y-m-d", strtotime("$date +3 day")); ?>"  required>
                                       

                                        
                                            <label>Interview Time: </label>
                                            
                                       
                                          <input  type="radio" name="time1" id="min-date" value="<?php echo $array2['interview_time']; ?>" checked>
                                          <label  for="exampleRadios1">
                                           <?php echo $array2['interview_time']; ?>
                                          </label>
                                      
                                          <input  type="radio" name="time1" id="min-date" value="<?php echo $array2['interview_time2']; ?>">
                                          <label for="exampleRadios2">
                                           <?php echo $array2['interview_time2']; ?>
                                          </label>
                                      
                                          <input type="radio" name="time1" id="min-date" value="<?php echo $array2['interview_time3']; ?>">
                                          <label  for="exampleRadios2">
                                            <?php echo $array2['interview_time3']; ?>
                                          </label>
                                       
                                            <input type="submit"  name="submit">
                                    
                                   
                                </form>
                                <?php
                                 }

                                 
                                ?>
                         
                  
                                

    </section>
</body>

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
</html>


