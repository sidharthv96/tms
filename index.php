
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TMS 2K17</title>

<link rel="stylesheet" type="text/css" href="pictureflip.css" />

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">

<script type="text/javascript" src="//use.typekit.net/vue1oix.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script src="modernizr.js"></script>
<script src="jquery.js"></script>
<script src="jquery.pictureflip.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$('#flipbook').pageFlip({});

});
</script>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <style type="text/css">
            @font-face {
                font-family: "Sketched";
                src: url(./Sketch.ttf) format("truetype");
            }
            .sketch { 
                font-family: "Sketched";                
            }

            body{
                margin-top: 90px;
            }

            @media only screen 
            and (min-width : 1224px) {
                h1{
                            font-size: 5em;
                        }

                        h2{
                            font-size: 3.9em;
                        }
                        
                        h3{
                            font-size: 3em;
                        }
                        
            }
            

            </style>            
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="container">
            
            <div class="row">
                <h1 class="text-center sketch">Thrissur Motor Show 2017</h1>
                <h2 class="text-center sketch">Under Construction</h2>
            </div>
            <div class="row">
                <?php
                    $images = array();
                    foreach(glob(dirname(__FILE__)."/img/*.{gif,jpg,jpeg,png}", GLOB_BRACE) as $file) {
                    $images[$file] = filemtime($file);
                    }
                    $file=array_rand($images);                    
                    echo "<img id='image' src='./img/".basename($file)."' class='img-responsive col-md-6 col-md-offset-3' alt=''>";                    
                ?>
            </div>

            <!-- <div class="row">
                            
                <div id="flipbook">

                    <?php
                    foreach ($images as $file => $value) {
                        echo "<div class='slide'>
                        <img src='./img/".basename($file)."' alt='' /> 
                        <div class='content'><a href='#'>Flowers: What you didn't know</a></div> 
                    </div>";
                        }
                    ?>
                </div>
            </div> -->
                        
            <div class="row">
                <h3 class="text-center sketch">Government Engineering College<br> Thrissur</h3>
            </div>

        </div>
        
        
        
        
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script>
            var imageSources = [
                <?php
                foreach ($images as $file => $value) {
                    echo "\"".basename($file)."\",";
                    }
                ?>
            ]

            var index = 0;
            setInterval (function(){
            if (index === imageSources.length) {
                index = 0;
            }
            document.getElementById("image").src = imageSources[index];
            index++;
            } , 2000);
        </script>
    </body>
</html>
