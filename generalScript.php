<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="assets/js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/util.js"></script>
<!-- Show menu active -->
<script>
    $('.submenu').on('click',function(){
        $('.sidebar-nav').find('li, a').removeClass('active open');
        $('.sidebar-nav').find('ul').css({ display: 'none' });
        $(this).addClass('active');
        $(this).parent().parent().parent().addClass('active');
        $(this).parent().parent().css({ display: 'block' });
    });
</script>