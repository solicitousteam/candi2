<html lang="en">
<head>
<script>  
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            } 
</script>
    <?php 
    include 'auth_session.php';
    include 'header.html';
    include 'connect.php';
    $i=$_GET['id'];
    $j=$_SESSION['job_id'];
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
    ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <?php
                    $query3="SELECT * from job_applications,candidate_register WHERE job_applications.job_id=candidate_register.candidate_id AND job_applications.job_id='".$j."' AND job_applications.candidate_id='".$i."'";
                    $result4=mysqli_query($conn,$query3);
                    $array4=mysqli_fetch_assoc($result4);

                ?>
               
                <div class="row">
               
                        <div class="col-xl-8 col-xxl-8 col-lg-8" >
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Give Final Offer</h4>
                                    
                                </div>
                                <div class="card-body">
                                <h6 class="card-title">Choose One:</h6>
                                <form action="finaloffer-data.php?id=<?php echo $i; ?>" method="POST">
                                <div class="row form-material">
                                        <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">
                                        <input type='radio' name='jobtype' value='annually' required>
                                            <label>Salary Basis: (Annually)</label>
                                            <input type="text" class="form-control" placeholder="Eg. $56,310" name="annually" >
                                            </div>
                                         </div>

                                         <div class="row form-material"><div class="col-xl-4 col-xxl-6 col-md-6 mb-3"><h4 >OR</h4></div></div>

                                    <div class="row form-material">
                                    <div class="col-xl-4 col-xxl-6 col-md-6 mb-3">
                                     <input type='radio' name='jobtype' value='hourly' required>
                                    <label> Hourly Basis: </label>
                                            <input type="text" class="form-control" placeholder="Eg. $90/hr" name="hourly" >
                                        </div>
                                    </div>
                                      
                                        
                                         <div class="form-group material">
                                           <!-- <div class="col-lg-8 ml-auto"> -->
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           <?php
                                           if(empty($array4['job_offer'])){
                                           echo "<input type='submit' class='btn btn-primary' name='submit' value='Send Offer'>"; 
                                           }
                                           else{
                                                echo "<div class='row form-material'><div class='col-xl-8 col-xxl-8 col-md-8 mb-8'><h5>
                                                Offer Made: $".$array4['job_offer']." ".$array4['job_type']."&nbsp;&nbsp;&nbsp;On Date: ".$array4['job_offer_date']."
                                                </h5></div></div>";
                                           }
                                           ?>
                                            
                                            <!--</div>-->
                                        </div> 
                                      </form>
                                        <br>
                                      
                                    </div>
                                </div>
                            </div>
                            <?php
                                        
                                        // if(!empty($array4['counter_job_offer'])){
                                        //     echo "<div class='col-xl-6 col-xxl-6 col-lg-6' >
                                        //         <div class='card'>
                                        //         <div class='card-header'><h6 class='card-title'>Counter Offer:</h6></div>";
                                        //     echo "<div class='card-body'><div class='col-xl-4 col-xxl-6 col-md-6 mb-3'>Offer Made: $".$array4['job_offer']." ".$array4['job_type']."<br>";
                                        //     echo "Counter Offer: $".$array4['counter_job_offer']." ".$array4['job_type']."<br><br>";
                                        //     echo "<input type='button' class='btn btn-primary' name='accept' value='Accept'> &nbsp; &nbsp; &nbsp; <input type='button' class='btn btn-primary' name='reject' value='Reject'>";
                                        //     echo "</div></div></div></div>";
                                        
                                        if($array4['job_offer_status']=="Accepted"){
                                            echo "<div class='col-xl-8 col-xxl-8 col-lg-8' >
                                            <div class='card'>
                                            <div class='card-header'>
                                            <h4 class='card-title'>
                                            <center>Offer Accepted by ".$array4['candidate_fname']." ".$array4['candidate_lname']." <br><br>Offer: $".$array4['job_offer']." ".$array4['job_type']." <br>Date: ".$array4['job_offer_final_date']."</center></h4>
                                            </div></div></div>";
                                        }
                                        elseif($array4['job_offer_status']=="Rejected"){
                                            echo "<div class='col-xl-8 col-xxl-8 col-lg-8' >
                                            <div class='card'>
                                            <div class='card-header'>
                                            <h4 class='card-title'>
                                            <center>Offer Rejected by ".$array4['candidate_fname']." ".$array4['candidate_lname']." <br><br>Date: ".$array4['job_offer_final_date']."</center></h4>
                                            </div></div></div>";
                                        }
                                         elseif(!empty($array4['counter_job_offer'])){
                                                 echo " <div class='col-xl-6 col-xxl-6 col-lg-6' >
                                                        <div class='card'>
                                                        <div class='card-header'>
                                                        <h4 class='card-title'>Counter offer</h4>
                                                        </div>
                                                        <div class='card-body'>
                                                        <div class='row mb-2'>
                                                        <div class='col-sm-5 col-12'>";
                                                echo " <h5 class='f-w-500'>Offer made <span class='pull-right'>:</span>
                                                        </h5>
                                                        </div>
                                                        <div class='col-sm-4 col-7'><span>$".$array4['job_offer']." ".$array4['job_type']."</span>
                                                        </div>
                                                        </div>";
                                                echo "<div class='row mb-2'>
                                                        <div class='col-sm-5 col-12'>
                                                        <h5 class='f-w-500'>New offer<span class='pull-right'>:</span>
                                                        </h5>
                                                        </div>
                                                        <div class='col-sm-4 col-7'><span>$".$array4['counter_job_offer']." ".$array4['job_type']."</span>
                                                        </div>
                                                        </div>";
                                                echo "<div class='form-group row'>
                                                        <div class='col-lg-4 '>
                                                        <center><a class='btn btn-success' href='acceptapplication.php?id=".$i."' >Accept</a></center>
                                                        </div>
                                                        <div class='col-lg-4 '>
                                                        <center><a class='btn btn-danger' href='rejectapplication.php?id=".$i."'>Reject</a></center>
                                                        </div>
                                                        </div>";
                                                echo "</div></div></div>";

                                        }
                                        else{

                                        }
                                       
                                        ?>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <?php include 'footer.html'; ?>



</html>