<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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