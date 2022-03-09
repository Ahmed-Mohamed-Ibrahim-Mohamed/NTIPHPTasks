<?php
if($_POST)
{
if($_POST['num1']<=0)
{

    $message=" <div class='alert alert-danger mx-auto w-50 m-3'> Please Enter Correct Count </div>";
}
else{
if($_POST['num1']<=50)
{
    $k_price=.5;
    $bill="success";
}elseif($_POST['num1']<=150)
    {$k_price=.75;
       
    }
elseif($_POST['num1']<=250)
{$k_price=1.20;
   
}
else
{
    $k_price=1.50;
  
}
$totalprice=$k_price * $_POST['num1'];
define("surcharge",.20);
$surcharge=surcharge*$totalprice;
$message=" <div class='alert alert-info mx-auto w-50 m-3'>
<ul>
<li>The Unit Price is : <b>{$k_price} EGP</b></li>
<li> Cost Befor Surcharge is : <b>{$totalprice} EGP </b> </li>
<li>The Surcharge in Percentage : <b> 20 %  </b></li>
<li>The Surcharge in EGP : <b> {$surcharge}EGP  </b></li>
<li>Total Cost after Surcharge: <u> <b>".$totalprice + $surcharge."</u> EGP </b></li>
</ul>
</div>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Electricity Bill </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="m-3 mx-auto w-50">
    <label for="num1" class="form-label">Count  of Units</label>

    <input type="text" id="num1"  name="num1" class="form-control"></div>

    <div class="m-3 mx-auto w-50"> 
    <button type="submit" class="btn btn-primary "> Calc The Total Bill </button>
    </div>
    </form>
<?php
if(isset($message))
{
    echo $message;
}
?>
</body>
</html>