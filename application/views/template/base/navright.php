    <!--API FACEBOOK-->
    
    <div id="fb-root"></div>
    <script>(
        function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>


    <div class="fb-post" data-href="https://www.facebook.com/20531316728/posts/10154009990506729/" 
    data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/20531316728/posts/10154009990506729/" 
    class="fb-xfbml-parse-ignore">Publié par <a href="https://www.facebook.com/facebook/">Facebook</a> 
    sur&nbsp;<a href="https://www.facebook.com/20531316728/posts/10154009990506729/">jeudi 27 août 2015</a></blockquote></div>

    <!--FIN API FACEBOOK-->

    <!--API TWITTER-->

<?php
    include "twitteroauth/twitteroauth.php";

$consumer_key = "jsIwmkEXmT1gLBsAxVHapiGyd";
$consumer_secret = "CVfFzCfCarvHlvsRrwosbsQvDRIZNhxx80pVvCAP3W0C2W2uY1";
$access_token = "841601775081795584-QGzNQOHlmi9Naa7fGVAIKRncohyVU5y";
$access_token_secret = "WFEm4C1z8hE9U21zymZI2zNzmtbLeq80cYxfS1IKgDe7W";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

?>
<a class="twitter-timeline" href="https://twitter.com/fschepmans">Tweets by fschepmans</a> 
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<!--FIN API TWITTER-->
