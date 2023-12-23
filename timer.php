<!DOCTYPE HTML>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    p {
        text-align: center;
        font-size: 60px;
        margin-top: 0px;
    }
    </style>
    <script>
    // Set the date we're counting down to
    // 1. JavaScript
    // var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
    // 2. PHP
    //var countDownDate = <?php //echo strtotime('Jan 22, 2022 15:37:25') ?> * 1000;
    function timer(date, now){
    var countDownDate = date * 1000;
    var now = now * 1000;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        // 1. JavaScript
        // var now = new Date().getTime();
        // 2. PHP
        now = now + 1000;

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Session Expired, Thus candidate rejected";
        }
    }, 1000);
}
    </script>
</head>

<body>
    <?php
    include 'connect.php';

    $i=1;
    
    $query="SELECT * FROM job_applications WHERE job_id='".$i."' and candidate_id='1'"; 
                              
    $result=mysqli_query($conn,$query);  
    $array=mysqli_fetch_assoc($result);

    date_default_timezone_set("Asia/Calcutta");
    $date2=date('Y-m-d',strtotime($array["interview_date"].'+2 days'));
    $interviewtime=$array['interview_time'];
    $interviewtime = explode("-",$interviewtime);
    $date=$date2." ".$interviewtime[0];

    $date=strtotime($date);
     echo "<script> timer(".$date.",".time()."); </script>";
    ?>
    <p id="demo"></p>
    
</body>

</html>