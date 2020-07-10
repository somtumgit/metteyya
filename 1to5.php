<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metteyya</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="index.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172149001-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172149001-1');
</script>

</head>
<body>

<?php include("header.php"); ?>


<div class="container">
    <div class="panel panel-default my-5">
        <div class="panel-heading text-center">
           <h3 class="panel-title Link-kanit">เพื่อชาวโลกและชาวธรรม</h3>
           <span>บรรยาย โดย คุณ</span>
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
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๑</td>
                        <td class="">
                            <!-- <a href="phun/01.mp3" target="_blank"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a> -->
                            <a href="#audio-popup" data-src="audio/bensound-ukulele.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a>
                        </td>
                    </tr>
                    <tr>
                        <td> ๒</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๒</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-summer.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>
                    <tr>
                        <td> ๓</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๓</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-ukulele.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>
                    <tr>
                        <td> ๔</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๔</td>
                        <td><a href="#audio-popup" data-src="audio/bensound-summer.mp3" class="open-popup-audio"><img src="images/icon_music32.gif" width="32" height="32" border="0" alt="ฟัง"></a></td>
                    </tr>
                    <tr>
                        <td> ๕</td>
                        <td class="text-left" style="width: 300px;">กฎระเบียบคำสั่งสอน เล่ม ๕</td>
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