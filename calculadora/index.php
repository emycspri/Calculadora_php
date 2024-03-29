<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="custom.css">
</head>
<body>
   
<form id="formulario" action="" method="post" >
 
      1° Número: <input name="num1" type="text"><br>
      2° Número: <input name="num2" type="text"><br>
 
      <input type="submit" name="operacao" style="padding-left: 0.4%; padding-right: 0.4%;" value="+">    
      <input type="submit" name="operacao" style="padding-left: 0.5%; padding-right: 0.5%;" value="-">    
      <input type="submit" name="operacao" style="padding-left: 0.5%; padding-right: 0.5%;" value="*">    
      <input type="submit" name="operacao" style="padding-left: 0.55%; padding-right: 0.55%;" value="/">   

   </form>
 
   <br>
   <div class="custom" >
<?php

   if(isset($_POST['operacao']) && isset($_POST['num1']) && isset($_POST['num2'])){
   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];
 
   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;
 
      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   }
   }
?>
</div>
</body>
</html>
