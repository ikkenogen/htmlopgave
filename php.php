<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="PHP" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css\styles.css">
        <script src="scripts/scripts.js"></script>
    </head>
    <body>
    <h1PHP</h1>

<?php echo "I dag er det " . date('Y-m-d H:i:s'); ?><br />

 <?PHP


function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
$user_ip = getUserIP();

echo "Din IP adresse er: " . $user_ip; 
?>
<br />
        <!-- Knapper -->
        <br />
        <a href="index.php"><img src="media/hjem.png" alt="Hjem" style="width:100px;height:25%;border:0;"></a> 
        <a href="table.html"><img src="media/button_table.png" alt="Tableside" style="width:89px;height:40px;border:0;"></a>
        <a href="form.html"><img src="media/button_form.png" alt="Formside" style="width:89px;height:40px;border:0;"></a>
        <a href="list.html"><img src="media/button_list.png" alt="Listside" style="width:73px;height:40px;border:0;"></a>
        <a href="javascript.html"><img src="media/button_javascript.png" alt="Javascriptside" style="width:139px;height:40px;border:0;"></a>
        <!-- Slut Knapper -->  
    </body>
</html>