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
    <body ng-app="diaryApp" class="<?php echo $this->router->getControllerName(); ?>-<?php echo $this->router->getControllerName(); ?>">
           <?php echo $this->partial('layouts/header'); ?>
           <?php echo $this->getContent(); ?>
           <?php echo $this->partial('layouts/footer'); ?>

         	<!-- JAVASCRIPT INCLUSION -->
          <?php echo $this->tag->javascriptInclude('js/jquery-1.11.2.min.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/jssor.slider.mini.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/ie10-viewport-bug-workaround.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/angular.min.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/diaryApp.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/formApp.js'); ?>
          <?php echo $this->tag->javascriptInclude('js/subscribeCtrl.js'); ?>
    </body>
</html>
