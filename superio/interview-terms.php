<?php 
include 'candidate-auth-session.php';
include '../connect.php';
include 'candidate-header.html';
?>

  <body>
    <div class="page-wrapper dashboard">
      <!-- Preloader -->
      <div class="preloader"></div>

     <?php
    include 'sidebar.php';
?>
<style>

.form-group.col-lg-5.col-md-12.view-block{
        position: relative;
        margin-left: 100px;
        width: 100%;
        margin-top: 25;
}

.circle {
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 62px;
}

.circle-02{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 161px;
}

.circle-03{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 232px;
}

.circle-04{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 307px;
}

.circle-05{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 376px;
}

.circle-06{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 450px;
}

.circle-07{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 520px;
}

.circle-08{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 101px;
}

.circle-09{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 172px;
}

.circle-10{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 245px;
}

.circle-11{
    position: absolute;
    content: '';
    height: 10px;
    width: 10px;
    background: black;
    border-radius: 100%;
    left: -13px;
    top: 317px;
}


/*     .border {*/
/*    display: inline-block;*/
/*    width: 70px;*/
/*    height: 70px;*/
/*    margin: 6px;*/
/*  }*/

@media (min-width:250px) and (max-width:500px){
    div.border-dark{
        width:auto!important;
        margin-left:0px!important;
    }
    .form-group.view-block{
        margin-top: 25px!important;
        margin-left: 5px!important;
        width:auto!important;
    }
    div.note-div{
        margin:0px 10px!important;
        letter-spacing:1.2px!important;
    }
    .copyright-text p{
        margin-left:0px!important;
    }
}

@media screen and (max-width: 900px){
      .form-group.col-lg-5.col-md-12.view-block{
              margin-left: 36px !important;
      }
}

@media (min-width:800px) and (max-width:1000px){
      .circle{
         top: 67px;
      }  
      .circle-02{
         top: 113px;
      }
      .circle-03{
          top: 162px;
      }
      .circle-04{
          top:206px;
      }
      .circle-05{
          top:255px;
      }
      .circle-06{
          top:304px;
      }
      .circle-07{
          top:353px;
      }
      .circle-08{
          
      }
      .circle-09{
          
      }
      .circle-10{
          
      }
      .circle-11{
          
      }
}

@media (min-width:992px) and (max-width:1000px){
    .circle{
        top:66px;
    }
    .circle-02{
        top:162px;
    }
    .circle-03{
        top:233px;
    }
    .circle-04{
        top:304px;
    }
    .circle-05{
        top:376px;
    }
    .circle-06{
        top:449px;
    }
    .circle-07{
        top:520px;
    }
}
@media (min-width:500px) and (max-width:569px){
    .circle{
        top:64px;
    }
    .circle-02{
        top:137px;
    }
    .circle-03{
        top:207px;
    }
    .circle-04{
        top:257px;
    }
    .circle-05{
        top:330px;
    }
    .circle-06{
        top:399px;
    }
    .circle-07{
        top:471px;
    }
}

@media (min-width:570px) and (max-width:700px){
    .circle{
        top:62px;
    }
    .circle-02{
        top:136px;
    }
    .circle-03{
        top:184px;
    }
    .circle-04{
        top:233px;
    }
    .circle-05{
        top:305px;
    }
    .circle-06{
        top:378px;
    }
    .circle-07{
        top:449px;
    }
    
    }
    
@media (min-width:322px) and (max-width:405px){
        .circle{
            top: 100px;
        }
        .circle-02{
            top: 198px;
        }
        .circle-03{
            top: 270px;
        }
        .circle-04{
            top: 338px;
        }
        .circle-05{
            top: 436px;
        }
        .circle-06{
            top: 533px;
        }
        .circle-07{
            top: 629px;
        }
    }
@media (min-width:429px) and (max-width:499px){
    .circle{
        
    }
    .circle-02{
        top:137px;
    }
    .circle-03{
        top:208px;
    }
    .circle-04{
        top:281px;
    }
    .circle-05{
        top:352px;
    }
    .circle-06{
        top:425px;
    }
    .circle-07{
        top:498px;
    }
}
@media (min-width:480px) and (max-width:499px){
    .circle-04{
        top:259px;
    }
    .circle-05{
        top:334px;
    }
    .circle-06{
        top:399px;
    }
    .circle-07{
        top:475px;
    }
}

@media (min-width:701px) and (max-width:767px){
    .circle-02{
            top: 138px;
    }
    .circle-03{
            top: 185px;
    }
    .circle-04{
            top: 233px;
    }
    .circle-05{
            top: 286px;
    }
    .circle-06{
            top: 328px;
    }
    .circle-07{
            top: 377px;
    }
}

@media (min-width:768px) and (max-width:799px){
    .circle-02{
        top: 113px;
    }
    .circle-03{
        top: 160px;
    }
    .circle-04{
        top: 209px;
    }
    .circle-05{
        top: 257px;
    }
    .circle-06{
        top: 303px;
    }
    .circle-07{
        top: 354px;
    }
}

@media (min-width:600px) and (max-width:991px){
    .circle-08{
       top: 66px; 
    }
    .circle-09{
        top: 112px;
    }
    .circle-10{
        top: 161px
    }
    .circle-11{
        top: 210px;
    }
}

@media (min-width:450px) and (max-width:516px){
    .circle-08{
            top: 67px;
    }
    .circle-09{
            top: 114px;
    }
    .circle-10{
            top: 186px;
    }
    .circle-11{
            top: 259px;
    }
}

@media (min-width:517px) and (max-width:599px){
    .circle-08{
            top: 65px;
    }
    .circle-09{
            top: 114px;
    }
    .circle-10{
            top: 161px;
    }
    .circle-11{
            top: 232px;
    }
}

</style>
      <!-- Sidebar Backdrop -->
      <div class="sidebar-backdrop"></div>

      <!-- User Sidebar -->
<!--      <div class="user-sidebar">-->
<!--        <div class="sidebar-inner">-->
<!--          <ul class="navigation">-->
<!--               <li class=""><a href="candidate-dashboard.php"><i class="la la-home"></i>Dashboard</a></li>-->
<!--            <li>-->
<!--              <a href="candidate-dashboard-profile.php"-->
<!--                ><i class="la la-user-tie"></i>My Profile</a-->
<!--              >-->
              
<!--            </li>-->
             
<!-- <li><a href="jobs_applied.php"><i class="la la-bookmark-o"></i>Jobs applied</a></li> -->
<!-- <li class=""><a href="candidate-dashboard-resume.php"><i class="la la-paste"></i>My Resume</a></li>-->
<!--            <li>-->
<!--              <a href="http://r.py.solicitous.cloud/"-->
<!--                ><i class="la la-sticky-note"></i>Document Validation</a-->
<!--              >-->
<!--            </li>-->
<!--            <li class="">-->
<!--              <a href="interview-terms.php"-->
<!--                ><i class="la la-reddit"></i>Interview</a-->
<!--              >-->
<!--            </li>-->

<!--            <li >-->
<!--              <a href="job_opening.php"-->
<!--                ><i class="la la-briefcase"></i> Job Openings</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="candidate-dashboard-shortlisted-jobs.php"-->
<!--                ><i class="la la-bookmark-o"></i>Shortlisted Jobs</a-->
<!--              >-->
<!--            </li>-->

<!--            <li>-->
<!--              <a href="dashboard-change-password.php"-->
<!--                ><i class="la la-unlock-alt"></i>Change Password</a-->
<!--              >-->
<!--            </li>-->
<!--            <li>-->
<!--              <a href="change-email.php"-->
<!--                ><i class="la la-retweet"></i>Change Email</a-->
<!--              >-->
<!--            </li>-->
<!--            <li>-->
<!--              <a href="accpass.php"-->
<!--                ><i class="la la-trash"></i>Delete Account</a-->
<!--              >-->
<!--            </li>-->
<!-- <li><a href="candidate-feedback.php"><i class="-->
<!--la la-thumbs-up"></i>Feedback</a></li>-->
<!--            <li>-->
<!--              <a href="candidate-logout.php"><i class="la la-sign-out"></i>Logout</a>-->
<!--            </li>-->
            
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
      <!-- End User Sidebar -->
      <!-- Dashboard -->
      <section class="tnc-section">
          <div class="sec-title text-center">
            <h2>INTERVIEW GUIDELINES / BEHAVIORAL GUIDELINES</h2>
            <!-- <div class="text">Home / Terms and Conditions</div> -->
          </div>
        <div class="auto-container">
            <div class="row border border-dark" style="width: 100%;
    <!--margin-left: -120px;">
          
          
<!--<div class="form-group col-lg-6 col-md-12" style="display: inline-block;">-->
          <div class="form-group col-lg-5 col-md-12 view-block" style="margin-top: 25px;
margin-left: 40;
}">
              <!--<span class="border">-->
            <h3>1.INTERVIEW GUIDELINES</h3>
            <div class="circle">
            
            </div>
            
             <p>
              Candidates are not allowed to have other people or family members
              sit beside them during the interview.
            </p>

            <div class="circle-02">
            
            </div>
            <p>
              Two candidates are not allowed to sit together and attend the
              interview.
            </p>
            
            <div class="circle-03">
            
            </div>
            <p>
              Candidates are not allowed to take calls during the interview.
            </p>
            
            <div class="circle-04">
            
            </div>
            <p>
              Candidates are not allowed to move away or sit very close to the
              camera during the interview.
            </p>
            
            <div class="circle-05">
            
            </div>
            <p>
              Candidates are not allowed to use their mobile phones/electronic
              device during the interview.
            </p>
            
            <div class="circle-06">
            
            </div>
            <!--<p>-->
            <!--  The use of online communication applications during the test is-->
            <!--  strictly prohibited. Close all programs and applications,-->
            <!--  including communication applications like Skype, Microsoft Teams,-->
            <!--  etc. before you begin to take the test-->
            <!--</p>-->
            <!--<p>-->
            <!--  Do not switch out of the test screen. Switching out of the test-->
            <!--  screen to another window will be treated as a violation of the-->
            <!--  code of conduct for the test and is automatically tracked-->
            <!--</p>-->
            <!--<p>Candidates are not allowed to wear a mask and give the test</p>-->
            <!--<p>-->
            <!--  The desk or the walls around you must not have any writing or-->
            <!--  pictures of people on them-->
            <!--</p>-->
            <p>
              Candidates are not allowed to block or hide the camera during the
              interview.
            </p>
            <!--<p>-->
            <!--  Candidates themselves or their friends/family members are not-->
            <!--  allowed to take pictures or screenshots of the assessments-->
            <!--</p>-->
            <div class="circle-07">
            
            </div>
            <p>
              Candidates are not allowed to let someone else participate in the
              interview on behalf of them.
            </p>
           
            </div>
            <div class="form-group col-lg-5 col-md-12 view-block">
                <!--<div style="    margin-left: 50px;">-->
            <h3>2.BEHAVIORAL GUIDELINES:</h3>
            <div class="circle-08">
                
            </div>
            <p>You must dress as though you are in a public setting.</p>
            <div class="circle-09">
                
            </div>
            <p>You must not communicate with any other person by any means.</p>
            <div class="circle-10">
                
            </div>
            <p>
              You must not leave the video frame during the interview for any reason.
            </p>
            <!--<p>-->
            <!--  You must not use headphones, earphones, or any other type of-->
            <!--  external audio equipment.-->
            <!--</p>-->
            <div class="circle-11">
                
            </div>
            <p>
              Ensure that there are no people around you.
              </p>
              <p></p>
             </div>
             <div style="width: 100%; margin-left: 29px;" class="note-div">
              <b>PLEASE NOTE:</b>
              If you fail to participate in any of these assessments or are
              found to be engaged in any act of fraudulent, misrepresentation or
              any use of unfair means in any of the stages across the process,
              you will be disqualified from the recruitment process.
            </p>
            </div>
          
 </div>
              </div>
          <div class="form-group col-lg-12 col-md-12 Center" style="    margin-top: 25;">
            <center>
              <button class="theme-btn btn-style-one">
                <a
                  href="http://main.solicitous.cloud/portal/superio/speech.php"
                  style="color: white"
                  >Start Interview</a
                >
              </button>
            </center>
          </div>
        </div>
        </div>
      </section>
      <!-- End Dashboard -->

      <!-- Copyright -->
      <div class="copyright-text">
        <p style="">
          <a href="http://solicitousbusiness.com/" style="color: orange"
            >Powered with <i class="fa fa-heart" style="color: red"></i> By</a
          ><a href="http://solicitousbusiness.com/" style="color: orange"> Solicitous</a>
        </p>
      </div>
    </div>
    
    <!-- End Page Wrapper -->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/knob.js"></script>
    <script src="js/script.js"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&amp;ver=5.2.4"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
  </body>

  <!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
</html>
