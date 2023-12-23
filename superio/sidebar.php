<?php
include '../connect.php';
$email=$_SESSION['email'];
$querys="Select * from candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id and candidate_register.candidate_email = '".$email."'"; 
$results=mysqli_query($conn,$querys);
$arrays=mysqli_fetch_assoc($results);
?>

<style>
.sidenav {
    min-width: 264px !important;
}
a.dropdown-item:hover {
    background-color: #FFF1D2;
}
.user-sidebar .navigation li a i{
    left: 7px;
}
a.man-pro{
    color: #696969;
}

i.fa.fa-caret-down {
    font-size: 22px;
}

a.man-pro:hover {
    color: #696969;
}

a.dropdown-item {
    text-align: center;
    color: #696969;
}

i.fas.fa-user-edit{
    margin-left: 32px;
    margin-right: 16px;
    color: #696969;
    margin-bottom: 10px;
    margin-top: 10px;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  /*background-color: #262626;*/
  padding-left: 8px;
}

.fa-caret-down:before {
    content: "\f0d7";
    margin-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


 <!-- Header Span -->
 <span class="header-span"></span> 

 <!-- Main Header-->
      <?php include 'navbar.php';?>
      <!--End Main Header -->

  <!-- Sidebar Backdrop -->
  <div class="sidebar-backdrop"></div>

<!-- User Sidebar -->
<div class="user-sidebar">

    <div class="sidebar-inner">
        <ul class="navigation">
             <li>
              <a href="candidate-dashboard.php"
                ><i class="la la-home"></i>Dashboard</a
              >
            </li>
           
           <li class=""><a href="candidate-dashboard-profile.php"><i class="la la-user"></i>My Profile</a></li>
            <li class=""><a href="candidate-dashboard-resume.php"><i class="la la-paste"></i>My Resume</a></li>
          
            <li>
 <div class="sidenav">
  <button class="dropdown-btn"><a><i class="la la-briefcase"></i>Jobs  <i class="fa fa-caret-down"></i></a>
  </button>
  
  <div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="job_opening.php">- Job Openings</a>
    <a class="dropdown-item" href="jobs_applied.php">- Jobs applied</a>
    
  </div>
  
</div>
           </li>
           <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 1; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

    
               
            
            
           
				
            <!--<li>-->
            <!--  <a href="job_opening.php"-->
            <!--    ><i class="la la-briefcase"></i> Job Openings</a-->
            <!--  >-->
            <!--</li>-->
            <!--<li><a href="jobs_applied.php"><i class="la la-bookmark-o"></i>Jobs applied</a></li> -->

            <!--<li>-->
            <!--  <a href="http://r.py.solicitous.cloud/"-->
            <!--    ><i class="la la-sticky-note"></i>Document Validation</a-->
            <!--  >-->
            <!--</li>-->
            
            <li>
 <div class="sidenav">
  <button class="dropdown-btn"><a><i class="la la-sticky-note"></i> Document Validation  <i class="fa fa-caret-down"></i></a>
  </button>
  
  <div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href=""> - Visa</a>
    <a class="dropdown-item" href="">- Identity Proof</a>
    <a class="dropdown-item" href=""> - Green Card </a>
    <a class="dropdown-item" href="">- Other</a>
  </div>
  
</div>
           </li>
              <li>
              <a href="candidate-dashboard-shortlisted-jobs.php"
                ><i class="la la-file-text"></i>Short Listed Jobs</a
              >
            </li>
            <li class="">
              <a href="interview-terms.php"
                ><i class="la la-reddit"></i>Candi Interview</a
              >
            </li>

            

          

            <!-- <li><a href="dashboard-change-password.php"><i class="la la-unlock-alt"></i>Change Password</a></li>-->
            <!--<li><a href="change-email.php"><i class="la la-retweet"></i>Change Email</a></li>-->
            <!--<li><a href="accpass.php"><i class="la la-trash"></i>Delete Account</a></li>-->
             <li><a href="candidate-feedback.php"><i class="la la-thumbs-up"></i>Feedback</a></li>
             <li><a href=""><i class="la la-rupee"></i>Refer & Earn</a></li>
             
          <!--<div class="sidenav">-->
  <!--<button class="dropdown-btn"><a class="man-pro"><i class='fas fa-user-edit'></i>Manage Profile</a>-->
  <!--</button>-->
  
  <!--<div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
  <!--  <a class="dropdown-item" href="add_profile.php">Add</a>-->
  <!--  <a class="dropdown-item" href="modify_profile.php">Modify</a>-->
  <!--  <a class="dropdown-item" href="delete-account.php">Delete</a>-->
    
  <!--</div>-->
  
<!--</div>-->

             
             
             
             
             
            <!--<li>-->
            <!--  <a href="candidate-logout.php"><i class="la la-sign-out"></i>Logout</a>-->
            <!--</li>-->
  <!--           <li class="dropdown">-->
  <!--            <a href="" class="dropdown-toggle"-->
  <!--              id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-cog"></i> Account Setting-->
  <!--            </a>-->
  <!--            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">-->
   
  <!--  <a class="dropdown-item" href="dashboard-change-password.php">Change Password</a>-->
  <!--  <a class="dropdown-item" href="change-email.php">Change Email</a>-->
  <!--  <a class="dropdown-item" href="#">Update Profile</a>-->
  <!--  <a class="dropdown-item" href="candidate-logout.php">Logout</a>-->
  <!--  <a class="dropdown-item" href="accpass.php">Delete Profile</a>-->
  <!--</div>-->
  <!--          </li>-->
  
  <li>
            <div class="sidenav">
  <button class="dropdown-btn"><a><i class="la la-cog"></i>Account Setting  <i class="fa fa-caret-down"></i></a>
  </button>
  
  <div class="dropdown-container" class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="dashboard-change-password.php">- Change Password</a>
    <a class="dropdown-item" href="change-email.php">- Change Email</a>
    <a class="dropdown-item" href="#">- Update Profile</a>
    <a class="dropdown-item" href="candidate-logout.php">- Logout</a>
    <a class="dropdown-item" href="accpass.php">- Delete Profile</a>
  </div>
  
</div>
           </li>
           <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 2; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

            
        </ul>

      
    </div>
</div>

<!-- End User Sidebar -->









