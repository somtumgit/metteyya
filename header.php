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
    <div>เสียงบรรยายจาก...ช่าวโลกชาวธรรม..</div>
</div>
<hr>