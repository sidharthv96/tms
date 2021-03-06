
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TMS 2K17</title>

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
                margin-top: 15px;
            }

            span{
                color: #ec2424;
            }

            @media only screen 
            and (min-width : 1224px) {
                body{
                margin-top: 90px;
            }

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
                <h1 class="text-center sketch"><span>T</span>hrissur <span>M</span>otor <span>S</span>how 20<span>17</span></h1>
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
            </div                        
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
                    echo "\"img/".basename($file)."\",";
                    }
                ?>
            ]

            setInterval (function(){
            document.getElementById("image").src = imageSources[Math.floor(Math.random() * imageSources.length)];;            
            } , 3500);
        </script>
    </body>
</html>
