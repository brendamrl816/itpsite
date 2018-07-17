
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        
        
    <script src="//console.re/connector.js" data-channel="llamas" id="consolerescript"></script>
        <link rel="stylesheet" href="/node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/node_modules/fullpage.js/dist/jquery.fullpage.css"/>
        
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/node_modules/jquery/dist/jquery.js"></script>
        <script src="/node_modules/jquery-ui/jquery-ui.min.js"></script>
        <script src="/node_modules/fullpage.js/vendors/jquery.easings.min.js"></script>
        <script type="text/javascript" src="/node_modules/fullpage.js/dist/jquery.fullpage.js"></script>
        <script type="text/javascript" src="/js/fullpage.js"></script>
        
        
        <script src="/node_modules/angular/angular.js"></script>
        <!--<script src="/node_modules/angular-animate/angular-animate.js"></script>-->
        <script src="/node_modules/@uirouter/angularjs/release/angular-ui-router.js"></script>
        <script src="/node_modules/angular-route/angular-route.js"></script>
        
        
        <script src="/node_modules/ng-file-upload/dist/ng-file-upload-shim.js"></script>
        <script src="/node_modules/ng-file-upload/dist/ng-file-upload.js"></script>
      
        <script src="/node_modules/moment/moment.js"></script>
        <script src="/node_modules/moment/min/moment-with-locales.js"></script>
        

        
        <script src="/js/app.js"></script>
        <script src="/js/controllers.js"></script>
        <script src="/js/services.js"></script>
        <script src="/js/directives.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/myStyle.css">
        <link rel="stylesheet" type="text/css" href="/css/myQueries.css">
        
    </head>


    <body ng-app="itpApp" ng-controller="adminCtrl as admin">
        <div>
            @yield('content')
        </div>
    </body>

</html>


