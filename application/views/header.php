<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="shortcut icon" href="/images/16.png" type="image/png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.2+ devices: -->
    <link rel="apple-touch-icon" href="/images/57.png">
    <!-- For first-generation iPad: -->
    <link rel="apple-touch-icon" sizes="72x72" href="/images/72.png">
    <!-- For iPhone 4 with high-resolution Retina display: -->
    <link rel="apple-touch-icon" sizes="114x114" href="/images/114.png">
    <!-- No such device exists yet, so if this value is used,
        it means the sizes attribute is ignored: -->
    <link rel="apple-touch-icon" sizes="228x228" href="/images/512.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>

    <?php
        foreach( $header['css'] as $css ){
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".$header['base_url']."$css\" />";
        }
        
        foreach( $header['js'] as $js ){
            echo "<script type=\"text/javascript\" src=\"".$header['base_url']."$js\"></script>";
        }
    ?>
</head>