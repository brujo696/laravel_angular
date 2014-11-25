<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title><% $saludos %></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) css/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(public/) css/main.css -->
    @if (\Config::get("app.debug"))
      <link rel="stylesheet" href="/css/main.css">
    @else
      <link rel="stylesheet" href="/dist/css/main.css?v=1.0.0">
    @endif
    <!-- endbuild -->
  </head>
  <body ng-app="publicApp">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a ng-href="#/inicio">Home</a></li>
          <li><a ng-href="#/about">About</a></li>
          <li><a ng-href="#/inicio">Contact</a></li>
        </ul>
        <h3 class="text-muted">public</h3>
      </div>

      <div ng-view=""></div>

      <div class="footer">
        <p><span class="glyphicon glyphicon-heart"></span> from the Yeoman team</p>
      </div>
    </div>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    <!-- build:js(.) scripts/oldieshim.js -->
    <!--[if lt IE 9]>
    <script src="bower_components/es5-shim/es5-shim.js"></script>
    <script src="bower_components/json3/lib/json3.js"></script>
    <![endif]-->
    <!-- endbuild -->
    @if (\Config::get("app.debug"))
      <!-- build:js(public/) js/vendor-index.js -->
      <!-- bower:js -->
      <script src="/bower_components/jquery/dist/jquery.js"></script>
      <script src="/bower_components/angular/angular.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/affix.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/button.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/carousel.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tab.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/scrollspy.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tooltip.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/popover.js"></script>
      <script src="/bower_components/angular-animate/angular-animate.js"></script>
      <script src="/bower_components/angular-cookies/angular-cookies.js"></script>
      <script src="/bower_components/angular-resource/angular-resource.js"></script>
      <script src="/bower_components/angular-route/angular-route.js"></script>
      <script src="/bower_components/angular-sanitize/angular-sanitize.js"></script>
      <script src="/bower_components/angular-touch/angular-touch.js"></script>
      <!-- endbower -->
      <!-- endbuild -->

    @else
      <script src= "/dist/js/vendor-index.js?v=1.0.0"></script>
    @endif

    @if (\Config::get("app.debug"))
        <!-- build:js(public/) js/scripts-index.js -->
        <script src="/scripts/exp1/app.js"></script>
        <script src="/scripts/exp1/controllers/main.js"></script>
        <script src="/scripts/exp1/controllers/about.js"></script>
        <!-- endbuild -->
    @else
      <script src= "/dist/js/scripts-index.js?v=1.0.0"></script>
    @endif
</body>
</html>
