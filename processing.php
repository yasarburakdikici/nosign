<?php
if(isset($_GET['addtobasket']))

{    
    
    setcookie('basket['.$_GET['id'].']',$_GET['unit'],strtotime('+1 day'));

    header('location:basket.php');
    exit;
}


if(isset($_GET['deletebasket']))
{
    setcookie('basket['.$_GET['id'].']',$_GET['unit'],strtotime('-1 day'));

    header('location:basket.php');
    exit;

}


if(isset($_GET['updatebasket']))
{
    foreach($_GET['product'] as $key => $value)
    {
        setcookie('basket['.$key.']',$value[0],strtotime('+1 day'));
    }

    header('location:basket.php');
    exit;
}


?>