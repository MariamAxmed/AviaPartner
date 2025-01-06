<!DOCTYPE html>
<html lang="en">
<head>
    <title>Partner Website</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox-theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="js/modernizr.custom.js"></script>

</head>
<body>
        @yield('header')
        @yield('content')
        @yield('footer')





    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl-carousel.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/script.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $(".hideit").click(function(){
                $(".overlay").hide();
            });
            $("#trigger-overlay").click(function(){
                $(".overlay").show();
            });
        });
    </script>
    <script>
        $(document).ready(function(){

            var kawa = $('.top-bar');
            var back = $('#back-to-top');
            function scroll() {
                if ($(window).scrollTop() > 700) {
                    kawa.addClass('fixed');
                    back.addClass('show-top');

                } else {
                    kawa.removeClass('fixed');
                    back.removeClass('show-top');
                }
            }

            document.onscroll = scroll;
        });
    </script>
    <!--      Smooth Scrooling     -->
    <script>
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

    <script>
        // Get the video
        var video = document.getElementById("myVideo");

        // Get the button
        var btn = document.getElementById("myBtn");

        // Pause and play the video, and change the button text
        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>
    <script>
        function toggleContent(element) {
            const content = element.querySelector('.hidden-content');
            const icon = element.querySelector('i');

            if (content.style.display === "none" || content.style.display === "") {
                content.style.display = "block";
                icon.classList.remove('fa-chevron-right');
                icon.classList.add('fa-chevron-down');
            } else {
                content.style.display = "none";
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-right');
            }
        }
    </script>


</body>
</html>
