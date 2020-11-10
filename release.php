<?php include'head.php'?>
<title>Walktrough</title>
</head>
<body>

<?php include 'header.php';?>

<div class="release">
  <?php
    $product = "SELECT * FROM `game_release` ORDER BY if(release_date='0000-00-00',1,0),release_date;"; $result = $conn->query($product);if($result->num_rows > 0){while($row = $result->fetch_assoc()){ ?>
    <section>
      <img src="<?php echo $row['release_img'];?>">
        <p>
          <?php
            $id= $row['release_id'];
            $EUdate = $row['release_date'];
            $date = $row['release_date'];
            $time = strtotime($date);
            $formatDate = date('Y-m-d',$time);
            $today=date("Y-m-d");
            $EUdata = DateTime::createFromFormat('Y-m-d', $EUdate);
            if ($row['release_date']==0000-00-00) {echo "TBA";}
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +14 days'))){echo 'nog 14 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +13 days'))){echo 'nog 13 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +12 days'))){echo 'nog 12 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +11 days'))){echo 'nog 11 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +10 days'))){echo 'nog 10 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +9 days'))){echo 'nog 9 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +8 days'))){echo 'nog 8 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +7 days'))){echo 'nog 7 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +6 days'))){echo 'nog 6 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +5 days'))){echo 'nog 5 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +4 days'))){echo 'nog 4 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +3 days'))){echo 'nog 3 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +2 days'))){echo 'nog 2 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +1 days'))){echo 'nog 1 dagen'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' +0 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -1 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -2 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -3 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -4 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -5 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -6 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -7 days'))){echo 'nu verkrijgbaar'; }
            else if ($formatDate==date('Y-m-d', strtotime($today. ' -8 days'))){echo 'remove'; }
            else{echo $EUdata->format('d-m-Y'); }
          ?>
      </p>
    </section>
  <?php }} else { echo "<h4>Er zijn geen releases gevonden</h4>";} ?>
</div>

</body>
    <script src="assets/js/hamburgerMenu.js"></script>
</html>
