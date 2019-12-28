<!doctype html>
<html lang="en">
  <head>
    <!-- CSS -->
    <link rel="stylesheet" href="styles/main.css">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>CaioLab Videos</title>
  </head>
  <body>

  <?php
    include "includes/header.php";
    require_once "includes/mysql_connection.php";
    require_once "includes/functions.php";
?>
    <!-- videoplayer -->

<?php
    $c = $_GET['v'] ?? 0;
    $search = $database->query("SELECT * FROM videos where id='$c'");

    if(!$search){
        echo "<center>No videos found :( <br/><a href='index.php'>back to home page</a></center>";
    } else{
        $t = thumb($reg->image);
        if($search->num_rows == 1){
        $reg=$search->fetch_object();
        echo "
          
        <div class='card mb-3 shadow'>
        <div class='row no-gutters'>
          <div class='col-sm-5'>
          <video controls autoplay src='videos/$reg->video.mp4' class='card-img'></video>
          </div>
          <div class='col-sm-5'>
            <div class='card-body'>
              <h5 class='card-title'>$reg->title</h5>
              <p class='card-text'>$reg->text</p>
              <p class='card-text'><small class='text-muted'>published on: $reg->date</small></p>
            </div>
          </div>
        </div>
      </div>

        ";
        }
    }
    
     
?>

<?php
    include "includes/footer.php";
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>