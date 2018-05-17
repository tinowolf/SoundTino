<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Description</title>
    <script type="text/javascript">
    function myFunction() {
        var myWindow = window.close();
    }
    </script>
    <style media="screen">
      textarea{
        width: 475px;
        height: 200px;
      }
    </style>
  </head>
  <body>
    <?php require 'connect.php';
    $id = $_GET['id'];
    $query=$conn->query("SELECT Description from Songs WHERE ID = $id");
    $z = $query->fetch(PDO::FETCH_ASSOC);
    echo "<div>";
    echo "<form method=POST> <textarea maxlength='100' name='text' placeholder='".$z['Description']."'></textarea>
    <input type=submit name=submit value=SALVA>
    <button onclick=myFunction()>CANCELLA</button>
    </form>";
    echo "</div>";

    if (isset($_POST['submit'])) {
      $re= $conn->query("UPDATE Songs SET Description = '".$_POST['text']."' WHERE ID = $id");
      echo "<script>myFunction()</script>";
    }
    ?>
  </body>
</html>
