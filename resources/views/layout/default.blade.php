<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PWA-semestralka</title>

        <script src={{ URL::asset("js/angular.js") }}></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
        <script src="https://cdn.jsdelivr.net/satellizer/0.15.5/satellizer.min.js"></script>
        <script src="https://unpkg.com/angular-ui-router@0.3.2/release/angular-ui-router.js"></script>
        <script src="{{ URL::asset(("js/jwt-decode-master/build/jwt-decode.js")) }}"></script>

        <script src={{ URL::asset("js/threadService.js") }}></script>
        <script src={{ URL::asset("js/threadCtrl.js") }}></script>
        <script src={{ URL::asset("js/messageService.js") }}></script>
        <script src={{ URL::asset("js/messageCtrl.js") }}></script>
        {{--<script src={{ URL::asset("js/website.js") }}></script>--}}

        <script src={{ URL::asset("js/webapp.js") }}></script>
        <script src={{ URL::asset("js/authController.js") }}></script>
        <script src={{ URL::asset("js/userController.js") }}></script>

        <link rel="stylesheet" type="text/css" href= {{ URL::asset("css/bootstrap.min.css") }} />
        <link rel="stylesheet" type="text/css" href= {{ URL::asset("css/style.css") }} />


    </head>
    <body ng-app="website">

        @include('layout.menu')
        <br>
        <br>
        <br>
        <div class="container"><h1>PWA Forum</h1></div>

        <div ui-view></div>

        <footer class="footer">
            <div class="container">
                <p class="footer__text"> <br />© 2016 Jan Kozánek </p>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src= {{ URL::asset("js/bootstrap.min.js") }} ></script>

    </body>
</html>
