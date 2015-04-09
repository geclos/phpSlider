    <!DOCTYPE html>
    <html>
    
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Làmpades</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <!--LightBox-->
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen">
    <!--Nivo Slider-->
    <link rel="stylesheet" type="text/css" href="themes/default/default.css">
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
    <!--Main css-->
    <link href="css/main.css" rel="stylesheet" media="screen">
    </head>

    <body>

        <section class="container">
            
            <section id="header" class="row-fluid">
                
                <header id="site-logo" class="span4">
                    <h1>Logo</h1>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis ultrices est a ultrices. Maecenas elementum tristique quam sed condimentum. Nam non sapien ac est semper pharetra. Quisque posuere malesuada nisi et eleifend. </h6>
                </header>

                <div class="slider-wrapper span8 theme-default">
                    <div id="slider" class="nivoSlider">
                        <?php
                            $imgDir = "slideshow/";
                            $capDir = "caption/";
                            
                            // Files are retrieved in alphabetical order, make sure to set related images and captions names properly.

                            $imgArray = scandir($imgDir);
                            $capArray = scandir($capDir);

                            for ($i=0; $i < count($imgArray) ; $i++) {
                                
                                //First two elements from scandir must be ignored.

                                if (($imgArray[$i] !== ".") & ($imgArray[$i] !== "..")) {

                                    $imgHtml = '<img src="slideshow/' . $imgArray[$i] . '"';

                                    //Check if there's a caption corresponding to that image.

                                    if (file_exists('caption/' . substr($imgArray[$i], 0,strpos($imgArray[$i], '.')) . '.txt')) {

                                        //If there is one, we add a title value

                                        $imgHtml = $imgHtml . ' title="#' . substr($imgArray[$i], 0,strpos($imgArray[$i], '.')) . '" />';
                                    } else {

                                        //If there's not, we close the img tag directly.
                                        $imgHtml = $imgHtml . ' />';
                                    }

                                    ////Echoes images from slideshow folder in alphabetical order.

                                    echo $imgHtml;
                                }

                            }
                        ?>
                    </div>
                    <?php
                    for ($i=0; $i < count($capArray); $i++) { 
                        if (($capArray[$i] !== ".") & ($capArray[$i] !== "..")) {

                            //Echoes captions from captions caption folder in alphabetical order. Make sure that caption and image names are set in the proper order!

                            $caption = file_get_contents('caption/' . $capArray[$i]);
                            $capHtml = '<div id="' . substr($capArray[$i], 0,strpos($capArray[$i], '.')) . '" class="nivo-html-caption"><p>' . $caption . '</p></div>';
                            echo $capHtml;
                        }
                    }
                    ?>
                </div>

                <!--Here's an alternative slideshow from bootstrap's carousel-->

                <!--<div id="myCarousel" class="carousel slide span8">
                    <div id="carousel-inner">
                       <?php
                            $imgDir = "slideshow/";
                            $capDir = "caption/";
                            
                            // Files are retrieved in alphabetical order, make sure to set related images and captions names properly.

                            $imgArray = scandir($imgDir);
                            $capArray = scandir($capDir);

                            for ($i=0; $i < count($imgArray) ; $i++) {
                                
                                //First to elements from scandir must be ignored

                                if (($imgArray[$i] !== ".") & ($imgArray[$i] !== "..")) {
                                    $imgHtml = '<img src="slideshow/' . $imgArray[$i] . '" alt="' . $imgArray[$i] . '" />';
                                    $caption = file_get_contents('caption/' . $capArray[$i]);
                                    $capHtml = '<div class="carousel-caption"><p>' . $caption . '</p></div>';

                                    // In case it's first element, active class shall be added.

                                    if ($i == 2) {
                                        echo '<div class="active item">' . $imgHtml . $capHtml . '</div>';
                                    }else  {
                                        echo '<div class="item">' . $imgHtml . $capHtml . '</div>';
                                    }
                                }

                            }
                        ?>
                    </div>
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>-->

            </section>

            <section id="lampades" class="row-fluid">
                <div class="span4">
                    <a href="slideshow/img1.jpg"><img src="slideshow/img1.jpg"></a>
                    <a href="slideshow/img2.jpg"></a>
                    <a href="slideshow/img3.jpg"></a>
                    <a href="slideshow/img4.jpg"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla eleifend enim, eget ultrices augue rhoncus sed. Suspendisse consectetur mollis tortor venenatis consequat. Etiam vestibulum erat sed orci dignissim adipiscing. Cras imperdiet, velit a auctor gravida, felis lacus condimentum metus, eu bibendum metus sapien at sem. Sed nec lectus dui, eu gravida odio. </p>
                </div>
                <div class="span4">
                    <a href="slideshow/img2.jpg"><img src="slideshow/img2.jpg"></a>
                    <a href="slideshow/img1.jpg"></a>
                    <a href="slideshow/img2.jpg"></a>
                    <a href="slideshow/img3.jpg"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla eleifend enim, eget ultrices augue rhoncus sed. Suspendisse consectetur mollis tortor venenatis consequat. Etiam vestibulum erat sed orci dignissim adipiscing. Cras imperdiet, velit a auctor gravida, felis lacus condimentum metus, eu bibendum metus sapien at sem. Sed nec lectus dui, eu gravida odio. </p>
                </div>
                <div class="span4">
                    <a href="slideshow/img3.jpg"><img src="slideshow/img3.jpg"></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fringilla eleifend enim, eget ultrices augue rhoncus sed. Suspendisse consectetur mollis tortor venenatis consequat. Etiam vestibulum erat sed orci dignissim adipiscing. Cras imperdiet, velit a auctor gravida, felis lacus condimentum metus, eu bibendum metus sapien at sem. Sed nec lectus dui, eu gravida odio. </p>
                </div>
            </section>

        </section>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!--Bootstrap script-->
    <script src="js/bootstrap.min.js"></script>
    <!--LightBox script-->
    <script src="js/jquery.lightbox-0.5.min.js"></script>
    <!--Nivo slider script-->
    <script src="js/jquery.nivo.slider.js"></script>
    <!--Main script-->
    <script src="js/main.js"></script>
    </body>
    
    </html>