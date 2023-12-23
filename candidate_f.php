<?php
include 'auth_session.php';
include 'header.html'; ?>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Requirement</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th class="width50">
                                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>Job Title</th>
                                            <th>Application</th>
                                            <th>Job Status</th>
                                            <th>Expiry Date</th>
                                            <!-- <th>Date</th>
                                            <th>Status</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php       
                                    $i=0;
                                    $k=0;
                                    
                if( isset( $_SESSION['p_id'] ) && $_SESSION['p_id'] !='') {
                                                   
                                                 $pid =   $_SESSION['p_id'];
                                                 $queryid="select admin_email from admin where  admin_id = '$pid'";
                                                 $resid = mysqli_query($conn, $queryid); 
                                                 $adminid = mysqli_fetch_assoc($resid);
                                                 $_SESSION['email']=$adminid['admin_email']; 
                                                  
                                                  }
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    $queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
                                    $resulti=mysqli_query($conn,$queryi);
                                    $arrayi=mysqli_fetch_array($resulti);
                                    $adminid = $arrayi[0];
                                     $query1="Select count(job_id) from job_details where admin_id='$adminid'"; 
                                    $result1=mysqli_query($conn,$query1);
                                    $array1=mysqli_fetch_array($result1);
                                    $count = $array1[0];

                                    $query5="Select job_id from job_details where admin_id='$adminid'"; 
                                    $result5=mysqli_query($conn,$query5);
                                    $array5=mysqli_fetch_array($result5);

                                    while($k<$count){
                                    $currdate=date("Y-m-d");
                                   

                                    $query="Select * FROM job_details where admin_id=' ".$adminid." ' ORDER BY date(job_expire_date) desc"; 
                                    $result=mysqli_query($conn,$query);
                                    if ($result->num_rows > 0):
                                        
                                    while($array=mysqli_fetch_assoc($result)){
                                        $query2="Select count(job_id) from job_applications where job_id='".$array['job_id']."'"; 
                                        $result2=mysqli_query($conn,$query2);
                                        $array2=mysqli_fetch_array($result2);
                                        
                                        $query3="Select job_expire_date from job_details where job_id='".$array['job_id']."'"; 
                                        $result3=mysqli_query($conn,$query3);
                                        $array3=mysqli_fetch_array($result3);
                                        @$jobdate = $array3[0];
    
                                        if($currdate>$jobdate){
                                            $query3="UPDATE `job_details` SET `job_status`='Expired' WHERE job_id='".$array['job_id']."'";
                                            $result3=mysqli_query($conn,$query3);
                                        }
                                        else{
                                            $query3="UPDATE `job_details` SET `job_status`='Active' WHERE job_id='".$array['job_id']."'";
                                            $result3=mysqli_query($conn,$query3);    
                                        }
                                        ?>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckBox1" required="">
                                                    <label class="custom-control-label" for="customCheckBox1"></label>
                                                </div>
                                            </td>
                                            <!-- <td><strong>542</strong></td>
                                            <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td> -->
                                            <td><?php echo $array["job_title"]; ?><br><?php echo $array["job_location"]; ?><br><?php echo "Created at: ".$array["job_post_date"]; ?></td>
                                            <?php 
                                            if($array['job_status']=="Expired"){
                                          //          echo "<td><a href='javascript:void(0);'>".$array2[0]." Application(s)</a></td>";
                                                  echo "<td><a href='candidate_view.php?id=".$array['job_id']."'>".$array2[0]." Application(s)</a></td>"; 
                                              } 
                                                else
                                                    echo "<td><a href='candidate_view.php?id=".$array['job_id']."'>".$array2[0]." Application(s)</a></td>"; 
                                            ?>
                                            
                                            
                                            <td><div class="d-flex align-items-center">
                                                <?php if($array["job_status"]=="Active") echo "<i class='fa fa-circle text-success mr-1'></i>"; else echo "<i class='fa fa-circle text-danger mr-1'></i>";   ?>
                                                <?php echo $array["job_status"]; ?></td>
                                            <!-- <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td> -->
                                            <td><?php echo $array["job_expire_date"]; ?></div></td>
                                        </tr>
                                        <?php 
                                            $k++;   
                                                                   
                                        }
                                        $i++; 
                                        endif;
                                        
                                        

                                        }
                                        ?>
                                        <tr>
                                            <!-- <td>
                                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                                    <label class="custom-control-label" for="customCheckBox2"></label>
                                                </div>
                                            </td> -->
                                            <!-- <td><strong>542</strong></td>
                                            <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td> -->
                                            <!-- <td><b>Java Developer</b><br>pune, Maharashtra<br>Created:21 December 2021	</td>
                                            <td>4 <a href="candidate.php">Application</a></td>
                                            <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Open</div></td> -->
                                            <!-- <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td> -->
                                        <!-- </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                                                    <label class="custom-control-label" for="customCheckBox3"></label>
                                                </div>
                                            </td> -->
                                            <!-- <td><strong>542</strong></td>
                                            <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td> -->
                                            <!-- <td><b>Php Developer</b><br>pune, Maharashtra<br>Created:21 December 2021	</td>
                                            <td>4 <a href="candidate.php">Application</a></td>
                                            <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Open</div></td> -->
                                            <!-- <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td> -->
                                        <!-- </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- Required vendors -->
   
	
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