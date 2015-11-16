<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="page-header">
                <h1>Content Slider <small>Animated Content</small></h1></div>
        </header>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div id="slider">
                  <ul>
                    <li>
                        <div class="slider-container">
                          <h4>Lorem Ipsum</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales ex vitae metus convallis molestie. Suspendisse sit amet sagittis nulla.&nbsp;<a href="#">Read More <i class="glyphicon glyphicon-chevron-right"></i></a></p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-container">
                          <h4>Lorem Ipsum</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales ex vitae metus convallis molestie. Suspendisse sit amet sagittis nulla.&nbsp;<a href="#">Read More <i class="glyphicon glyphicon-chevron-right"></i></a></p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-container">
                          <h4>Lorem Ipsum</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales ex vitae metus convallis molestie. Suspendisse sit amet sagittis nulla.&nbsp;<a href="#">Read More <i class="glyphicon glyphicon-chevron-right"></i></a></p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-container">
                          <h4>Lorem Ipsum</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales ex vitae metus convallis molestie. Suspendisse sit amet sagittis nulla.&nbsp;<a href="#">Read More <i class="glyphicon glyphicon-chevron-right"></i></a></p>
                        </div>
                    </li>
                    <li>
                        <div class="slider-container">
                          <h4>Lorem Ipsum</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales ex vitae metus convallis molestie. Suspendisse sit amet sagittis nulla.&nbsp;<a href="#">Read More <i class="glyphicon glyphicon-chevron-right"></i></a></p>
                        </div>
                    </li>
                  </ul>
                </div>
                <style id="slider-styles" type="text/css"></style>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        var slider_width = jQuery('#slider').width();
        var slider_padding_left = parseInt(jQuery('#slider').css('padding-left').replace('px',''));
        var slider_padding_right = parseInt(jQuery('#slider').css('padding-right').replace('px',''))
        var slider_contents = jQuery('#slider > ul > li');
        var slider_num_of_contents = slider_contents.length;
        var slider_contents_width = slider_width + slider_padding_left + slider_padding_right;
        var slider_contents_max_width = (slider_contents_width * slider_num_of_contents) + 100;
        
        var animate_percent = 100 / slider_num_of_contents;
        
        jQuery('#slider-styles').append('#slider ul{width:'+slider_contents_max_width+'px;}');
        jQuery('#slider-styles').append('.slider-container{width:'+slider_contents_width+'px;}');

        jQuery('#slider-styles').append('@-webkit-keyframes slide-animation {0% {left:0px; opacity:1;}'+animate_percent+'% {left:0px; opacity:1;}');
        for (var i = 1; i <= slider_num_of_contents; i++) {
            var move = (((slider_contents_width * i) + 20) * -1);
            var percent = ((animate_percent * i) + 10);
            if(percent > 100) {
                percent = 98;
            }
            var str = percent + '% {left:'+move+'px; opacity:1;}' + percent + '% {left:'+ move +'px; opacity:1;}';
            jQuery('#slider-styles').append(str);
        };
        jQuery('#slider-styles').append('99% {left:'+((((slider_contents_width * i) + 20) * -1))+'px; opacity:1;}100% {left:0px; opacity:1;}}');
    });
    </script>
</body>

</html>

