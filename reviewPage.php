<?php
  require_once('connect.php');
    include'head.php';
    $review_id = $_GET['id'];
    $review = 'SELECT * FROM `article` WHERE article_id = ' . $review_id;
    $result = $conn->query($review);if($result->num_rows > 0){while($row = $result->fetch_assoc()){
  include 'header.php';
?>
  <title>Walktrough <?php echo $row['article_tittle'];?></title>
</head>

<body>


  <div class="article">
    <img src="<?php echo $row['article_banner'];?>">
      <h1><?php echo $row['article_title'];?></h1>
    <b><?php echo $row['article_intro'];?></b>

      <img src="<?php echo $row['article_assets_1'];?>">
        <h3><?php echo $row['article_heading_1'];?></h3>
      <p><?php echo $row['article_text_1'];?></p>

      <img src="<?php echo $row['article_assets_2'];?>">
        <h3><?php echo $row['article_heading_2'];?></h3>
      <p><?php echo $row['article_text_2'];?></p>

      <img src="<?php echo $row['article_assets_3'];?>">
        <h3><?php echo $row['article_heading_3'];?></h3>
      <p><?php echo $row['article_text_3'];?></p>







      <?php $gerelateerd = $row['game_serie']; ?>
    <?php }} else { echo "Er is iets fout gegaan";} ?>
  </div>


    <div class="gerelateerdeArtikelen">
      <h2>Gerelateerde Artikelen</h2>
        <br>
      <?php
        $greview = "SELECT * FROM `article` WHERE game_serie = '$gerelateerd'";
        $result = $conn->query($greview);if($result->num_rows > 0){while($row = $result->fetch_assoc()){
      ?>
        <a href='reviewPage.php?id=<?php echo $row['article_id']?>'>
          <section>
            <img src="<?php echo $row['article_banner'];?>">
          <figcaption><b><?php echo $row['article_title'];?></b></figcaption>
        </section>
      </a>

    <?php }} else { echo "Er zijn geen gerelateerde artikelen gevonden";} ?>
  </div>






</body>

</html>
