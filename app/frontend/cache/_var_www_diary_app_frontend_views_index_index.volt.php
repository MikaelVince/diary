
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- Main jumbotron for a primary marketing message or call to action -->
        <div> <?php echo $this->partial('layouts/slider'); ?> </div>
        <div class="container">
          <div class="banniere">
            <h1 class="site_name" >Life Respect</h1>
          </div>
        </div>


    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2 class="part_title">Le site qui respecte la nature.</h2>
          <p>Bienvenue sur le site Life Respect. Ce site sera dédié à ceux qui comme nous sont soucieux des problèmes d'environnement et du respect des animaux. Divers sujets seront abordés sur ce site, alors n'hésitez pas à vous balader.</p>
          <p><a class="btn btn-info" href="/site" role="button">En découvrir plus &raquo;</a></p>
        </div>
        <div class="col-md-6 col ">
          <img src="./img/bannière.jpg" class="img_banniere col-md-offset-3">
       </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <img src="./img/sciences.jpg" class="img_banniere col-md-offset-3">
          </div>
          <div class="col-md-6">
            <h2 class="part_title">Des articles scientifique</h2>
            <p>La science, ce n'est pas seulement améliorer la condition humaine, c'est aussi savoir respecter la nature, en apprenant à mieux la connaitre. Ce site contient divers articles qui tendent en ce sens.</p>
            <p><a class="btn btn-info" href="/sciences" role="button">En apprendre plus &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2 class="part_title">Des recettes pour mieux manger</h2>
          <p>Parce que respecter les animaux et l'environement, passe aussi par ce que l'on mange, ce site propose diverses recettes végétariennes, voir végétaliennes qui vous aideront à manger équilibré, tout en vous faisant plaisir.</p>
          <p><a class="btn btn-info" href="/recipt" role="button">Consulter les recettes &raquo;</a></p>
        </div>
        <div class="col-md-6 col ">
          <img src="./img/slider3.jpg" class="img_recettes col-md-offset-4">
       </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <img src="./img/calendar.jpg" class="img_calendar col-md-offset-4">
          </div>
          <div class="col-md-6">
            <h2 class="part_title">Un calendrier de saison</h2>
            <p>Pour vous aider à consommer encore mieux, nous mettons à disposition pour vous un calendrier qui répertorie les fruits et légumes
            de saison, ce qui vous donnera encore plus d'orientation dans le choix des recettes à adopter.</p>
            <p><a class="btn btn-info" href="/calendar" role="button">Voir le calendrier &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2 class="part_title">Un blog pour échanger</h2>
          <p>Ce site ne prétend pas avoir la science infuse, vous pouvez donc via notre blog échanger, proposer, et argumenter des idées, pour aider le site à atteindre le meilleur de lui-même.</p>
          <p><a class="btn btn-info" href="/recipt" role="button">Voir le Blog &raquo;</a></p>
        </div>
        <div class="col-md-6 col ">
          <img src="./img/blog.jpg" class="img_blog col-md-offset-4">
       </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <img src="./img/contact.jpg" class="img_calendar col-md-offset-4">
          </div>
          <div class="col-md-6">
            <h2 class="part_title">Une question? Une réclamation? Plus d'informations?</h2>
            <p>N'hésitez pas à remplir notre formulaire de contact, nous essayerons d'y répondre du mieux possible et le plsu vite possible.
            Pour s'améliorer, le dialogue reste très important.</p>
            <p><a class="btn btn-info" href="/calendar" role="button">Voir le calendrier &raquo;</a></p>
          </div>
        </div>
      </div>
    </div>




    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

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
