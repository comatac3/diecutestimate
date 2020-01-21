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
  <script src="https://kit.fontawesome.com/810f557310.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
  <title>Hello, world!</title>
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
      <div class="col-12" style="padding: 10px">
        <a href="index.html">
          <h3 style="text-align: right;">MAIN PAGE <i style="font-size:30px;" class="fas fa-home"></i></h3>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <img class="img-fluid" width="100%" src="images/box.jpeg" alt="">
        <form style="margin-top: 30px;">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">X :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="xx" placeholder="A">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Y :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="yy" placeholder="B">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Z :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="zz" placeholder="C">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-4 col-form-label">จำนวน :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="box_num" placeholder="100">
            </div>
          </div>

        </form>
      </div>

      <div class="col-md-6">
        <canvas id="myCanvas"></canvas>
        <button type="" onclick="creatediecuttemplate()" class="btn btn-block btn-success btn-lg">CREATE DIECUT TEMPLATE</button>
      </div>
    </div>

    <div class="row" id="diecuttemplate" style='display:none'>
      <h1>hi</h1>
    </div>
    <?php
    $sql = "SELECT * FROM `product` WHERE `product_id` = " . $_GET['product_id'];
    $result = $conn->query($sql);
    $row = $result->fetch_array();
    $process_id = json_decode($row['process_id']);
    foreach ($process_id as $process) {
      $sql = "SELECT * FROM `process` WHERE `process_id` = " . $process;
      $query = $conn->query($sql);
      $result = $query->fetch_array();
      echo $result['process_name'] . '<br>';
      $paper_id_arr = json_decode($result['paper_id']);
      foreach ($paper_id_arr as $paper_id) {
        $sql = "SELECT * FROM `paper` WHERE `paper_id` = " . $paper_id;
        $result = $conn->query($sql);
        $paper = $result->fetch_array();

        $redline = 0.3; //ระยะ diecutline
        $peek = 1.3; //ปีกปะกาว

        //input
        $x = 5.2;
        $y = 4.2;
        $z = 5.2;

        //Box ฝาเสียบก้นเสียบ
        $box_width = $redline + $peek + $x + $z + $x + $z + $redline;
        $box_height1 = $redline + $peek + $z + $y + $redline;


        //paper setting
        $a =  $paper['paper_padding_A'];
        $b = $paper['paper_padding_B'];
        $c = $paper['paper_padding_C'];
        $clipper = $paper['clipper'];

        //paper area
        $paper_size_x = $paper['paper_size_x'];
        $paper_size_y = $paper['paper_size_y'];
        $paper_width = $paper_size_x - $a - $c;
        $paper_height = $paper_size_y - $clipper - $b;


        //แนวนอน
        $right =  floor($paper_width / $box_width);
        $top = floor($paper_height / $box_height1);

        // echo 'column'.$right.'<br>';
        // echo 'row'.$top.'<br>';

        //แนวตั้ง
        $right2 = floor($paper_width / $box_height1);
        $top2 = floor($paper_height / $box_width);

        echo 'column' . $right2 . '<br>';
        echo 'row' . $top2 . '<br>';



        echo $paper['paper_name'] . '<br>';
        echo '<canvas id="' . $paper['paper_name'] . '_w"></canvas>';
        echo '<script src="drawdiecut.js"></script>';
        echo '<script>';
        echo 'var idname = "' . $paper['paper_name'] . '_w";';
        echo 'diecut(idname,' . $x . ',' . $y . ',' . $z . ',0,' . $right2 . ');';
        echo '</script>';
      }
    } ?>
    <!-- </tbody>
        </table> -->

  </div>
  </div>
  <script>
    function creatediecuttemplate() {

      var diecuttemplate = document.getElementById('diecuttemplate');
      diecuttemplate.style.display = "block";
    }
  </script>
  <script src="drawbox.js"></script>

  <script>
    $width.addEventListener("keyup", function() {
      x = this.value * 20;
      draws();
    }, false);
    $height.addEventListener("keyup", function() {
      y = this.value * 20;
      draws();
    }, false);
    $width2.addEventListener("keyup", function() {
      z = this.value * 20;
      draws();
    }, false);
  </script>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>