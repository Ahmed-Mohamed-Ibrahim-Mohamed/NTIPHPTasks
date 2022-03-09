<?php
if($_POST)
{
    $message="<div class='alert alert-success m-3 mx-auto w-50'> The <b> ". $_POST['num2'] ."</b> Root of <b>".$_POST['num1'] ."</b> is :<b>". $_POST['num1']**(1/$_POST['num2'])."</b> <div>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The N-th Root</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="m-3 mx-auto w-50">
    <label for="num1" class="form-label">Firts Number </label>

    <input type="text" id="num1"  name="num1" class="form-control"></div>
<div class="m-3 mx-auto w-50">    <label for="num2" class="form-label">Second Number </label>
    <input type="text" name="num2" class="form-control"></div>
    <div class="m-3 mx-auto w-50">
    <button type="submit" class="btn btn-primary "> Get Root </button>
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