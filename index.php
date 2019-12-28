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

<br/>  
<h1 style='padding: 10px;' class="text-center">Explorer Videos</h1>
<br/>
<br/>

<div class="container">
<div class="row row-cols-1 row-cols-md-3">

    <?php
      $search = $database->query("SELECT * FROM videos order by id");
      if(!search){
        echo "Error to search";
      } else{
        if($search->num_rows == 0){
        echo "No videos registered :(";
      } else{
          while($reg=$search->fetch_object()){
          $t = thumb($reg->image);
          echo "
            
          <div class='card-deck text-center' style='margin-left: 10px; margin-bottom: 40px;'>
  <div class='card shadow'>
    <video onmouseover='autoplay = true' src='videos/$reg->video.mp4#t=60' class='card-img-top'></video>
    <div class='card-body'>
      <h5 class='card-title'>$reg->title</h5>
      <a href='watch.php?v=$reg->id' class='btn btn-primary'>View video</a>
    </div>
    <div class='card-footer'>
      <small class='text-muted'>published on: $reg->date</small>
    </div>
  </div>
</div>

          
          ";
        }
      }
    }
?>

  </div>
  </div>


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>