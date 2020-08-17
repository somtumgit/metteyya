<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metteyya : 31 - 35</title>
    <link rel = "icon" href = "images/Maitreya_icon.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="index.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172149001-1"></script> -->
    <!-- <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-172149001-1');
    </script> -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-543W5N9');</script>
    <!-- End Google Tag Manager -->
    

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-543W5N9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
<?php include("header.php"); ?>


<div class="container">
    <div class="panel panel-default my-5">
        <div class="panel-heading text-center">
           <h3 class="panel-title Link-kanit">เพื่อชาวโลกและชาวธรรม</h3>
           <span>บรรยาย โดย ชาวโลกชาวธรรม</span>
        </div>
        <div class="panel-body ">
            <table class="table w-auto Link-kanit mx-auto" >
                <thead class="text-center">        
                    <tr>
                        <th> เรื่องที่</th>
                        <th> เรื่อง</th>
                        <th> คลิกฟัง/ดาวน์โหลด</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td> ๑</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๓๑</td>
                        <td class="">
                            <!-- <a href="phun/01.mp3" target="_blank"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a> -->
                            <a href="#audio-popup" data-src="audio/bensound-ukulele.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a>
                        </td>
                    </tr>
                    <tr>
                        <td> ๒</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๓๒</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-summer.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>
                    <tr>
                        <td> ๓</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๓๓</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-ukulele.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>
                    <tr>
                        <td> ๔</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๓๔</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-summer.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>
                    <tr>
                        <td> ๕</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๓๕</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-ukulele.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    
    </div>
    
    <div id="audio-popup" class="white-popup mfp-hide">
        <audio src="audio/bensound-summer.mp3" preload="auto"></audio>
    </div>
</div>

<?php include("footer.php"); ?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="audio/audio.min.js"></script>
<script>


$(document).ready(function() {
    var as;
    audiojs.events.ready(function() {
        as = audiojs.createAll();
        //console.log(as);
    });
    $('.open-popup-audio').magnificPopup({
        type:'inline',
        preloader: true,
        closeOnContentClick: false,
		closeBtnInside: false,

        callbacks: {
            open: function() {
                let popup = document.getElementById("audio-popup");
                let audio = popup.querySelector("audio");
                let link = this.currItem.el[0];
                let src = link.getAttribute("data-src");
                audio.setAttribute("src",src);
                audio.play();
                console.log(link);
                // console.log(src);
                // console.log(popup);
                // console.log(audio);
            },
            close: function() {
                // Will fire when popup is closed
                let popup = document.getElementById("audio-popup");
                let audio = popup.querySelector("audio");
                audio.pause();
            }
            // e.t.c.
        }
    });
});


</script>
</body>
</html>