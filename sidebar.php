<?php require 'connect.php';
foreach ($conn->query("SELECT `user`.`username`, `user`.`Description` FROM `user` LEFT JOIN `Songs` ON `Songs`.`ID_U` = `user`.`id` ORDER BY `Songs`.`ID` DESC LIMIT 3") as $row) //seleziona gli ultimi 3 user che hanno caricato una canzone
{
  echo $row['username']." ".$row['Description']. "<br />";
}
?>

<div id="sidebar">
  <section class="box">
    <header>
      <h2>Last Uploads</h2>
    </header>
    <p>Qui verranno mostrati gli ultimi upload in ordine cronologico</p>
    <!-- <a href="#" class="button style1">Learn More</a> -->
  </section>
  <section class="box">
    <header>
      <h2>Last Uploads</h2>
    </header>
    <ul class="style2">
      <li>
        <article class="box post-excerpt">
          <a href="#" class="image left"><img src="Users/default-avatar.png" alt="" /></a>
          <h3><a href="#">Diam odio lorem</a></h3>
          <p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
        </article>
      </li>
      <li>
        <article class="box post-excerpt">
          <a href="#" class="image left"><img src="images/photo.png" alt="" /></a>
          <h3><a href="#">Sed duis consequat</a></h3>
          <p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
        </article>
      </li>
      <li>
        <article class="box post-excerpt">
          <a href="#" class="image left"><img src="Users/default-avatar.png" alt="" /></a>
          <h3><a href="#">Tellus nulla volutpat</a></h3>
          <p>Duis odio diam, luctus et vulputate vitae, vehicula ac dolor. Pellentesque at urna eget tellus sed etiam.</p>
        </article>
      </li>
    </ul>
    <a href="search.php" class="button style1">Tutti</a>
  </section>

</div>
