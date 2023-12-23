<?php
   include 'candidate-header.html';
    // include 'sidebar.php';
?>     
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Candi.Ai</title>
        <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    
    
    <link href="css/responsive.css" rel="stylesheet" />
         <link
      rel="shortcut icon"
      href="images/Candi-AI-06.png"
      type="image/x-icon"
    />
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/Candi-AI-06.png" type="image/x-icon" />
        <!-- Latest compiled and minified CSS -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >-->
        <!-- Optional theme -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="form.css" >-->
        <!--<script src="form.js"></script>-->
        <style>
            
body {
	background-color: #000;
}
html,
body {
	height: 100%;
}
h3 {
        font-weight: 500;
    font-size: 30px;
    line-height: 41px;
    color: #202124;
    margin-bottom: 10px;
}
p {
        font-size: 15px;
    color: #696969;
    line-height: 24px;
    font-weight: 400;
    margin: 0;
}

.imagebg {
	/*background-image: url("images/feedback.jpg");*/
	background-repeat: no-repeat;
	background-position: center center;
	background-size: cover;
	background-attachment: fixed;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	-webkit-filter: blur(3px);
  filter: blur(3px);
  opacity: 0.6;
  filter: alpha(opacity=60);
}
.form-container
{
    /*margin-left: 200px;*/
    margin-top: -15px;
	background-color: #fff;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    border-radius: 8px;	
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
}
#radio-inline
{
    margin-left: 30px;
}



/*.out-form {*/
    
/*    width: 50%;*/
/*    display: block;*/
/*    margin: 0px auto;*/
/*    margin-bottom:150px;*/
    
/*}*/
/*.col-md-6.col-md-offset-3.form-container.form-section {*/
/*    min-width: 520px !important;*/
/*    margin: 0px auto;*/
/*}*/

.col-md-6.col-md-offset-3.form-container.form-section {
    display: block !important;
    margin: 0px auto !important;
}
        </style>
        <script>
            
$(function()
{
    function after_form_submitted(data) 
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('button[type="button"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });
            
        }//else
    }

	$('#reused_form').submit(function(e)
      {
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('button[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','button' ); 
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });
        

                    $.ajax({
                type: "POST",
                url: 'handler.php',
                data: $form.serialize(),
                success: after_form_submitted,
                dataType: 'json' 
            });        
        
      });	
});

        </script>
    </head>
    <body >
        
       <div class="page-wrapper dashboard">
           <?php  include 'sidebar.php'; ?>
      <!-- Preloader -->
      <!-- <div class="preloader"></div> -->

      <!-- Header Span -->
      <span class="header-span"></span>

      <!-- Main Header-->
      
      
      <header class="main-header header-shaddow">
          
        <div class="container-fluid">
        
                    <span>
                     
                    </span>
                  </li>
                </ul>
              </nav> 

              <!-- Main Menu End-->
            </div>

            
              
        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
      </header>
      <!--End Main Header -->

      <!-- Sidebar Backdrop -->
      <div class="sidebar-backdrop"></div>

      
      <!-- Sidebar Backdrop -->
      <div class="sidebar-backdrop"></div>

      
      <!-- End User Sidebar -->
        <!--<include src="candidate-sidebar.php"></include>-->
        <div class="container">
            <div class="imagebg"></div><br><br>
           <center><h3 style="margin-top: -80px;">Feedback Form</h3></center> 
            <div class="out-form">
            <div class="row " style="margin-top: 30px">
                <div class="col-md-6 col-md-offset-3 form-container form-section"><br>
                   <!--<center><h2>Feedback</h2> </center>  <br>-->
                    <!--<p> Please provide your feedback below: </p>-->
                    <p>We would love to here your thoughts, suggestions, concerns or problems with anythings so we can improve!</p>
                  
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group"><br>
                               <strong> <label style="color:black; ">How do you rate your overall experience?</label></strong>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline" style="margin-left: 50px;">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline" style="margin-left: 50px;">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <strong><label for="describe" style="color:black;"> Describe Your Feedback :</label></strong>
                                <textarea class="form-control" type="textarea" name="describe" id="describe" placeholder="Your Feedback" maxlength="6000" rows="5"></textarea>
                            </div>
                        </div>
                        <!--<div class="row">-->
                        <!--    <div class="col-sm-6 form-group">-->
                        <!--        <strong><label for="first_name" style="color:black;"> First Name:</label></strong>-->
                        <!--        <input type="text" class="form-control" id="first_name" name="first_name" required>-->
                        <!--    </div>-->
                        <!--    <div class="col-sm-6 form-group">-->
                        <!--       <strong><label for="last_name" style="color:black;"> Last Name:</label></strong>-->
                        <!--        <input type="text" class="form-control" id="last_email" name="last_email" required>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="row">-->
                        <!--   <div class="col-sm-12 form-group">-->
                        <!--       <strong> <label for="email" style="color:black;"> Email:</label></strong>-->
                        <!--        <input type="email" class="form-control" id="email" name="email" required>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" style="background-color: #ffa737;">Post </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>