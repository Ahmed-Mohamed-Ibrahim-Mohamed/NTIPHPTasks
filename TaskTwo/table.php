<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female
$headtypes=[];
$headnames=[];
$existing=[];
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
       
       
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],

    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    
   
];
$count=0;
$indexofsamllLen=0;
foreach($users as $index =>$user)
{
    if(count((array)$user)<=count((array)$users[$indexofsamllLen]))
    $indexofsamllLen=$index;
}
foreach($users[$indexofsamllLen] as $key=>$value){
    $headtypes[$count]=gettype($value);
    $headnames[$count]=$key;
    $existing[$count]=true;
    $count++;
  }
  
    foreach($users as $user)
    {
        $i=0;
foreach($user as $key=> $value){
  if(!((isset($headnames[$i])&&$headnames[$i]==$key)&&$headtypes[$i]==gettype($value)))  
  {
      $existing[$i]=false;}
$i++;
  }}
// print_r($existing);
  
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <table class=" table">
          <thead>
              <tr>
              <?php 
             
            foreach($headnames as $index=>$name){
                if($existing[$index]==true){
                  ?>
                  <th>
<?php echo $name;

?>
                  </th>
              <?php }}?>
              </tr>
          </thead>
          <?php foreach($users as $user)
          {?>
              <tr>
              <?php $maincounter=0;
               foreach($user as $key=>$values ){
                   if(isset($headnames[$maincounter])&&($key==$headnames[$maincounter])&&$existing[$maincounter]==true){
                    ?>
                  <td>
<?php 
if(gettype($values)=="array"||gettype($values)=="object")
{$counter=0;
   foreach($values as  $innerkey=>$value ){
    if($key=="gender")
    {
        if($value=="f")
        echo "Fmale";
        else
        echo "Male";
    }
    else    echo $value.($counter==count($values)-1?"":" , ");
$counter++;
}}

else echo $values;}
?>
                  </td>
              <?php $maincounter++;}?>
              </tr>
         <?php }
          ?>
          
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>