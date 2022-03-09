<?php
if($_POST)
{
   
    if($_POST['phg']<=50&&$_POST['phg']>=0&&$_POST['chg']<=50&&$_POST['chg']>=0&&$_POST['big']<=50&&$_POST['big']>=0&&$_POST['mag']<=50&&$_POST['mag']>=0&&$_POST['cog']<=50&&$_POST['cog']>=0)
    {
         $totalgrade=$_POST['phg']+$_POST['chg']+$_POST['big']+$_POST['mag']+$_POST['cog'];
        define("maxtotal",250);
    $percentGrade=$totalgrade/maxtotal *100;
    $success="success";
    if($percentGrade>=90)
    {
        $grade="A";
    }
    elseif($percentGrade>=80)
    {
      $grade="B";
    }
    elseif($percentGrade>=70)
    {
    $grade="C";
    }
    elseif($percentGrade>=60)
    {
      $grade="D";
    }
    elseif($percentGrade>=40)
    {
     $grade="E";
     $success="info";
    }
    else
    {
     $grade="F";
     $success="danger";
    }
    $message="<div class='alert alert-$success m-3 mx-auto w-50'>
    <ul>
    <li>Total Grade :<b>  $totalgrade </b></li>
    <li>Max Grade :<b>  250 </b>  </li>
    <li>Percentage Grade :<b>  $percentGrade % </b> </li>
    <li> Grade :<b> $grade</b> </li>
</ul>
    <div>";
}
    else
    {
        $message="<div class='alert alert-warning m-3 mx-auto w-50'> <b> Please Enter Valied Grade </b>  <div>";
 
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="m-3 mx-auto w-50">
    <label for="phg" class="form-label">Physics Grade</label>

    <input type="text" id="phg"  name="phg" class="form-control"></div>
<div class="m-3 mx-auto w-50">    <label for="chg" class="form-label">Chemistry Grade </label>
    <input type="text" name="chg" class="form-control"></div>
        <div class="m-3 mx-auto w-50">
    <label for="big" class="form-label">Biolgy  Grade</label>

    <input type="text" id="big"  name="big" class="form-control"></div>
<div class="m-3 mx-auto w-50">    <label for="mag" class="form-label">Mathematics Grade </label>
    <input type="text" name="mag" class="form-control"></div>
<div class="m-3 mx-auto w-50">    <label for="cog" class="form-label">Computer Grade </label>
    <input type="text" id="cog" name="cog" class="form-control"></div>
    <div class="m-3 mx-auto w-50">
    <button type="submit" class="btn btn-primary "> Calculate Percentage and grade</button>
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