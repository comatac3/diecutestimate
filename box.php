<?php include('dbconnect.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="two.js"></script>
  </head>
<style>
.headder{
  border-style: solid;
  border-width: 0.1px;
  padding: 10px;
}
/* .box {
  border-style: solid;
  border-width: 0.1px;
  line-height: 100px;
  height: 500px;
  margin:auto;
  display: flex;
  justify-content: center;
  flex-direction: column;
  text-align: center;
} */
#body{
  margin-top: 50px;
}
</style>

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
        <div class="card-deck">
        <?php $sql = "SELECT * FROM `product` WHERE `product_categoty_id`= 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) { ?>
            <div class="card col-md-3">
              <img src="images/box.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="boxestimate.php?product_id=<?php echo $row[product_id]; ?>"><h5 class="card-title"><?php echo $row[product_name]; ?></h5></a>
              </div>
            </div>
            <?php
          }
                            } else {
                                echo "0 results";
                            }
                            $conn->close(); ?>
          </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>