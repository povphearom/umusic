<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    <!-- Custom fonts for this template -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
</head>
<body>
<div class="site-wrapper video-background">
    {{--<a id="bgndVideo" class="player"  data-property="{videoURL:'https://www.youtube.com/watch?v=S8fzTpBDj1k', containment:'body', autoPlay:true, mute:false, startAt:1, stopAt: 53, opacity:1, }"></a>--}}

    <div class="overlay"><img src="{{ asset("img/cover.jpg") }}" width="100%" height="100%"/></div>

    <div class="site-wrapper-inner">
        <div class="masthead clearfix">
            <div class="inner">
                <h3 class="masthead-brand">
                    <a href="tel:1234567890">
                        <i class="fa fa-phone fa-fw"></i> (123) 456-7890<br>
                        <small>click to call <i class="fa fa-level-up"></i></small>
                    </a>
                </h3>
                <nav>
                    <ul class="nav masthead-nav">
                        <li><a href="<?php echo url("/")?>"><i class="fa fa-user fa-fw"></i> LOGIN</a></li>
                        <li><a href="<?php echo url("/search")?>"><i class="fa fa-user fa-fw"></i> REGISTRATION</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="cover-container">
            @yield('content')

            <div class="mastfoot">
                <div class="inner">
                    <p>Copyright &copy; <a href="/">www.test_laravel.com</a></p>
                    <p>Cover template by <a href="#">PHEAROM</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

<!-- Plugins and Custom JavaScript -->
<script src="{{ asset('js/device.min.js') }}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<!--
Google Analitics
Demo Purpose Only
Change UA-XXXXXXX-X to be your site's ID
 -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-1057679-2', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>
