<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
// include 'sidebar.html';
?>

</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>


    <!-- Main Header-->
<?php
  include 'sidebar.php';
?>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Jobs Applied</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <!-- <h4>Interviews</h4> -->

                                <!-- <div class="chosen-outer">
                                     Tabs Box
                                     <select class="chosen-select">
                                        <option>Last 6 Months</option>
                                        <option>Last 12 Months</option>
                                        <option>Last 16 Months</option>
                                        <option>Last 24 Months</option>
                                        <option>Last 5 year</option>
                                    </select>ph
                                </div> -->
                            </div>

                            <div class="widget-content">
                                <div class="table-outer">
                                    <table class="default-table manage-job-table">
                                        <thead>
                                            <tr>
                                                <th>Job Title</th>
                                                <!--<th>Interview Details</th>-->
                                                <th>Application Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                            $query2="SELECT * FROM job_applications, job_details, candidate_register,admin WHERE job_details.job_id=job_applications.job_id AND candidate_register.candidate_id=job_applications.candidate_id AND job_details.admin_id=admin.admin_id  AND job_applications.candidate_id='".$_SESSION['candidate_id']."' ORDER BY application_status";
                                            $result2=mysqli_query($conn,$query2);
                                            while($array2=mysqli_fetch_assoc($result2)){
                                        ?>
                                            <tr>
                                                <td>
                                                    <!-- Job Block -->
                                                    <div class="job-block">
                                                        <div class="inner-box">
                                                            <div class="content">
                                                                <span class="company-logo"><img src="../logo/<?php echo $array2['admin_logo']; ?>" alt="company logo"></span>
                                                                <h4><a href="#"><?php echo $array2['job_title']; ?></a></h4>
                                                                <ul class="job-info">
                                                                    <li><span class="icon flaticon-briefcase"></span> <?php echo $array2['job_contract_type']; ?></li>
                                                                    <li><span class="icon flaticon-map-locator"></span><?php echo $array2['job_location']; ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <!--<td><?php echo "Date: ".$array2['interview_date']; ?><?php echo "<br>Time: ".$array2['interview_time']; ?></td>-->
                                                <?php if($array2["application_status"]=="Accepted" || $array2["application_status"]=="In Progress" || $array2["application_status"]=="" ) echo "<td class='status'>"; else echo "<td class='status-danger'>";   ?>
                                                <?php echo $array2["application_status"]; ?></td>
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                            <?php
                                                                if($array2['application_status']=="Rejected"){
                                                                    echo "<li><button data-text='View Application' ><a href='javascript:void(0);'><span class='la la-eye'></span></a></button></li>";
                                                            } 
                                                                else
                                                                    echo "<li><button data-text='View Application' ><a href='candidate_view_application.php?id=".$array2['job_id']."'><span class='la la-eye'></span></a></button></li>"; 
                                                            ?>
                                                            
                                                            <!--<li><button data-text='View Application' ><a href='candidate_view_application.php?id=<?php //echo $array2['job_id'];?>'><span class='la la-eye'></span></a></button></li>-->
                                                            <!-- <li><button data-text="Delete Application"><span class="la la-trash"></span></button></li> -->
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                                
                                            }
                                            ?>
                                            <!-- <tr>
                                                <td>
                                                    Job Block 
                                                    <div class="job-block">
                                                        <div class="inner-box">
                                                            <div class="content">
                                                                <span class="company-logo"><img src="images/resource/company-logo/1-2.png" alt=""></span>
                                                                <h4><a href="#">Senior Product Designer</a></h4>
                                                                <ul class="job-info">
                                                                    <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Dec 5, 2020</td>
                                                <td class="status">Active</td>
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                   Job Block
                                                    <div class="job-block">
                                                        <div class="inner-box">
                                                            <div class="content">
                                                                <span class="company-logo"><img src="images/resource/company-logo/1-3.png" alt=""></span>
                                                                <h4><a href="#">Sr. Full Stack Engineer</a></h4>
                                                                <ul class="job-info">
                                                                    <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Dec 5, 2020</td>
                                                <td class="status">Active</td>
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Job Block 
                                                    <div class="job-block">
                                                        <div class="inner-box">
                                                            <div class="content">
                                                                <span class="company-logo"><img src="images/resource/company-logo/1-4.png" alt=""></span>
                                                                <h4><a href="#">Product Manager, Studio</a></h4>
                                                                <ul class="job-info">
                                                                    <li><span class="icon flaticon-briefcase"></span> Segment</li>
                                                                    <li><span class="icon flaticon-map-locator"></span> London, UK</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Dec 5, 2020</td>
                                                <td class="status">Active</td>
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                            <li><button data-text="View Aplication"><span class="la la-eye"></span></button></li>
                                                            <li><button data-text="Delete Aplication"><span class="la la-trash"></span></button></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- End Dashboard -->

    <!-- Copyright -->
<?php
    include 'candidate-footer.html';
?>
</html>


