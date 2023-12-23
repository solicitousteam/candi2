<?php 
session_start();
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=yes">
    <title>Chat Bot</title>
    <meta name="description" content="Chat Bot UI/UX & html for web" />
    <meta name="keywords" content="Chat Bot UI/UX & html for web, UI/UX for chat bot, chat bot html, best chatbot, chatbot app, online chat bot plugin" />
    <meta name="author" content="css3transition" />
    <link rel="shortcut icon" href="../favicon.ico">
    <meta name="description" content="Chat Bot UI/UX & html for web, UI/UX for chat bot, chat bot html, best chatbot, chatbot app, online chat bot plugin | Css3Transition " />
    <meta name="keywords" content="Chat Bot UI/UX & html for web, UI/UX for chat bot, chat bot html, best chatbot, chatbot app, online chat bot plugin" />
    <meta name="abstract" content="Chat Bot UI/UX & html for web, UI/UX for chat bot, chat bot html, best chatbot, chatbot app, online chat bot plugin">
    <meta name="author" content="Rahul Yaduvanshi">
    <meta name="technologies" content="HTML5, CSS3, HTML, CSS, JQUERY, Bootstrap, Angular">
    <meta name="distribution" content="Global">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="city" content="New Delhi">
    <meta name="country" content="india">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/chatBot.css" rel="stylesheet" type="text/css"/>
    <link href="css/timeline.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Chat bot UI start -->
<div class="chat-screen">
    <div class="chat-header">
        <div class="chat-header-title">
            Let’s chat? - We're online
        </div>
        <div class="chat-header-option hide">
            <span class="dropdown custom-dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink1" style="will-change: transform;">
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        Send Transcriptions
                    </a>
                    <a class="dropdown-item end-chat" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#bc32ef" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                        End Chat
                    </a>
                </div>
            </span>
        </div>
    </div>
    <div class="chat-body" id="chat_body" style="overflow: scroll;width:100%">
        <!--<div class="chat-start">Monday, 1:27 PM</div>-->
          <div class="chat-bubble you">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto;display: block;shape-rendering: auto;width: 43px;height: 20px;" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <circle cx="0" cy="44.1678" r="15" fill="#ffffff">
                    <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.6s"></animate>
                </circle> <circle cx="45" cy="43.0965" r="15" fill="#ffffff">
                <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.39999999999999997s"></animate>
            </circle> <circle cx="90" cy="52.0442" r="15" fill="#ffffff">
                <animate attributeName="cy" calcMode="spline" keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5" repeatCount="indefinite" values="57.5;42.5;57.5;57.5" keyTimes="0;0.3;0.6;1" dur="1s" begin="-0.19999999999999998s"></animate>
            </circle></svg>
        </div>
    </div>
    <div class="chat-input ">
        <input type="text" name="message" id="message" placeholder="Type a message...">
        <div class="input-action-icon">
            <a><svg xmlns="http://www.w3.org/2000/svg" id="send" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg></a>
        </div>
    </div>
    <div class="chat-session-end hide">
        <h5>This chat session has ended</h5>
        <p>Thank you for chatting with us, If you can take a minute and rate this chat:</p>
        <div class="rate-me">
            <div class="rate-bubble great">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg></span>
                Great
            </div>
            <div class="rate-bubble bad">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-down"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg></span>
                Bad
            </div>
        </div>
        <a class="transcript-chat">Need a Transcript?</a>
        <div class="powered-by">Powered by css3transition</div>
    </div>
</div>
<div class="chat-bot-icon">
    <img src="img/we-are-here.svg"/>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square animate"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x "><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
</div>
<!-- Chat Bot UI Ends -->
<!-- Time line Html Start -->
<h1 class="hide">Responsive Timeline using Flexbox</h1>
<div class="timeline hide">
    <div class="timeline-item">
        <div class="timeline-date">
            <img src="stylesheet/images/cities/delhi.svg"/>
            <div>
                January 2019
            </div>
        </div>
        <div class="timeline-content">
            <h2>Journey Start <span>(Delhi)</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad saepe nulla quibusdam ut. Beatae, facere sequi blanditiis porro suscipit tempore ipsam iste ipsa, culpa quam vero, dolorem cupiditate. Magni, numquam?<button type="button" class="visit">Visit ›</button><img src="stylesheet/images/cities/delhi.svg"/></p>
            <br>
            <i class="fas fa-rocket fa-icon"></i>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-date">
            <img src="stylesheet/images/cities/lucknow.svg"/>
            <div>
                February 2019
            </div>
        </div>
        <div class="timeline-content">
            <h2>Nawabo ka Sehar<span>(Lucknow)</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad saepe nulla quibusdam ut. Beatae, facere sequi blanditiis porro suscipit tempore ipsam iste ipsa, culpa quam vero, dolorem cupiditate. Magni, numquam?<button type="button" class="visit">Visit ›</button><img src="stylesheet/images/cities/lucknow.svg"/></p>

            <br>
            <i class="fas fa-graduation-cap fa-icon"></i>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-date">
            <img src="stylesheet/images/cities/prayagraj.svg"/>
            <div>
                March 2019
            </div>
        </div>
        <div class="timeline-content">
            <h2>Devotional Place<span>(Prayagraj)</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad saepe nulla quibusdam ut. Beatae, facere sequi blanditiis porro suscipit tempore ipsam iste ipsa, culpa quam vero, dolorem cupiditate. Magni, numquam?<button type="button" class="visit">Visit ›</button><img src="stylesheet/images/cities/prayagraj.svg"/></p>

            <br>
            <i class="fas fa-power-off fa-icon"></i>
        </div>
    </div>
</div>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="257be86a981729866f2fa61c-|49" defer=""></script>
<!-- Time line Html Ends -->
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select2.min.js"></script>
 <script>
        $(document).ready(function(){
            $(".select2_el").select2({
            });
        });
        </script>
<script>
function load_message()
{
      $.ajax({
                  type: 'POST',
                  url: "load_messages.php",
                  success: function(resultData) { 
                       $("#chat_body").html(resultData);
                      
                  }
            });
}
    $(document).ready(function () {
      
      load_message();
        //Toggle fullscreen
        $(".chat-bot-icon").click(function (e) {
            $(this).children('img').toggleClass('hide');
            $(this).children('svg').toggleClass('animate');
            $('.chat-screen').toggleClass('show-chat');
        });
        $('.chat-mail button').click(function () {
            $('.chat-mail').addClass('hide');
            $('.chat-body').removeClass('hide');
            $('.chat-input').removeClass('hide');
            $('.chat-header-option').removeClass('hide');
        });
        $('.end-chat').click(function () {
            $('.chat-body').addClass('hide');
            $('.chat-input').addClass('hide');
            $('.chat-session-end').removeClass('hide');
            $('.chat-header-option').addClass('hide');
        });
        
        $('input').on('keypress',function(e) {
            if(e.which == 13) {
                send_message();
            }
        });
        $('#send').click(function () {
           send_message();
        });
        
    });

function send_message(){
     var message= $('#message').val();
            var myKeyVals = { message : message };
            $.ajax({
                  type: 'POST',
                  url: "add_message.php",
                  data: myKeyVals,
                  success: function(resultData) {
                      $('#message').val('');
                      load_message();
                      
                  }
            });
}
</script>
</body>

</html>