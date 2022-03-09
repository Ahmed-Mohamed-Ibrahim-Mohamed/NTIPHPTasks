<?php
if($_POST)
{
if($_POST['num1']>0)
    $message="<div class='alert alert-success m-3 mx-auto w-50'> This Number is Positive <div>";

elseif($_POST['num1']==0)
$message="<div class='alert alert-info m-3 mx-auto w-50'>The Number Zero is neither Positive nor Negative<div>";
else
$message="<div class='alert alert-danger m-3 mx-auto w-50'> This Number is Negative <div>";


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min and Max</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="m-3 mx-auto w-50">
    <label for="num1" class="form-label">Firts Number </label>

    <input type="text" id="num1"  name="num1" class="form-control"></div>
<!-- <div class="m-3 mx-auto w-50">    <label for="num2" class="form-label">Second Number </label>
    <input type="text" name="num2" class="form-control"></div>-->
    <div class="m-3 mx-auto w-50"> 
    <button type="submit" class="btn btn-primary "> Check The Signe </button>
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