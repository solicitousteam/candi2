<?php
include 'auth_session.php';
include 'connect.php';     
include 'header.html'; 

//$i=$_SESSION['jobid'];
$i=$_GET['id'];
$query="select * from job_details where job_id=$i";
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0):
                                                
while($array=mysqli_fetch_assoc($result)){ 
?>
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
        <!--**********************************
        
        
        <?php 
    include 'sidebar.php';    
    ?>
        
        
        
        
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Requirement</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Job Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form action="edit_requirement_data.php?id=<?php echo $i; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                        <div class="col-xl-6">
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Job ID<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <?php echo $i; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Job Title
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <?php echo $array['job_title']; ?><!-- <input type="text" class="form-control" id="val-username" name="title" placeholder="Job Title" value="" required> -->
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Email
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="email" class="form-control" id="val-username" name="email" placeholder="Email" value="<?php echo $array['job_mail']; ?>" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-password">Location
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-password" name="location" placeholder="Job Location" value="<?php echo $array['job_location']; ?>" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Job Description<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <textarea class="form-control" id="val-suggestions" name="description" rows="5" placeholder="What would you like to see?" value="<?php echo $array['job_description']; ?>" required><?php echo $array['job_description']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Experience  <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="val-password" name="job_exp" placeholder="Total Experience" value="<?php echo $array['job_exp']; ?>" required>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Post Expire Date<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" id="val-password" name="expire_date" placeholder="Post Expire Date" value="<?php echo $array['job_expire_date']; ?>" required>
                                                    </div> 
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Number Of Openings<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" id="val-password" name="opening" placeholder="Number Of Openings" value="<?php echo $array['job_opening']; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Skills Required
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                         <select multiple class="form-control default-select" id="sel2" name="skill[]" required>
                                                           <?php 
                                                           $result=mysqli_query($conn,"SELECT * FROM tbl_skill order by skill asc");
                                                           while($row_skill=mysqli_fetch_array($result))
                                                           {
                                                            $skill_array=explode(',',$array['job_skill']);?>
                                                            <option value="<?=$row_skill['skill']; ?>" <?php if (in_array($row_skill['skill'], $skill_array)) {echo 'selected';} ?> ><?=$row_skill['skill']; ?></option>
                                                           <?php } ?>
                                                        </select>
                                                       <!-- <select multiple class="form-control default-select" id="sel2" name="skill[]" required>
                                                            <option value="HTML" >HTML</option>
                                                            <option value="CSS" >CSS</option>
                                                            <option value="JavaScript">JavaScript</option>
                                                            <option value="Angular">Angular</option>
                                                            <option value="React">React</option>
                                                            <option value="VueJS">VueJS</option>
                                                            <option value="Ruby">Ruby</option>
                                                            <option value="PHP">PHP</option>
                                                            <option value="ASP NET">ASP.NET</option>
                                                            <option value="Python">Python</option>
                                                            <option value="MySQL">MySQL</option>
                                                        </select> -->
                                                     </div>
                                                    <!-- <div class="form-group row">
                                                        <label>Mutiple select list (hold shift to select more than one):</label>
                                                        <select multiple class="form-control default-select" id="sel2">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div> -->
                                                </div>
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Direct Hire/Contract
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="shift">
                                                            <option value="<?php echo $array['job_contract_type']; ?>"><?php echo $array['job_contract_type']; ?></option>
                                                            <option value="Full Time">Full-time</option>
                                                            <option value="Part Time">Part-time</option>
                                                            <option value="Contract">Contract</option>
                                                            <option value="W2">W2</option>
                                                            <option value="1099">1099</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>
												<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Pay Range
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                     <input type="text" class="form-control" id="val-password" name="pay" placeholder="Pay range" value="<?php echo $array['job_pay_range']; ?>" required>
                                                
                                                        <!--<select class="form-control default-select" id="val-skill" name="pay">
                                                        <option value="<?php echo $array['job_pay_range']; ?>"><?php echo $array['job_pay_range']; ?></option>
                                                            <option value="Annually">Annually</option>
                                                            <option value="Hourly">Hourly</option>
                                                        </select>-->
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-currency">Travel Requirement
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control default-select" id="val-skill" name="travel">
                                                    <option value="<?php echo $array['job_travel_requirement']; ?>"><?php echo $array['job_travel_requirement']; ?></option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <?php } endif; ?>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary rounded" name="submit">Submit</button>
                                                        

                                                <?php
                                                     
                                                    //   if(isset($_POST['submit'])){
                                                    //  $skill1=array();
                                                    //  $skill="";
                                                    //  //$id = stripslashes($_REQUEST['id']);
                                                    //  $title = stripslashes($_REQUEST['title']);
                                                    //  $email = stripslashes($_REQUEST['email']);
                                                    //  $location = stripslashes($_REQUEST['location']);
                                                    //  $description = stripslashes($_REQUEST['description']);
                                                    //  $skill1=$_REQUEST['skill'];
                                                    //  $shift = stripslashes($_REQUEST['shift']);
                                                    //  $pay = stripslashes($_REQUEST['pay']);
                                                    //  $travel = stripslashes($_REQUEST['travel']);
                                                    //  $post_date = stripslashes($_REQUEST['post_date']);
                                                    //  $expire_date = stripslashes($_REQUEST['expire_date']);
                                                    //  $opening = stripslashes($_REQUEST['opening']);
                                                     
                                                    //  foreach ($skill1 as $value) {
                                                    //     $skill.= $value.", ";
                                                    // }
                                                    //    rtrim($skill,",");

                                                    

                                                    //  $query="UPDATE `job_details` SET `job_title`='$title',`job_mail`='$email',`job_location`='$location',`job_description`='$description',`job_skill`='$skill',`job_contract_type`='$shift',`job_pay_range`='$pay',`job_travel_requirement`='$travel',`job_post_date`='$post_date',`job_expire_date`='$expire_date',`job_opening`='$opening',`job_status`='Active' WHERE job_id=$i";
                                                     
                                                    //  $result=mysqli_query($conn,$query);
                                                    //  if($result){
                                                    //     echo "Success<br><br>";
                                                    //     //echo "<a href='manage_job.php' class='btn btn-primary rounded'>Manage Job</a>";
                                                    //  }
                                                    //  else
                                                    //     echo "Try Again";
                                                    //   }
                                                    
                                                ?>
                                                  
                                            </div>
                                        </div>
                                    </form>
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


      

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   
	<script>
		jQuery(document).ready(function(){
			jQuery('.show-pass').on('click',function(){
				jQuery(this).toggleClass('active');
				if(jQuery('#dz-password').attr('type') == 'password'){
					jQuery('#dz-password').attr('type','text');
				}else if(jQuery('#dz-password').attr('type') == 'text'){
					jQuery('#dz-password').attr('type','password');
				}
			});
		});
	</script>
	<script>  
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            } 
    </script>
<?php include 'footer.html'; ?>
</body>



</html>