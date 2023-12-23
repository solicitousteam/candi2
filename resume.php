<?php
include 'auth_session.php';
include "header.html";
include "sidebar.php";
include "connect.php";
?>
 <style>
             @media print {
              @page { margin: 0; }
              body { margin: 1.6cm; }
              .deznav,.no-print,.header{display:none;}
            }
         </style>

  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/css4.css">
</head>
<body>

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
            Nav header start
        ***********************************-->
        <?php 
       include 'sidebar.php';
       
        ?>
      <!--**********************************
            Sidebar end
        ***********************************-->
      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
        <div class="container-fluid">
     <?php
               $i=$_GET['id'];
            $query="Select * FROM candidate_register,candidate_profile where candidate_register.candidate_id=candidate_profile.candidate_id AND candidate_register.candidate_id='".$i."'"; 
               $result=mysqli_query($conn,$query);
               if ($result->num_rows > 0):
               while($array=mysqli_fetch_assoc($result)){ 
?>
<!-- partial:index.partial.html -->
    <div class="row">
                 
                    <div class="col-xl-8">
                        <div class="card">
                            <div id="resume" style="padding:10px">
                                <img src="./images/Candi-AI-07.png" style="height: 50px; width: 100px;float: right;" alt="<?php echo $array["candidate_fname"]." ".$array["candidate_lname"]; ?>">
                                <h1><?php echo $array["candidate_fname"]." ".$array["candidate_lname"]; ?></h1>
                                <p><b>Cell:</b> <a href=<?php echo $array['candidate_phoneno']; ?>><?php echo $array['candidate_phoneno']; ?></a></p>
                                <p><b>Email:</b> <a href=#><?php echo $array['candidate_email']; ?></a></p>
                                <!-- <p id="objective">I am a reserved but ambitious young professional seeking a career that fits my professional skills, personality, and murderous tendencies. My good birth, excellent education and phenomenal mathematical faculty have allowed me to advance the prospects of several criminal enterprises. -->
                              <dl>
                                <dt>Education 
                                <dd>
                                    
                                  <h4><?=$array["candidate_education"] ?></h4>
                                  <!--<p><strong>Major:</strong> Applied Mathematics<br/>
                                  <strong>Minor:</strong> Romance Languages</p>-->
                              </dl>
                              <dl>
                              <dt>Skills 
                              <dd>
                                  <?php $skills=$array["candidate_skills"];
                                                    
                                      $array2 =  explode(',', $skills);
                            
                                     foreach ($array2 as $item) {
                                     echo "<h4>$item</h4>";
                                     }
                                ?>
                               </dl>
                              <dl>
                              <dt>Experience
                              <dd>
                              <h4>Consulting Criminal<span>London 1892 – present</span></h4>
                              <ul>
                              <li>Development within the criminal underworld
                              <li>Conducted negotiations with several rogue governments
                              </ul>
                              <h4>The Coldstream Guards<span>Army Coach, London 1889 – 1888</span></h4>
                              <ul>
                              <li>Recruiting, training and terrorizing young men.
                              </ul>
                              <h4>Oxford University<span>Professor of Mathematics 1885 – 1888</span></h4>
                              <ul>
                              <li>Published papers in binomials, asteroid dynamics and game theory
                              <li>Intimidated students
                              </ul>
                              </dd>
                              </dl>
                              <dl>
                              <dt>Hobbies
                              <dd>World domination, Social Manipulation, Murder Most Foul
                              </dl>
                              <dl>
                              <dt>References
                              <dd>Available on request
                              </dl>
                              
                              <dl>
                              
                              <dd><button onClick="window.print()">Print this resume</button>`
                              </dl>
                              
                              
                              
                              
                              <style>
                                  dt{
                                    font-weight: 700;
                                    margin-top: 26px;
                                    padding-left: 66px;
                                  }
                                  dd{
                                    margin-left: 200px;
                                    padding: 30px;
                                    border-left: 4px solid #ff8513;
                                  }
                              </style>

                              </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <br>       
       
<?php
}

endif;
 include 'footer.html';
           
?> 
</body>
</html>
