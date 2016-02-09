<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
    </head>
    <body ng-app="diaryApp" class="{{ router.getControllerName() }}-{{ router.getControllerName() }}">
           {{ partial("layouts/header")}}
           {{ content() }}
           {{ partial("layouts/footer")}}

         	<!-- JAVASCRIPT INCLUSION -->
          {{ javascript_include('js/jquery-1.11.2.min.js') }}
          {{ javascript_include('js/bootstrap.min.js') }}
          {{ javascript_include('js/jssor.slider.mini.js') }}
          {{ javascript_include('js/ie10-viewport-bug-workaround.js') }}
          {{ javascript_include('js/angular.min.js') }}
          {{ javascript_include('js/diaryApp.js') }}
          {{ javascript_include('js/formApp.js') }}
          {{ javascript_include('js/subscribeCtrl.js') }}
    </body>
</html>
