<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v7.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="112639467184555">
    </div>


<!-- like,share -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0&appId=220139998673084&autoLogAppEvents=1" nonce="5irnirxG"></script>

<!-- comment -->

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v7.0&appId=220139998673084&autoLogAppEvents=1" nonce="TFk9Pm5y"></script>



<div class="container">
    <nav class="navbar navbar-expand-md " style="color:#fff;background-color: #B56881;">
        <a href="index.php" class="navbar-brand text-white">Metteyya</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse ">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php"><i class="fas fa-home"></i> เสียงธรรม</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <img src="images/metteyya01.jpg" class="img-fluid" alt="metteyya_img">
    <div class="float-left">เสียงบรรยายจาก...ช่าวโลกชาวธรรม..</div>
    <div class="fb-like float-right" data-href="https://metteyya.herokuapp.com/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
    <div class="clearfix" style="contain:'';display:block;clear:both;width:100%;"></div>
</div>
<hr>