<?php
$alrColor=["class= 'btn btn-secondary'","class= 'btn btn-secondary'" ,"class= 'btn btn-secondary'","class= 'btn btn-secondary'","class= 'btn btn-secondary'"];
if($_POST)
{
$alertColor="success";
if($_POST['num1']!==""&&$_POST['num2']!=="")
{
if(isset($_POST["add"]))
    {   $result=$_POST['num1']."+".$_POST['num2']."=".((int)$_POST['num1']+(int)$_POST['num2']);
    $alrColor[0]="class= 'btn btn-dark'";
}
elseif(isset($_POST["sub"]))
    { $result=$_POST['num1']."-".$_POST['num2']."=".((int)$_POST['num1']-(int)$_POST['num2']);
$alrColor[1]=  "class= 'btn btn-dark'";
}
elseif(isset($_POST["multi"]))
    {  $result=$_POST['num1']."*".$_POST['num2']."=".((int)$_POST['num1']*(int)$_POST['num2']);
$alrColor[2]= "class= 'btn btn-dark'";
}
elseif(isset($_POST["div"]))
    {  $result=$_POST['num1']."/".$_POST['num2']."=".(((int)$_POST['num2']!==0)?(int)$_POST['num1']/(int)$_POST['num2']:" Can't Divide By Zero ");
        $alertColor=((int)$_POST['num2']!==0)?"success":"danger";
$alrColor[3]=  "class= 'btn btn-dark'";
}
elseif(isset($_POST["mod"]))
{  $result=$_POST['num1']."%".$_POST['num2']."=".(((int)$_POST['num2']!==0)?(int)$_POST['num1']%(int)$_POST['num2']:" Can't Divide By Zero ");
    $alertColor=((int)$_POST['num2']!==0)?"success":"danger";
$alrColor[4]=  "class= 'btn btn-dark'";
}}
else
{$result="Please Enter Correect equation ";
$alertColor="danger";
}    
$message="<div class='alert alert-$alertColor m-3 mx-auto w-50 text-center'><b>$result </b> <div>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="m-3 mx-auto w-50">
    <label for="num1" class="form-label">Firts Number </label>

    <input type="text" id="num1"  name="num1" class="form-control"></div>
    <div class="m-3 mx-auto w-50">
               
    <button type="submit" name="add" <?= $alrColor[0]?>> + </button>
    <button type="submit"name="sub" <?= $alrColor[1]?>> - </button>
    <button type="submit"name="multi" <?= $alrColor[2]?>> * </button>
    <button type="submit"name="div" <?= $alrColor[3]?>> / </button>
    <button type="submit"name="mod" <?= $alrColor[4]?>> % </button>
    <!-- <label for="" class="alert alert-success"><?php echo $operator ?></label> -->
    </div>
<div class="m-3 mx-auto w-50">    <label for="num2" class="form-label">Second Number </label>
    <input type="text" name="num2" class="form-control"></div>
    <div class="m-3 mx-auto w-50">
 
    <!-- <button type="submit" class="btn btn-primary "> =</button> -->
    <?php
if(isset($message))
{
    echo $message;
}
?> 

    </div>
    </form>
<!-- -->
</body>
</html>