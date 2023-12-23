<?php
session_start();
include '../connect.php';
    include 'candidate-auth-session.php';
    $candidate_id=$_SESSION['candidate_id'];
    $candidate_data=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM candidate_profile WHERE candidate_id=$candidate_id"));
?>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from creativelayers.net/themes/superio/candidate-dashboard-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Dec 2021 18:07:10 GMT -->
<head>  
<?php
    include 'candidate-header.html';
?>
<style>
.main {
    
    width: 100%;
    float: left;
    margin:-8px;
}
.main-left{
    
    width: 33%;
    float: left;
}
.main-mid{
    
    width: 33%;
    float: left;
}
.main-right{
    
    width: 33%;
    float: left;
}


.main-form {
    
    width: 100%;
    float: left;
    
}
.main-side{
    
    width: 23%;
    float: left;
}
.main-middle{
    
    width: 23%;
    float: left;
}
.main-back{
    
    width: 23%;
    height: 60px;
    float: left;
}

.main-extra{
    
    width: 23%;
    float: left;
    margin:-3px;
}
input.three-sec {
    background: #FFF1D2;
    padding: 13px 5px;
    border-radius: 5px;
    /*max-width: 157px;*/
}

        .input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        /*.icon {*/
        /*    padding: 10px;*/
        /*    min-width: 40px;*/
        /*}*/
          
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
        input.theme-btn.btn-style-one{
            margin-top:33px;
        }
        .ls-widget {
    position: relative;
    background: #ffffff;
    border-radius: 8px;
    -webkit-box-shadow: 0px 6px 15px rgb(64 79 104 / 5%);
    box-shadow: 0px 6px 15px rgb(64 79 104 / 5%);
    margin-bottom: 55px;
    margin-top: -92px;
    margin-left: -27px;
}

.ls-widget {
    margin-top: -46px;
    margin-left: 7px;
}

.chosen-container-multi .chosen-choices, .chosen-container.chosen-with-drop .chosen-drop {
    margin-top: -15px;
}
.chosen-container-single .chosen-single {
    background: #fff1d2;
    border: 0 !important;
    border-radius: 8px;
    color: black;
    height: 61px;
}

button.theme-btn.btn-style-one-02{
    text-align: center;
    white-space: nowrap;
    color: #ffffff;
    background-color: #ffa737;
    font-size: 15px;
    line-height: 20px;
    border-radius: 8px;
    font-weight: 400;
    padding: 18px 35px 15px 35px;
    display: block !important;
    margin: 0px auto !important;
    margin-top: 22px !important;
    }
    
    
    .ls-widget {
    top: 27px;
}

@media screen and (max-width: 500px){
        .main-back{
            width: 50%;
            margin-top: 78px;
        } 
        .main-extra{
             margin-top: 45px;   
        }
}

@media  (min-width: 800px) and (max-width: 1000px){
    .main-back{
            width: 50%;
            margin-top: 78px;
            margin-bottom: 55px;
    }
    .main-extra{
             margin-top: 45px;   
        }
}
@media  (min-width: 1100px) and (max-width: 1700px){
       .main-back{
             margin-left: 3px;
    }
      .main-extra{
            margin-left: -2px;
        }    
}
@media screen and (max-width: 1000px){
    .main-left{
            width: 50%;
            margin-top: 39px;
    }
    .main-mid{
        width: 50%;
        margin-top: 39px;
    }
    .main-right{
        width: 50%;
        margin-top: 39px;
    }
    
}
@media screen and (min-width: 1080px){
    /*.inner-mid{*/
    /*    margin-left: 34px;*/
    /*}*/
    /*.inner-right{*/
    /*    margin-left: 67px;*/
    /*}*/
    /*input.three-sec{*/
    /*        max-width: 135px;*/
    /*}*/
}
@media screen and (max-width: 900px){
       .edu-lable{
             margin-top: 22px;
       }   
}

@media  (min-width: 1000px) and (max-width: 1200px){
    label#label-rate{
            margin-top: 19px;
    }
}
@media screen and (max-width: 700px){
           .res-btn{
            
        }
        .btn{
            
        }
}
    </style>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/modal.css" rel="stylesheet">

</head>

<body>

<div class="page-wrapper dashboard">

    <!-- Preloader -->
    <div class="preloader"></div>

<?php
    // include 'candidate-sidebar.php';
    include 'sidebar.php';
?>

    <!-- Dashboard -->
   <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3></h3>
                <!-- <div class="text">Ready to jump back in?</div> -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h3>Modify Profile</h3>
                            </div>

                            <div class="widget-content">

                                <div class="uploading-outer">
                                    <!--<div class="uploadButton">-->
                                    <!--    <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/>-->
                                    <!--    <label class="uploadButton-button ripple-effect" for="upload" style="box-shadow: 10px 10px 5px #e9e6e6;">Image</label>-->
                                    <!--    <span class="uploadButton-file-name"></span>-->
                                    <!--</div>-->
                                    <div class="uploadButton">
                                        <input class="uploadButton-input" type="file"  name="attachments[]" accept="image/*, application/pdf" id="upload" multiple/ required>
                                        <label class="uploadButton-button ripple-effect" for="upload" style=" box-shadow: 10px 10px 5px #e9e6e6;">Upload Resumes</label>
                                        <span class="uploadButton-file-name" required></span>
                                    </div>
                                    <div class="text">Max file size is 1MB, Minimum dimension: 330x300 </div>
                                    <!--And Suitable files are .jpg & .png-->
                                </div>

                                 <form class="default-form">
                                    <div class="row">
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>Full Name<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="Enter Your Name" required>
                                        </div>

                                        <!-- Input -->
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Profile</label>-->
                                        <!--    <input type="text" name="name" placeholder="UI Designer">-->
                                        <!--</div>-->

                                        

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>Email address<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="Enter Your Email" required>
                                        </div>
                                        
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>Contact Number<span class="required">*</span></label>
                                            <input type="number" name="name" placeholder="Enter Your Contact Number" required>
                                        </div>

                                         <!-- Search Select -->
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Add Skills</label>-->
                                        <!--    <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4"> -->
                                        <!--      <option value="Banking">java</option> -->
                                        <!--      <option value="Digital&Creative">Php</option> -->
                                        <!--      <option value="Retail">C++</option> -->
                                        <!--      <option value="Human Resources">python</option> -->
                                        <!--      <option value="Management">HTML</option> -->
                                        <!--    </select>-->
                                        <!--</div>-->

                               <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>Date Of Birth<span class="required">*</span></label>
                                            <input type="date" name="name" class="date-picker" placeholder="Enter your Age" required>
                                            
                                        </div>
                                       
                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <label>Work Authorization<span class="required">*</span></label>
                                            <select class="chosen-select" onchange="verifybox(this.value)" required>
                                                <option>H1</option>
                                                <option>GC</option>
                                                <option>Citizen</option>
                                                <option>GC EAD</option>
                                                <option>H4 EAD</option>
                                                <option>Other</option>
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <label>Employment Eligibility<span class="required">*</span></label>
                                            <select class="chosen-select" required>
                                                <option>C2C</option>
                                                <option>1099</option>
                                                <option>W2</option>
                                                <option>C2H</option>
                                                <option>Fulltime</option>
                                               
                                            </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <label>Total Year's Of Experience<span class="required">*</span></label>
                                            <input type="number" name="name" placeholder="Enter Total Year's" required>
                                        </div>
                                         <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                             <label>Total Month<span class="required">*</span></label>
                                            <input type="number" name="name" placeholder="Enter Total Month" required>
                                         </div>
                                         <!-- Input -->
                                        <!-- <div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Willing to Travel</label>-->
                                        <!--    <input type="text" name="name" placeholder="Yes Or No">-->
                                        <!--</div>-->
                                         
                                        <!-- Input -->
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Other<span class="required">*</span></label>
                                             <input type="text" name="name" class="input-box" placeholder="Other" readonly disabled>
                                            
                                        </div>
                                        
                                         <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Willing to Travel<span class="required">*</span></label>
                                             <select class="chosen-select" required >
                                                 <option value="yes">Yes</option> 
                                              <option value="no">No</option> 
                                                </select>
                                        </div>
                                        

                                        <!-- Input -->
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Current Salary<span class="required">*</span></label>
                                             <input type="text" name="name" placeholder="Ex: $500" required>
                                            
                                        </div>
                                        <!--<div class="form-group col-lg-3 col-md-12">-->
                                        <!--    <label>Current Salary<span class="required">*</span></label>-->
                                        <!--     <select class="chosen-select" required>-->
                                        <!--        <option>INR</option>-->
                                        <!--        <option>Doller</option>-->
                                        <!--        </select>-->
                                        <!--</div>-->
                                         <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Expected Salary (Hourly, Annually)<span class="required">*</span></label>
                                             <select class="chosen-select" onchange="$('#label-rate').html(this.value + ' Rate');" style="margin-top: -15px;" required>
                                                <option>Hourly</option>
                                                <option>Annually</option>
                                                </select>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label id="label-rate">Hourly Rate<span class="required">*</span></label>
                                            <input style="height:61px;" type="number" name="name" placeholder="Ex: $250" required>
                                            
                                        </div>
                                            
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Timezone<span class="required">*</span></label>
                                            <select  class="chosen-select" type="text" name="timezone" placeholder="" required >
                                                <option >ET</option> 
                                                <option>CT</option>
                                                <option>MT</option>
                                                 <option>PT</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label >Week Day<span class="required">*</span></label>
                                            <select class="chosen-select" required>
                                                <option>Monday</option>
                                                <option>Tuesday</option>
                                                <option>Wednesday</option>
                                                <option>Thursday</option>
                                                <option>Friday</option> 
                                                <option>Saturday</option> 
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Start Time<span class="required">*</span></label>
                                            <input class="three-sec" type="time" name="star_end" placeholder="" style="width: inherit; height: 60px;" required>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>End Time<span class="required">*</span></label>
                                            <input class="three-sec" type="time" name="star_end" style="width: inherit; margin-top: 2px;height: 60px;" placeholder="" required>
                                        </div>
                                        <?php /*?>
                                        <!-- About Company -->
                                         <div class="col-md-6">
                                            <div class="main-form" style="margin-top:-5px;">
                                            <!--    <div class="main-side">-->
                                            <!--        <div class="inner-left" style="width: 100px; height: 55px;">-->
                                            <!--            <label>Timezone<span class="required">*</span></label>-->
                                            <!--<select class="chosen-select" type="text" name="timezone" placeholder="" required >-->
                                            <!--            <option style="width: 100px; height: 55px;">ET</option> -->
                                            <!--            <option>CT</option>-->
                                            <!--            <option>MT</option>-->
                                            <!--             <option>PT</option>-->
                                            <!--           </select>-->
                                            <!--      </div>-->
                                            <!--    </div>-->
                                            
                                            
                                                
                                                
                                            <!--    <div class="main-middle">-->
                                            <!--        <div class="inner-mid" style="width: 112px;">-->
                                            <!-- <label>Week Day<span class="required">*</span></label>-->
                                            <!-- <select class="chosen-select" required>-->
                                            <!--    <option>Monday</option>-->
                                            <!--    <option>Tuesday</option>-->
                                            <!--    <option>Wednesday</option>-->
                                            <!--    <option>Thursday</option>-->
                                            <!--    <option>Friday</option> -->
                                            <!--    <option>Saturday</option> -->
                                            <!--</select>   -->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                                
                                        
                                            </div>
                                        </div>
                                        <?php */?>
                                
                                
                                        <!-- Input -->
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Languages<span class="required">*</span></label>-->
                                        <!--    <input type="text" name="name" placeholder="English, Turkish" required>-->
                                        <!--</div>-->

                                       
                                        
                                         <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label class="edu-lable">Education<span class="required">*</span></label>
                                            <select class="chosen-select" required>
                                                <option>Graduate</option>
                                                <option>Post Graduate</option>
                                                </select>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label class="des-lable">Desired Job Profile<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="Enter Your Desired Job Profile" required>
                                        </div>
                                        
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>Languages<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="English, Turkish" required>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>City<span class="required">*</span></label>
                                            <input  style=" height: 60px;" class="three-sec" type="text" name="name" placeholder="city" required>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <label>State<span class="required">*</span></label>
                                            <input style=" height: 60px;"  class="three-sec" type="text" name="name" placeholder="state" required>
                                        </div>
                                        
                                        <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <label>Zip code<span class="required">*</span></label>
                                            <input style=" height: 60px;"  class="three-sec" type="text" name="name" placeholder="zip code" required>
                                        </div>
                                        <?php /* ?>
                                          <!-- Input -->
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Desired Job Profile<span class="required">*</span></label>-->
                                        <!--    <input type="text" name="name" placeholder="Enter Your Desired Job Profile" required>-->
                                        <!--</div>-->
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Location<span class="required">*</span></label>-->
                                        <!--    <input type="text" name="name" placeholder="Enter your Location" required>-->
                                        <!--</div>-->
                                        
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Education<span class="required">*</span></label>-->
                                        <!--    <select class="chosen-select" required>-->
                                        <!--        <option>Graduate</option>-->
                                        <!--        <option>Post Graduate</option>-->
                                        <!--        </select>-->
                                        <!--</div>-->
                                        
                                        <div class="col-md-6">
                                            <div class="main">
                                                <div class="main-left">
                                                    <div class="inner-left">
                                                        <label>City<span class="required">*</span></label>
                                            <input  style=" height: 60px;" class="three-sec" type="text" name="name" placeholder="city" required>    
                                                    </div>
                                                </div>
                                                <div class="main-mid">
                                                    <div class="inner-mid">
                                                        <label>State<span class="required">*</span></label>
                                            <input style=" height: 60px;"  class="three-sec" type="text" name="name" placeholder="state" required>    
                                                    </div>
                                                </div>
                                                <div class="main-right">
                                                    <div class="inner-right">
                                                        <label>Zip code<span class="required">*</span></label>
                                            <input style=" height: 60px;"  class="three-sec" type="text" name="name" placeholder="zip code" required>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Input -->
                                       <?php */?>
                                        <div class="form-group col-lg-12 col-md-12" >
                                            <button class="theme-btn btn-style-one-02">Save</button>
                                        </div>
                                       </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Ls widget  second -->
                    
                    <div class="ls-widget">
                        <div class="tabs-box">                        
                            <div class="widget-title">
                                <h4>Social Network<span class="required">*</span></h4>
                            </div>

                            <div class="widget-content">
                                 <form class="default-form">
                                    <div class="row">
                                        
                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Linkedin URL<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="https://in.linkedin.com/" required>
                                        </div>

                                        <!-- Input -->
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label>Skype ID<span class="required">*</span></label>
                                            <input type="text" name="name" placeholder="live:.cif.ffbe468gfrdc3467" required>
                                        </div>

                                         <!-- Input -->
                                        <!--<div class="form-group col-lg-6 col-md-12">-->
                                        <!--    <label>Location</label>-->
                                        <!--    <input type="text" name="name" placeholder="">-->
                                        <!--</div>-->

                                        <!-- Input -->
                                        <div class="form-group col-lg-12 col-md-12" style="text-align: center;">
                                            <button class="theme-btn btn-style-one-02" style="display: block; margin: 0px auto;">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- Ls widget end second -->
                    
                    
                           <!-- Ls widget  three -->
                    
                    <div class="ls-widget">
                        <div class="resume-outer">
                            
                            
                            <div class="form-group col-lg-6 col-md-12"style="margin-left: -13px;">
                        <div class="upper-title">
                            <h4>Skills<span class="required">*</span></h4> </div>
                        <select data-placeholder="Categories" class="chosen-select multiple" multiple="" tabindex="4" required>
                          <option value="Banking">Banking</option>
                          <option value="Digital&amp;Creative">Digital &amp; Creative</option>
                          <option value="Retail">Retail</option>
                          <option value="Human Resources">Human Resources</option>
                          <option value="Management">Management</option>
                        </select>
                      </div>
                            
                            
                            
                            
                          <div class="upper-title">
                            <h4>Education<span class="required">*</span></h4>      
                            <!--<button  type="button"  data-toggle="modal" data-target="#exampleModal111"><i class="la la-plus-circle la-2x" ></i></span>Add Education</button>-->
                            
                            <button type="button" data-toggle="modal" data-target="#exampleModal111" class="theme-btn btn-style-bt"><i class="las la-user-plus"></i>  Add Education</button>
                                
                                <style>
                                    .btn-style-bt{
                                        position: relative;
                                        text-align: center;
                                        white-space: nowrap;
                                        color: #ffffff;
                                        background-color: #ffa737;
                                        font-size: 15px;
                                        line-height: 2px;
                                        border-radius: 8px;
                                        font-weight: 200;
                                        padding: 13px 13px 14px 13px;
                                        }
                                </style>
                            
                            <!--<button class="add-info-btn" data-toggle="modal" data-target="#exampleModal111"><span class="icon flaticon-plus"></span> Add Education</button>-->
                          </div>
                          <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">M</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Bachlors in Fine Arts</h3>
                                  <span>Modern College</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2014</span>
                                  <div class="edit-btns">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
                          
<!------------------------------------------ ------pop up modal Edu ----------------------------------- -->

         
<div class="modal fade" id="exampleModal111" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   
      <div class="modal-body">
        <form>
            
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Education </label>
            <input type="text" placeholder="Select Education" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Course</label>
            <input type="text" placeholder="Select Course" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Specialization</label>
            <input type="text" placeholder="Select Specialization" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">University/Institute</label>
            <input type="text" placeholder="Select University/Institute" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">  
           <label for="recipient-name" class="col-form-label">Course Type</label>
           <br>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">Full Time</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">Part Time</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">Correspondence/Distance learning</label>
        </div>
          
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Passing Out Year</label>
            <input type="date" placeholder="Passing Out Year" class="form-control" id="recipient-name">
          </div>
          
         
          <!--<div class="form-group">-->
          <!--   <label for="recipient-name" class="col-form-label">Grading System</label>-->
          <!--  <input type="text" placeholder="Select Grading System" class="form-control" id="recipient-name">-->
          <!--</div>-->
          <div class="form-grou">
                                            <label for="recipient-name" class="col-form-label">Grading System</label>
                                             <select class="chosen-select" >
                                                 <option value="">Scale 10 Grading System</option> 
                                              <option value="">Scale 4 Grading System</option> 
                                              <option value="">% Marks of 100 Maximum</option> 
                                              <option value="">Course Requires a Pass</option> 
                                                </select>
                                        </div>
                                        
                                         <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description</label>
            <input type="text" placeholder="Type here....." class="form-control" id="recipient-name" row="4">
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
 <!-------------------- -------- end modal edu------------------------------------------------------------------------------>
 
                          <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">H</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Computer Science</h3>
                                  <span>Harvard University</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2012</span>
                                  <div class="edit-btns">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
  
                        </div>
                    </div><!--ls end three-->
                    
                    
                    
                    
                         <!-- Ls widget  four -->
                    
                    <div class="ls-widget">
                        <div class="resume-outer">
                          <div class="upper-title">
                            <h4>Work Experience</h4>      
                            <!--<button  type="button"  data-toggle="modal" data-target="#exampleModal111"><i class="la la-plus-circle la-2x" ></i></span>Add Education</button>-->
                            
                            <button type="button" data-toggle="modal" data-target="#experience" class="theme-btn btn-style-bt"><i class="las la-user-plus"></i>  Add Experience</button>
                                
                                <style>
                                    .btn-style-bt{
                                        position: relative;
                                        text-align: center;
                                        white-space: nowrap;
                                        color: #ffffff;
                                        background-color: #ffa737;
                                        font-size: 15px;
                                        line-height: 2px;
                                        border-radius: 8px;
                                        font-weight: 200;
                                        padding: 13px 13px 14px 13px;
                                        }
                                </style>
                            
                            <!--<button class="add-info-btn" data-toggle="modal" data-target="#exampleModal111"><span class="icon flaticon-plus"></span> Add Education</button>-->
                          </div>
                          <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">M</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Php Developer</h3>
                                  <span>Google</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2012 - 2014</span>
                                  <div class="edit-btns">
                                    <button type="button" data-toggle="modal" data-target="#experience"><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
                          
<!------------------------------------------ ------pop up modal about ----------------------------------- -->

          
<div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:500px;">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   
      <div class="modal-body">
        <form>
            
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Work Title</label>
            <input type="text" placeholder="Work Title" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Previous Company Name</label>
            <input type="text" placeholder="Enter Previous Company Name" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Duration From</label>
            <input type="date" placeholder="Duration From" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Duration To</label>
            <input type="date" placeholder="Duration To" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description</label>
            <input type="text" placeholder="Type here....." class="form-control" id="recipient-name" row="4">
          </div>
          
          
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

 <!-------------------- -------- end modal end about------------------------------------------------------------------------------>

                          <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">H</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>UI Developer</h3>
                                  <span>Amazon</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2008 - 2012</span>
                                  <div class="edit-btns">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
  
                        </div>
                    </div>  <!--ls end four-->
                    
                    
                    
                         <!-- Ls widget  five -->
                    
                    <div class="ls-widget">
                        <div class="form-group col-lg-12 col-md-12">
                        <!-- Resume / Education -->
                        <div class="resume-outer" style="margin-bottom: -45px;">
                          <div class="upper-title">
                            <h4>Certificate</h4>      
                            <!--<button  type="button"  data-toggle="modal" data-target="#exampleModal111"><i class="la la-plus-circle la-2x" ></i></span>Add Education</button>-->
                            
                            <button type="button" data-toggle="modal" data-target="#certificate" class="theme-btn btn-style-bt"><i class="las la-user-plus"></i>  Add Certificate</button>
                                
                                <style>
                                    .btn-style-bt{
                                        position: relative;
                                        text-align: center;
                                        white-space: nowrap;
                                        color: #ffffff;
                                        background-color: #ffa737;
                                        font-size: 15px;
                                        line-height: 2px;
                                        border-radius: 8px;
                                        font-weight: 200;
                                        padding: 13px 13px 14px 13px;
                                        }
                                </style>
                            
                            <!--<button class="add-info-btn" data-toggle="modal" data-target="#exampleModal111"><span class="icon flaticon-plus"></span> Add Education</button>-->
                          </div>
                          <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">M</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>UI Design</h3>
                                  <span>BitDegree</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2012 - 2014</span>
                                  <div class="edit-btns">
                                    <button type="button" data-toggle="modal" data-target="#certificate"><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
                          
<!------------------------------------------ ------pop up modal cert ----------------------------------- -->

          
<div class="modal fade" id="certificate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:500px;">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Add Certificate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>   
      <div class="modal-body">
        <form>
            
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Certification Name</label>
            <input type="text" placeholder="Certification Name" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Instituate Name</label>
            <input type="text" placeholder="Instituate Name" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Certification URL</label>
            <input type="text" placeholder="Certification URL" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Certification Validity Start From</label>
            <input type="date" placeholder="Certification Validity Start From" class="form-control" id="recipient-name">
          </div>
          
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Certification Validity Ends On</label>
            <input type="date" placeholder="Certification Validity Ends On" class="form-control" id="recipient-name">
          </div>
          
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Description</label>
            <input type="text" placeholder="Type here....." class="form-control" id="recipient-name" row="4">
          </div>
          
          
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

 <!-------------------- -------- end modal end cert------------------------------------------------------------------------------>

                          <!-- Resume BLock -->
                          <div class="resume-block">
                            <div class="inner">
                              <span class="name">H</span>
                              <div class="title-box">
                                <div class="info-box">
                                  <h3>Graphics Design</h3>
                                  <span>Coursera</span>
                                </div>
                                <div class="edit-box">
                                  <span class="year">2008 - 2012</span>
                                  <div class="edit-btns">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal111"><span class="la la-pencil"></span></button>
                                    <button><span class="la la-trash"></span></button>
                                  </div>
                                </div>
                              </div>
                              <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>
                            </div>
                          </div>
  
                        </div>
                        
                        
                        
                        
                        
                        
                        
    <!-- Resume / Work & Experience -->
    <!--                    <div class="resume-outer theme-blue">-->
    <!--                      <div class="upper-title">-->
    <!--                        <h4>Work & Experience</h4>-->
    <!--                       <button type="button"  data-toggle="modal" data-target="#exampleModal888"><span class="icon flaticon-plus"></span> Add Work</button>-->
    <!--                      </div>-->
    <!--                       Resume BLock -->
    <!--                      <div class="resume-block">-->
    <!--                        <div class="inner">-->
    <!--                          <span class="name">S</span>-->
    <!--                          <div class="title-box">-->
    <!--                            <div class="info-box">-->
    <!--                              <h3>Product Designer</h3>-->
    <!--                              <span>Spotify Inc.</span>-->
    <!--                            </div>-->
    <!--                            <div class="edit-box">-->
    <!--                              <span class="year">2012 - 2014</span>-->
    <!--                              <div class="edit-btns">-->
    <!--                                <button type="button"  data-toggle="modal" data-target="#exampleModal888"><span class="la la-pencil"></span></button>-->
    <!--                                <button><span class="la la-trash"></span></button>-->
    <!--                              </div>-->
    <!--                            </div>-->
    <!--                          </div>-->
    <!--                          <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>-->
    <!--                        </div>-->
    <!--                      </div>-->
                          
                          
<!-- ------- modal satrt add work -------- -->

<div class="modal fade" id="exampleModal888" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Education </label>
            <input type="text" placeholder="Product Designer" class="form-control" id="recipient-name">
            <!--<button>Add</button>-->
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Work Experience</label>
            <input type="text" placeholder="Spotify Inc." class="form-control" id="recipient-name">
          </div>
          <div class="form-group">Certificate</label>
            <input type="text" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus." class="form-control" id="recipient-name">
          </div>
          
         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>

</div>

<!-- ------end modal  work --------- -->


                       <!-- Resume BLock -->
                      <!--    <div class="resume-block">-->
                      <!--      <div class="inner">-->
                      <!--        <span class="name">D</span>-->
                      <!--        <div class="title-box">-->
                      <!--          <div class="info-box">-->
                      <!--            <h3>Sr UX Engineer</h3>-->
                      <!--            <span>Dropbox Inc.</span>-->
                      <!--          </div>-->
                      <!--          <div class="edit-box">-->
                      <!--            <span class="year">2012 - 2014</span>-->
                      <!--            <div class="edit-btns">-->
                      <!--              <button type="button"  data-toggle="modal" data-target="#exampleModal888"><span class="la la-pencil"></span></button>-->
                      <!--              <button><span class="la la-trash"></span></button>-->
                      <!--            </div>-->
                      <!--          </div>-->
                      <!--        </div>-->
                      <!--        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>-->
                      <!--      </div>-->
                      <!--    </div>-->

                          
                      <!--  </div>-->
                      <!--</div>-->

                      <!-- <div class="form-group col-lg-6 col-md-12">
                        <div class="uploading-outer">
                          <div class="uploadButton">
                            <input class="uploadButton-input" type="file" name="attachments[]" accept="image/*, application/pdf" id="upload" multiple />
                            <label class="uploadButton-button ripple-effect" for="upload">Add Portfolio</label>
                            <span class="uploadButton-file-name"></span>
                          </div>
                        </div>
                      </div> -->

                      <!--<div class="form-group col-lg-12 col-md-12">-->
                      <!--   Resume / Awards -->
                      <!--  <div class="resume-outer theme-yellow">-->
                      <!--    <div class="upper-title">-->
                      <!--      <h4>Certificate</h4>-->
                      <!--      <button type="button"  data-toggle="modal" data-target="#exampleModal333"><span class="icon flaticon-plus"></span> Certificate</button>-->
                      <!--    </div>-->
                      <!--     Resume BLock -->
                      <!--    <div class="resume-block">-->
                      <!--      <div class="inner">-->
                      <!--        <span class="name"></span>-->
                      <!--        <div class="title-box">-->
                      <!--          <div class="info-box">-->
                      <!--            <h3>Perfect Attendance Programs</h3>-->
                      <!--            <span></span>-->
                      <!--          </div>-->
                      <!--          <div class="edit-box">-->
                      <!--            <span class="year">2012 - 2014</span>-->
                      <!--            <div class="edit-btns">-->
                      <!--              <button type="button"  data-toggle="modal" data-target="#exampleModal333"><span class="la la-pencil"></span></button>-->
                      <!--              <button><span class="la la-trash"></span></button>-->
                      <!--            </div>-->
                      <!--          </div>-->
                      <!--        </div>-->
                      <!--        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>-->
                      <!--      </div>-->
                      <!--    </div>-->
                          
<!-- ------- modal Certificate start  -------- -->

<div class="modal fade" id="exampleModal333" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title </label>
            <input type="text" class="form-control" id="recipient-name">
            <!--<button>Add</button>-->
          </div>
          <div class="form-group">
             <label for="recipient-name" class="col-form-label">Discretion</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">Date</label>
            <input type="date" class="form-control" id="recipient-name">
          </div>
          
         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>

<!-- ------end modal Certificate --------- -->

                          <!-- Resume BLock -->
                      <!--    <div class="resume-block">-->
                      <!--      <div class="inner">-->
                      <!--        <span class="name"></span>-->
                      <!--        <div class="title-box">-->
                      <!--          <div class="info-box">-->
                      <!--            <h3>Top Performer Recognition</h3>-->
                      <!--            <span></span>-->
                      <!--          </div>-->
                      <!--          <div class="edit-box">-->
                      <!--            <span class="year">2012 - 2014</span>-->
                      <!--            <div class="edit-btns">-->
                      <!--              <button type="button"  data-toggle="modal" data-target="#exampleModal333"><span class="la la-pencil"></span></button>-->
                      <!--              <button><span class="la la-trash" ></span></button>-->
                      <!--            </div>-->
                      <!--          </div>-->
                      <!--        </div>-->
                      <!--        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante<br> ipsum primis in faucibus.</div>-->
                      <!--      </div>-->
                      <!--    </div>-->
                      <!--</div>-->
                      <!--</div>-->


                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12">
                        <button class="theme-btn btn-style-one" style="margin-left: 347px;     margin-bottom: 10px;">Save</button>
                      </div> 
                    </div>
                    </div>  <!--ls five end-->
                    
                    
                    
                   
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    
    

    <?php
    include 'candidate-footer.html';
?>
   </html>


<style>
    .modal-backdrop{
        z-index:0!important;
    }
</style>
<script>
 var form = $('#file_form')[0];

 var formdata = new FormData(form);
 $("form#file_form").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);

    $.ajax({
       url: "file_upload_c.php",
        type: 'POST',
        data: formData,
        success: function (data) {
           const obj = JSON.parse(data);
           $('#email').val(obj.email);
           $('#phone').val(obj.mobile_number);
           $('#skill').val(obj.skills);
           $('#exp').val(obj.total_experience);
           $('#education').val(obj.education);
           
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>
<script>
    function getFormattedDate(date) {
  var year = date.getFullYear();

  var month = (1 + date.getMonth()).toString();
  month = month.length > 1 ? month : '0' + month;

  var day = date.getDate().toString();
  day = day.length > 1 ? day : '0' + day;
  
  return month + '/' + day + '/' + year;
}
</script>
  <script src="js/popper.min.js"></script>



<script>
    $( ".date-picker" ).datepicker();

    function verifybox(val)
    {
        $('.input-box').removeAttr('required');
        $('.input-box').attr('readonly','readonly');
        $('.input-box').attr('disabled','disabled');
        $('.input-box').val('');
        if(val == 'Other')
        {
            $('.input-box').attr('required');
            $('.input-box').removeAttr('readonly');
            $('.input-box').removeAttr('disabled');
        }
    }
</script>
