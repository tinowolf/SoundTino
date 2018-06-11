<div id="sidebar">

  <section class="box">
    <header>
      <h2>Last Uploads</h2>
    </header>
    <ul class="style2">
      <?php
      include 'connect.php';
      foreach ($stmt = $conn->query("SELECT Img_path, username, description FROM user ORDER BY id ASC LIMIT 3")as $a) {
        echo "<li> <article class='box post-excerpt'>";
        echo "<a href='allSongs.php?u=".$a['username']."' class='image left'><img src='".$a['Img_path']."' alt='' /></a>";
        echo "<h3><a href='allSongs.php?u=".$a['username']."'>".$a['username']."</a></h3>";
        echo "<p>".$a['description']."</p>";
        echo "</article></li>";
      }
       ?>

    </ul>
    <a href="songs.php" class="button style1">Tutti</a>
  </section>

</div>
