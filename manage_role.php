<?php
	include 'auth_session.php';
	include 'connect.php';		
?>
<!DOCTYPE html>
<html lang="en">
	<head><?php  include 'header.html'; ?></head>
<body>
	<!-- <?php include 'sidebar.php'; ?> -->
	<div class="deznav">
        <div class="deznav-scroll">
          <ul class="metismenu" id="menu">
            <li>
              <a class="ai-icon" href="index.php" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <!-- <i class="flaticon-381-notepad"></i> -->
                <span class="nav-text">Dashboard</span>
                <!-- <p>U Choose</p> -->

<?php
  if(isset($_POST['submit'])) {

  
  $userId = $_POST['userId'];
  $roleperm = $_POST['roleperm'];
  
  $roleperm = serialize(  $roleperm );
 
 $sqlDelete = "DELETE FROM role_permission WHERE user_id=$userId";
 
 mysqli_query($conn, $sqlDelete);
 
 
  
  $sql = "INSERT INTO role_permission (user_id,per_menu)VALUES ('".$userId."','".$roleperm."')";  

  
 if (mysqli_query($conn, $sql)) {
     echo " record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
  echo "<script>alert('Permission Added successfully.'); window.location.href='https://main.solicitous.cloud/portal/add_user.php'; </script>";
  
  
  
 
  }


 ?>
              <!-- </a> -->
            </li>
            <li>
              <!-- <a class="ai-icon" href="requirement.php" aria-expanded="false">
                <i class="fa fa-television" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Requirment</span> -->
<?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['requirment'])) {

      foreach ($_POST['requirment'] as $checked) {
        echo "<a href='requirement.php'><i class='fa fa-television' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
              </a>
            </li>

            <li>
              <!-- <a class="ai-icon" href="candidate_f.php" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Candidates</span> -->
                <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['candidates'])) {

      foreach ($_POST['candidates'] as $checked) {
        echo "<a href='candidate-front.php'><i class='fa fa-user' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
              </a>
            </li>

            <li>
              <!-- <a class="ai-icon" href="manage_job.php" aria-expanded="false">
                <i class="fa fa-television" aria-hidden="true"></i> -->
                <!-- <i class="flaticon-381-notepad"></i> -->
                <!-- <span class="nav-text">Manage Jobs</span> -->
                <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['reports'])) {

      foreach ($_POST['reports'] as $checked) {
        echo "<a href='add_user.php'><i class='fa fa-calendar-o' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
              </a>
            </li>

            <li>
              <!-- <a
                class="has-arrow ai-icon"
                href="javascript:void()"
                aria-expanded="false"
              >
                <i class="fa fa-calendar-o" aria-hidden="true"></i>

                <span class="nav-text">Reports</span>
              </a>

              <ul aria-expanded="false">
                <li><a href="table.html">Report-1</a></li>
                <li><a href="rep11.html">Report-2</a></li>
              </ul> -->
              <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['email_parser'])) {

      foreach ($_POST['email_parser'] as $checked) {
        echo "<a href='technologies.php'><i class='fa fa-search' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
            </li>

            <li>
              <!-- <a href="technologies.html" class="ai-icon" aria-expanded="false"> -->
                <!-- <i class="flaticon-381-settings-2"></i> -->
<!--                 <i class="fa fa-search" aria-hidden="true"></i>
                <span class="nav-text">Email Parser</span> -->
                <!-- <?php
  if(isset($_POST['submit'])) {

    if (!empty($_POST['requirment'])) {

      foreach ($_POST['requirment'] as $checked) {
        echo "<a href='add_user.php'><i class='fa fa-bars' aria-hidden='true'></i>$checked</a>";
     
      }
    }
  }


 ?>
 -->              </a>
            </li>
            <li>
              <!-- <a class="ai-icon" href="add?_user.php" aria-expanded="false">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <span class="nav-text">Add User</span>
              </a> -->
            </li>
            <li>
              <!-- <a class="ai-icon" href="page-login.html" aria-expanded="false">
                <i class="fa fa-sign-in" aria-hidden="true"></i>

                <span class="nav-text">Logout </span>
              </a> -->
            </li>
            <!-- <li><a class="ai-icon" href="page-register.html" aria-expanded="false">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <span class="nav-text">Register</span>
          </a>
          </li> -->
          </ul>

          <div class="copyright">
            <p><strong> © copyright Solicitous.All Right Reserved</strong></p>
            <p>
              <a href="http://solicitousbusiness.com/"
                >Powered with
                <i class="fa fa-heart" style="color = red"></i> By</a
              ><a href="http://solicitousbusiness.com/"> Solicitous</a>
            </p>
          </div>
        </div>
      </div>
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
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0)" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profiles</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
			<?php
			$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
			$resulti=mysqli_query($conn,$queryi);
			$arrayi=mysqli_fetch_array($resulti);
			$adminid = $arrayi[0];

			$query="SELECT sum(job_opening) from job_details WHERE admin_id='".$adminid."'";
			$result=mysqli_query($conn,$query);
			$array=mysqli_fetch_array($result);
			
			?>
				<div class="row">
					<div class=col-xl-12>	
						<div class="row">
							<div class="col-xl-2 col-xxl-4 col-lg-4 col-sm-6">
								<div class="card border-card">
									<div class="card-body">
										<div class="media">
											<div class="media-body mr-3">
												<h2 class="text-warning"><?php echo $array[0]; ?></h2>
												<span class="position">Positions Listed</span>
											</div>
											<span class="cd-icon bgl-warning">
												<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M15.1812 22.0083C15.0651 21.9063 14.7969 21.6695 14.7015 21.5799C12.3755 19.3941 10.8517 15.9712 10.8517 12.1138C10.8517 5.37813 15.4869 0.0410156 21.0011 0.0410156C26.5152 0.0410156 31.1503 5.37813 31.1503 12.1138C31.1503 15.9679 29.6292 19.3884 27.3094 21.5778C27.2118 21.6699 26.9385 21.9116 26.8238 22.0125L26.8139 22.1799C26.8789 23.1847 27.5541 24.0553 28.5233 24.3626C35.7277 26.641 40.9507 32.0853 41.8277 38.538C41.9484 39.3988 41.6902 40.2696 41.1198 40.9254C40.5495 41.5813 39.723 41.9579 38.8541 41.9579C32.4956 41.9591 9.50675 41.9591 3.14821 41.9591C2.27873 41.9591 1.45183 41.5824 0.881272 40.9263C0.310711 40.2701 0.0524068 39.3989 0.172348 38.5437C1.05148 32.0851 6.27447 26.641 13.4778 24.3628C14.4504 24.0544 15.1263 23.1802 15.1885 22.1722L15.1812 22.0083Z" fill="#FF9B52"/>
												</svg>
											</span>
										</div>
									</div>
									<span class="line bg-warning"></span>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-4 col-lg-4 col-sm-6">
								<div class="card border-card">
									<div class="card-body">
										<div class="media">
											<div class="media-body mr-3">
												<h2 class="text-success">43</h2>
												<span class="position">Submitted Profiles</span>
											</div>
											<span class="cd-icon bgl-success">
												<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M38.4998 10.4995H35.0002V38.4999H38.4998C40.4245 38.4999 42 36.9238 42 34.9992V13.9992C42 12.075 40.4245 10.4995 38.4998 10.4995Z" fill="#2BC155"/>
													<path d="M27.9998 10.4995V6.9998C27.9998 5.07515 26.4243 3.49963 24.5001 3.49963H17.4998C15.5757 3.49963 14.0001 5.07515 14.0001 6.9998V10.4995H10.5V38.4998H31.5V10.4995H27.9998ZM24.5001 10.4995H17.4998V6.99929H24.5001V10.4995Z" fill="#2BC155"/>
													<path d="M3.50017 10.4995C1.57551 10.4995 0 12.075 0 13.9997V34.9997C0 36.9243 1.57551 38.5004 3.50017 38.5004H6.99983V10.4995H3.50017Z" fill="#2BC155"/>
												</svg>
											</span>
										</div>
									</div>
									<span class="line bg-success"></span>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-4 col-lg-4 col-sm-6">
								<div class="card border-card">
									
									<div class="card-body">
									 <?php
										$currdate=date("Y-m-d");
										$count=0;
										
										$query="SELECT interview_date FROM job_applications,job_details WHERE job_details.job_id=job_applications.job_id AND admin_id='".$adminid."'";
										$result=mysqli_query($conn,$query);
										while($array=mysqli_fetch_assoc($result)){
											if($currdate>$array['interview_date']){
												$count++;
											}
										}
									 ?>
										<div class="media">
											<div class="media-body mr-3">
												<h2 style="color:rgb(40, 137, 167);"><?php echo $count; ?></h2>
												<span class="position">Interviews </span>
											</div>
											<span class="cd-icon bgl-success">
												<img src="images/calendar.png" width="42" height="42" viewBox="0 0 42 42" fill="none" >
												
												</svg>
											</span>
										</div>
									 
									</div>
									<span class="line bg-secondary"></span>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-4 col-lg-4 col-sm-6">
								<div class="card border-card">
								<?php
										$query="SELECT count(job_applications.job_id) from job_applications,job_details WHERE job_applications.job_id=job_details.job_id AND application_status='Accepted' AND admin_id='".$adminid."'";
										$result=mysqli_query($conn,$query);
										$array=mysqli_fetch_array($result);
									?>
									<div class="card-body">
										<div class="media">
											<div class="media-body mr-3">
												<h2 class="text-danger"><?php echo $array[0]; ?></h2>
												<span class="position">Selections</span>
											</div>
											<span class="cd-icon bgl-success">
												<img src="images/tt.jpg" width="52" height="42" viewBox="0 0 42 42" fill="none" >
												
											</span>
										</div>
									</div>
									<span class=" line bg-danger"></span>
								</div>
							</div>
							<div class="col-xl-2 col-xxl-4 col-lg-4 col-sm-6">
							<?php
										$query="SELECT count(job_applications.job_id) from job_applications,job_details WHERE job_applications.job_id=job_details.job_id AND application_status='Rejected' AND admin_id='".$adminid."'";
										$result=mysqli_query($conn,$query);
										$array=mysqli_fetch_array($result);
									?>
								<div class="card border-card">
									<div class="card-body">
										<div class="media">
											<div class="media-body mr-3">
												<h2 class="text-warning"><?php echo $array[0]; ?></h2>
												<span class="position">Rejections</span>
											</div>
											<span class="cd-icon bgl-success">
												<img src="images/remove.png" width="42" height="42" viewBox="0 0 42 42" fill="none" >
										
											
											</span>
										</div>
									</div>
									<span class="line bg-primary"></span>
								</div>
							</div>
							<!-- --------second chart------ -->
							
							<!-- ------chart strat------ -->
							<div class="col-xl-12">
								<div class="card">
									
					<div class="col-xl-12 col-xxl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Resumes Submissions</h4>
							</div>
							<div class="card-body">
								<canvas id="myChart" style="width:100%;max-width:900px"></canvas>
							</div>
							
						</div>
					</div>
					
						</div>
					</div>
					
			<!-- -------second chart---------- -->
			<!-- ------chart strat------ -->
			<div class="col-xl-12">
				<div class="card">
					
	<div class="col-xl-12 col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Interviews</h4>
			</div>
			<canvas id="myChart1" style="width:100%;max-width:900px"></canvas>
			
			<div class="d-flex flex-wrap align-items-center justify-content-center mt-3">
				<div class="fs-14 text-black mr-4">
					<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect width="19" height="19" rx="9.5" fill="#2BC155"></rect>
					</svg>
					Application Sent
				</div>
				<div class="fs-14 text-black mr-4">
					<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect width="19" height="19" rx="9.5" fill="#3F9AE0"></rect>
					</svg>
					Interviews
				</div>
				<div class="fs-14 text-black">
					<svg class="mr-2" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect width="19" height="19" rx="9.5" fill="#FF424D"></rect>
					</svg>
					Rejected
				</div>
				
			</div>
		</div>
	</div>
	
		</div>
	</div>
	
					
        <!--**********************************
            Content body end
        ***********************************-->


		


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	<?php include 'footer.html'; ?>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	

	<script>
		function carouselReview(){
			/*  testimonial one function by = owl.carousel.js */
			function checkDirection() {
				var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
				if(htmlClassName == 'rtl') {
					return true;
				} else {
					return false;
				
				}
			}
			
			jQuery('.testimonial-one').owlCarousel({
				loop:true,
				autoplay:true,
				margin:30,
				nav:false,
				dots: false,
				rtl: checkDirection(),
				left:true,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},			
					1200:{
						items:2
					},
					1600:{
						items:3
					}
				}
			})			
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000); 
		});
	</script>
	<?php
		$query="SELECT COUNT(application_status) FROM job_applications,job_details WHERE job_details.job_id=job_applications.job_id AND application_status='Rejected' AND admin_id='".$adminid."'";
		$query="SELECT COUNT(application_status) FROM job_applications,job_details WHERE job_details.job_id=job_applications.job_id AND application_status='Accepted' AND admin_id='".$adminid."'";
		$query="SELECT application_status FROM job_applications,job_details WHERE job_details.job_id=job_applications.job_id AND admin_id='".$adminid."'";
		// $result=mysqli_query($conn,$query);
		// $array=mysqli_fetch_array($result);

	?>
	<script>
		var xValues = [1,2,3,4,5,6,7,8,9,10];
		
		new Chart("myChart1", {
		  type: "line",
		  data: {
			labels: xValues,
			datasets: [{ 
			  data: [860,1140,1060,1060,1070,1110,1330,2210,5030,2478],
			  borderColor: "red",
			  fill: false
			}, { 
			  data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
			  borderColor: "green",
			  fill: false
			}, { 
			  data: [300,700,2000,5000,6000,4000,2000,1000,2000,100],
			  borderColor: "blue",
			  fill: false
			}]
		  },
		  options: {
			legend: {display: false}
		  }
		});
		</script>
		<script>
			var xValues = [50,60,70,80,90,100,110,120,130,140,150];
			var yValues = [7,8,8,9,9,9,10,11,14,14,15];
			
			new Chart("myChart", {
			  type: "line",
			  data: {
				labels: xValues,
				datasets: [{
				  fill: false,
				  lineTension: 0,
				  backgroundColor: "rgba(0,0,255,1.0)",
				  borderColor: "rgba(0,0,255,0.1)",
				  data: yValues
				}]
			  },
			  options: {
				legend: {display: false},
				scales: {
				  yAxes: [{ticks: {min: 6, max:16}}],
				}
			  }
			});
			</script>
</body>


</html>