<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';

$candidate_id=$_SESSION['candidate_id'];
    $candidate_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE candidate_id=$candidate_id"));
    
   $candSkill =  $candidate_data['candidate_skills'];
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
                <h3>Jobs Openings</h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                      
                      
                       <!-- Job Search Form -->
        <div class="job-search-form">
          <form method="post" action="">
            <div class="row">
              <!-- Form Group -->
              <div class="form-group col-lg-4 col-md-12 col-sm-12">
                <span class="icon flaticon-search-1"></span>
                <input type="text" name="field_name" placeholder="Job title, keywords, or company">
              </div>
              

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-map-locator"></span>
                <input type="text" name="field_name" placeholder="City ">
              </div>

              <!-- Form Group -->
              <div class="form-group col-lg-3 col-md-12 col-sm-12 location">
                <span class="icon flaticon-briefcase"></span>
                <select class="chosen-select">
                  <option value="">All Categories</option>
                  <option value="44">Accounting / Finance</option>
                  <option value="106">Automotive Jobs</option>
                  <option value="46">Customer</option>
                  <option value="48">Design</option>
                  <option value="47">Development</option>
                  <option value="45">Health and Care</option>
                  <option value="105">Marketing</option>
                  <option value="107">Project Management</option>
                </select>
              </div>
              

              <!-- Form Group -->
              <div class="form-group col-lg-2 col-md-12 col-sm-12 text-right">
                <button type="submit" class="theme-btn btn-style-one">Find Jobs</button>
              </div>
            </div>
          </form>
        </div>
        <!-- Job Search Form -->
                            
                           
                            <!-- 
                            
                             <div class="input-group">
     <span class="input-group-addon"><strong>Search : </strong></span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
                            
                            
                            -->
                            
                            
     
                            <div class="widget-content">
                                <div class="table-outer">
                                    <table class="default-table manage-job-table">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>Job Title</th>
                                                <!--<th>Company Name</th>-->
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        
                                        $searchAll='';
                                        if(   isset($_GET['search_text']) ){
                                            
                                            $txtVal = $_GET['search_text'];
                                            
                                            $searchAll = " AND ( job_details.job_contract_type LIKE '%$txtVal%' OR job_details.job_skill LIKE '%$txtVal%' OR job_details.job_location LIKE '%$txtVal%' OR admin.admin_company_name LIKE '%$txtVal%')";
                                        }
                                        
                                        
                                        
                                        
                                       $candSkillSearhc=''; 
                                       $candSkill =   explode(',', $candSkill );
                                        
                                        foreach( $candSkill as $candSkill ){
                                            $candSkillSearhc .= "OR  job_details.job_skill LIKE '%$candSkill%' ";
                                        }
                                        
                                       // echo '--------'.$candSkillSearhc;
                                        $candSkillSearhc =  ( ltrim($candSkillSearhc, 'OR') );
                                        
                                        $candSkillSearhc = "  AND  ($candSkillSearhc) ";
                                        
                                        
                                        $currentDatechecker = date('Y-m-d');
                                       
                                        // $query2="SELECT * FROM  job_details,candidate_register,admin,candidate_profile WHERE  candidate_register.candidate_id=candidate_profile.candidate_id AND candidate_profile.candidate_jobtitle=job_details.job_title AND  admin.admin_id=job_details.admin_id  AND candidate_profile.candidate_id=$candidate_id  $searchAll   order by job_details.job_id desc";
                                        
                                         $candidate_id=$_SESSION['candidate_id'];
                                     $query2="SELECT DISTINCT job_details.job_id,job_details.*,candidate_register.*,admin.*,candidate_profile.* FROM  job_details,candidate_register,admin,candidate_profile WHERE  job_details.job_expire_date >= $currentDatechecker  and candidate_register.candidate_id=candidate_profile.candidate_id AND  admin.admin_id=job_details.admin_id  AND candidate_profile.candidate_id=$candidate_id  $searchAll  $candSkillSearhc   order by job_details.job_post_date desc";
                                            
                                           
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
                                                                <!--<h4><a href="#"><?php echo $array2['admin_company_name']; ?></a></h4>-->
                                                                <h4><span><?php echo $array2['admin_company_name']; ?></span></h4>
                                                                <ul class="job-info">
                                                                    <li><span class="icon flaticon-briefcase"></span> <?php echo $array2['job_contract_type']; ?></li>
                                                                    <li><span class="icon flaticon-map-locator"></span><?php echo $array2['job_location']; ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><?php echo $array2['job_title']; ?></td>
                                                
                                                <td>
                                                    <div class="option-box">
                                                        <ul class="option-list">
                                                         <?php
                                                                    // echo "<li><button data-text='View Job' ><a href='job_opening_detail.php?id=".$array2['job_id']."'><span class='la la-eye'></span></a></button></li>";
                                                                    echo "<li><button data-text='View Job' ><a href='job_opening_detail.php?id=".$array2['job_id']."'><span class='la la-eye'></span></a></button></li>";
                                                            ?>
                                                            
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


