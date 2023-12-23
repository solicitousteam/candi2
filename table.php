<?php
include 'auth_session.php';
include 'header.html';?></head>
<body>
    <?php 
    include 'sidebar.php';
    	$queryi="Select admin_id from admin where admin_email='".$_SESSION['email']."'";
			$resulti=mysqli_query($conn,$queryi);
			$arrayi=mysqli_fetch_array($resulti);
			$admin_id=$adminid = $arrayi[0];

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
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Reports</a></li>
					</ol>
                </div>
                <!-- row -->
              
                <div class="row">
      
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="table.php" data-toggle="tab" class="nav-link active show">Pending Profile</a>
                                            </li>
                                            <li class="nav-item"><a href="./tab2.php"  aria-expanded="false" class="nav-link">Interview Sheduled</a>
                                            </li>
                                            <li class="nav-item"><a href="./tab3.php" aria-expanded="false" class="nav-link">Offers</a>
                                            </li>
                                        </ul>
                                        
											<!-- -------my post------ -->
                                       
                                               
                                                    
														<div class="col-xl-12">
														
                                                                <h2 style="margin: 20px 0px 30px 0px;">Pending Profile</h2>
                                                                <table class="table table-bordered table-striped " id="tableOne">
                                                                   <thead class="thead-dark">
                                                                      <tr>
                                                                         <th>Name</th>
                                                                         <th>Email</th>
                                                                         <th>Title</th>
                                                                         <th>Interview Date</th>
                                                                         <th>Interview Time</th>
                                                                         <th>Status</th>
                                                                      </tr>
                                                                   </thead>
                                                                   <tbody>
                                                                       <?php 
                                                                       $result=mysqli_query($conn,"SELECT * From job_applications LEFT JOIN job_details ON job_details.job_id=job_applications.job_id LEFT JOIN candidate_register ON candidate_register.candidate_id=job_applications.candidate_id WHERE (application_status='Pending' ||application_status='' ) AND job_details.admin_id=$admin_id");
                                                                        while($row=mysqli_fetch_array($result))
                                                                        { 
                                                                        
                                                                        $schduleStatus="Pending";
                                                                        
                                                                        if( !empty($row['interview_date'])){
                                                                            $schduleStatus="scheduled";
                                                                        }
                                                                        
                                                                        
                                                                        ?>
                                                                      <tr>
                                                                         <td><?=$row['candidate_fname']; ?> <?=$row['candidate_lname']; ?></td>
                                                                         <td><?=$row['candidate_email']; ?></td>
                                                                         <td><?=$row['job_title']; ?></td>
                                                                         <td><?=$row['interview_date']; ?></td>
                                                                         <td><?=$row['interview_time']; ?></td>
                                                                         <td><?php echo $schduleStatus; ?></td>
                                                                      </tr>
                                                                      <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                                
                                                                
                                                                   
                                                                  
                                                             
                                      </div>                       
								</div>
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

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
<?php include 'footer.html'; ?> 
    
<script>
	$(document).ready(function() {

   
// inspired by http://jsfiddle.net/arunpjohny/564Lxosz/1/
$('.table-responsive-stack').each(function (i) {
   var id = $(this).attr('id');
   //alert(id);
   $(this).find("th").each(function(i) {
      $('#'+id + ' td:nth-child(' + (i + 1) + ')').prepend('<span class="table-responsive-stack-thead">'+             $(this).text() + ':</span> ');
      $('.table-responsive-stack-thead').hide();
      
   });
   

   
});





$( '.table-responsive-stack' ).each(function() {
var thCount = $(this).find("th").length; 
var rowGrow = 100 / thCount + '%';
//console.log(rowGrow);
$(this).find("th, td").css('flex-basis', rowGrow);   
});




function flexTable(){
if ($(window).width() < 768) {
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").show();
   $(this).find('thead').hide();
});
   
 
// window is less than 768px   
} else {
   
   
$(".table-responsive-stack").each(function (i) {
   $(this).find(".table-responsive-stack-thead").hide();
   $(this).find('thead').show();
});
   
   

}
// flextable   
}      

flexTable();

window.onresize = function(event) {
 flexTable();
};






// document ready  
});




</script>


	
		
</body>



</html>