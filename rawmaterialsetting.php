<?php
include('dbconnect.php');

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>raw materail setting</title>
</head>


<body>
  <div class="headder" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          ESTIMATEDIECUT
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="body">
    <div class="row">
      <div class="col-12" style="margin-bottom: 20px; margin-top:20px;">
        <h3>RAW PAPER<a href="addnewrawpaper.php"><button style="float:right;" type="" class="btn btn-success">ADD NEW RAW PAPER</button></a></h3>
      </div>
    </div>
    <?php $sql = "SELECT * FROM `raw_paper`;";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) { ?>
        <div class="row" style="border-style: solid; border-width: 0.1px; padding: 5px;">
          <div class="col-md-6">
            <!-- <img class="image-fluid" width="100%" src="images/paper.jpg" id="a4" alt="">
            <div class="centered"><?php echo $row['paper_name']; ?></div> -->

            <canvas id="<?php echo $row['paper_name']; ?>"></canvas>
            <script src="drawpaper.js"></script>

          </div>
          <div class="col-md-6" style="margin-top: auto; margin-bottom: auto;">
            <h5 style="text-align: center;">RAW PAPER Detail</h5>
            <form style="margin-top: 30px;" action="addpapersql.php" method="post">
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label"> Paper Name :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="paper_name" name="paper_name" value="<?php echo $row['paper_name']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label"> Size :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="paper_size_x" name="paper_size_x" value="<?php echo $row['paper_size_x']; ?>">
                </div>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="paper_size_y" name="paper_size_y" value="<?php echo $row['paper_size_y']; ?>">
                </div>
              </div>
              <button type="summit" class="btn btn-success btn-lg btn-block">SUMMIT</button>
            </form>
          </div>
        </div>
        <script>
          var name = "<?php echo $row['paper_name']; ?>";
          linedraws(<?php echo $row['paper_size_x']; ?>, <?php echo $row['paper_size_y']; ?>, name)
        </script>
    <?php          }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>


  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

<script src="drawpaper.js"></script>
<script>
  var name = "mhee";
  linedraws(21, 29.7, name)
</script>
<script>
  var name = "mhee2";
  linedraws(29, 29.7, name)
</script>
<script language="javascript">
  // function changeImageA() {
  //     document.getElementById("a4").src = "images/a.jpg";
  // }
  // function changeImageB() {
  //     document.getElementById("a4").src = "images/b.jpg";
  // }
  // function changeImageC() {
  //     document.getElementById("a4").src = "images/c.jpg";
  // }
  // function changeImageClipper() {
  //     document.getElementById("a4").src = "images/clipper.jpg";
  // }
  // function resetimage() {
  //     document.getElementById("a4").src = "images/paper.jpg";
  // }
  // 
</script>
<script language="javascript">
  //     function changeImageA5() {
  //         document.getElementById("a5").src = "images/a.jpg";
  //     }
  //     function changeImageB5() {
  //         document.getElementById("a5").src = "images/b.jpg";
  //     }
  //     function changeImageC5() {
  //         document.getElementById("a5").src = "images/c.jpg";
  //     }
  //     function changeImageClipper5() {
  //         document.getElementById("a5").src = "images/clipper.jpg";
  //     }
  //     function resetimage5() {
  //         document.getElementById("a5").src = "images/paper.jpg";
  //     }
</script>

</html>