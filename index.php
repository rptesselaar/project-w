    <?php include'head.php'?>
    <title>Walktrough</title>
  </head>
  <body>

  <?php include 'header.php';?>



      <div class="bigNews">
        <?php $bigNews = "SELECT * FROM `article` WHERE `article_category` in ('preview', 'review', 'nieuws') ORDER BY article_id LIMIT 4"; $result = $conn->query($bigNews);if($result->num_rows > 0){while($row = $result->fetch_assoc()){ ?>
        <a href='reviewPage.php?id=<?php echo $row['article_id']?>'>
          <section>
            <figure><h2><?php echo $row['article_title'];?></h2></figure>
            <img src="<?php echo $row['article_card_banner'];?>" alt="<?php echo $row['article_tittle'];?>">
          </section>
        </a>
      <?php }} else { echo "<h4>Er zijn geen artikelen gevonden</h4>";} ?>
      </div>

      <div class="spotLight">
        <h2>Spotlight</h2>
        <?php $product = "SELECT * FROM `article` WHERE `article_category` in ('spotlight') ORDER BY article_id LIMIT 4"; $result = $conn->query($product);if($result->num_rows > 0){while($row = $result->fetch_assoc()){ ?>
          <a href='reviewPage.php?id=<?php echo $row['article_id']?>'>
            <section>
              <img src="<?php echo $row['article_img'];?>">
              <figcaption>
                <h3><?php echo $row['article_title'];?></h3>
              </figcaption>
            </section>
          </a>
        <?php }} else { echo "<h4>Er zijn geen spotlights gevonden</h4>";} ?>
      </div>














  <?php include 'footer.php';?>

  </body>
    <script src="assets/js/hamburgerMenu.js"></script>
</html>
