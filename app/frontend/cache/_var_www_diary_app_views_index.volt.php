<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    </div>
        <div class="container">
            <div> <?php echo $this->partial('layouts/header'); ?> </div>
            <?php echo $this->getContent(); ?>
            <div> <?php echo $this->partial('layouts/footer'); ?> </div>
        </div>

        <script src="../js/jquery-1.9.1.min.js"></script>
         <script src="bootstrap.min.js"></script>
         <script src="docs.min.js"></script>
         <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="ie10-viewport-bug-workaround.js"></script>

         <!-- jssor slider scripts-->
         <!-- use jssor.slider.debug.js for debug -->
         <script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
         <script>
             jQuery(document).ready(function ($) {

                 var options = {
                     $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                     $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                     $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                     $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                     $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                     $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                     $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                     $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                     //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                     //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                     $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                     $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                     $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                     $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                     $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                     $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                     $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                         $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                         $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                         $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                         $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                         $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                         $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                         $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                         $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                         $Scale: false                                   //Scales bullets navigator or not while slider scale
                     },

                     $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                         $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                         $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                         $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                         $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                     }
                 };

                 var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                 //responsive code begin
                 //you can remove responsive code if you don't want the slider scales while window resizing
                 function ScaleSlider() {
                     var bodyWidth = document.body.clientWidth;
                     if (bodyWidth)
                         jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                     else
                         window.setTimeout(ScaleSlider, 30);
                 }
                 ScaleSlider();

                 $(window).bind("load", ScaleSlider);
                 $(window).bind("resize", ScaleSlider);
                 $(window).bind("orientationchange", ScaleSlider);
                 //responsive code end
             });
         </script>
    </body>
</html>
