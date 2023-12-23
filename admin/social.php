
<?php 
    // pass web-site url
    $site_url  = "https://main.solicitous.cloud/";
    // post title
    $site_title  = "https://main.solicitous.cloud/";
?>
<meta property="og:title" content="Candi Share link"/>
<meta property="og:image" content="URL OF IMAGE ONLY"/>
<meta property="og:url" content="candi.ai"/>
<meta property="og:description" content="social media sharing buttons php candi.ai"/>

<!-- <a> tab for https://www.onlinecode/blog share link for social media -->
<div id="button_share">
    
    
    <!-- Email Social Media -->
    <a href="mailto:?Subject=<?=$site_title?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?=$site_url?>">
        <img src="email.png" alt="Email share link" />
    </a>
 <br>
    <!-- Facebook Social Media -->
    <a href="https://www.facebook.com/sharer.php?u=<?=$site_url?>" target="_blank">
        <img src="facebook.png" alt="Facebook share link" />
    </a>
    
 <br>
   
    
    <!-- LinkedIn Social Media -->
    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?=$site_url?>" target="_blank">
        <img src="linkedin.png" alt="LinkedIn share link" />
    </a>
   <br>

    
  <a href="https://www.instagram.com/?url=<?=$site_url?>" target="_blank" rel="noopener">
    <img src="path/to/my/instagram.png" alt="insta share link">
</a>
   <br>
  
   
    <!-- Twitter Social Media -->
    <a href="https://twitter.com/share?url=<?=$site_url?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="twitter.png" alt="Twitter share link" />
    </a>
    <br>

</div>