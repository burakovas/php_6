<html>
<head>
<title>Calc</title>
</head>
<body>
  <br>
<?php
  $result = "";
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $num1 = $_REQUEST['num1'];
  $num2 = $_REQUEST['num2'];
  $operation = $_REQUEST['operation'];
  switch ($operation){
    case "sum":
      $result = $num1 + $num2;
      $result = "Результат прибавления = " . $result;
      break;
    case "substr":
      $result = $num1 - $num2;
      $result = "Результат вычитания = " . $result;
      break;
    case "multipl":
      $result = $num1 * $num2;
      $result = "Результат умножения = " . $result;
      break;
    case "divide":
      if ($num2 == 0){
        $result = "Ошибка! Деление на ноль!";  
      }else{
        $result = $num1 / $num2;
        $result = "Результат деления = " . $result;
      }
      break;
    }
  }
?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="num1" name = 'num1' value = "5">
    <input type="num2" name = 'num2' value = "7">
    <select name="operation">
      <option value="sum">сумма</option>
      <option value="substr">вычитание</option>
      <option value="multipl">умножение</option>
      <option value="divide">деление</option> 
    </select>
    <input type="submit">
<br><br><br><br>
      <input type="submit" name="operation" value="sum"/>
      <input type="submit" name="operation" value="substr"/>
      <input type="submit" name="operation" value="multipl"/>
      <input type="submit" name="operation" value="divide"/>
<br>
<p><?php echo $result ?></p>
</form>


</body>
</html>
