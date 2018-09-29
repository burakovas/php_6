<html>
<head>
<title>Reviews</title>
</head>
<body>
  <?php

$conn = mysqli_connect("localhost","php1user","php1user","php1L6");
$sql = "SELECT * FROM reviews";
if (!$res = mysqli_query($conn, $sql)){
  var_dump(mysqli_error($conn));
} 

while($row = mysqli_fetch_row($res)){
      echo "<p>Пользователь: $row[1] </p>"; 
      echo "<p>Отзыв: $row[2] </p>";
}

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $userName = $_REQUEST['userName'];
        $reviewText = $_REQUEST['reviewText'];
        $sqlAdd = "INSERT INTO reviews (userName, reviewText)
        VALUES ('$userName', '$reviewText')";
        if ($conn->query($sqlAdd) === TRUE) {
          header("Refresh:0");
          } else {
          echo "Error: " . $sqlAdd . "<br>" . $conn->error;
        }

}
mysqli_close($conn);
?>
<br><br><br>
<form action="" enctype="multipart/form-data" method="post">
    <input type="text" name = 'userName'>
    <input type="text" name = 'reviewText'>
    <input type="submit">
</form>
</body>
</html>
