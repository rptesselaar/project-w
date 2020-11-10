<!DOCTYPE html>
<html>

<head>
  <title>Walktrough</title>
  <script src="assets/js/myscripts.js"></script>
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="https://kit.fontawesome.com/851445eead.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <nav>
    </nav>
    <a href="index.php">
      <h1>Walktrough</h1>
    </a>
  </header>

  <?php

  session_start();
  require_once("connect.php");
  if(isset($_GET['id']) && is_numeric($_GET['id'])){
  $id = (int)mysqli_real_escape_string($conn,$_GET['id']);  // kijk voor geldig id
  $review = "SELECT * From content Where id = $id";
  $result = $conn->query($review);
  if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){?>

  <h2> <?php echo $row['tittle'];?></h2>

  <?php }}} ?>

</body>
e
</html>
