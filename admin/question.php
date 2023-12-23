<?php
	include 'auth_session.php';
	include 'connect.php';		
	
?>
<!DOCTYPE html>
<html lang="en">
	<head><?php  include 'header.html'; ?></head>
<body>
	<?php include 'sidebar.php'; ?>
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
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class=col-xl-12>	
			            <h2>Add interview questions</h2>
			            <form action="question_c.php" method="POST">
			                <label>Question:</label>
			                <input class="form-control" name="question" required>
			                 <label>Duration (in sec):</label>
			                <input type="number" class="form-control" name="duration" required>
			                <input class="btn btn-primary" type="submit" name="submit" style="margin:5px" value="submit">
			        
			             </form>
			         </div>
			         </div>
			    </div>
			 <div class="table-responsive" style="background-color:white">
			     <table class="table table-boardered">
			         <thead>
			             <tr>
			                 <td>Sr No</td>
			                 <td>Question</td>
			                 <td>Duration</td>
			                 <td>Action</td>
			             </tr>
			         </thead>
			         <tbody>
			             <?php 
			             $i=0;
			             $result=mysqli_query($conn,'SELECT * FROM interview_questions order by interview_questions_id desc');
			             while($row=mysqli_fetch_array($result))
			             { 
			             $i++;?>
			             <tr>
			                 <td><?=$i; ?></td>
			                 <td><?=$row['question']; ?></td>
			                 <td><?=$row['duration']; ?> seconds</td>
			                 <td><a href="delete_question.php?id=<?=$row['interview_questions_id']; ?>" class="btn btn-danger">Delete</a></td>
			             </tr>
			             <?php } ?>
			         </tbody>
			     </table>
			 </div>   
		    </div>	    
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