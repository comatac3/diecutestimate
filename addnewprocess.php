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

    <title>Hello, world!</title>
  </head>



  <style>
.headder{
  border-style: solid;
  border-width: 0.1px;
  padding: 10px;
}
.box {
  border-style: solid;
  border-width: 0.1px;
  line-height: 100px;
  height: 500px;
  margin:auto;
  display: flex;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}
#body{
  margin-top: 10px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 200px;
  color: #8d8b8b;
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
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
          <div class="col-12">
            <h3 style="text-align:center">ADD NEW RAW PAPER</h3>
          </div>
      </div>
      <div class="row" style="border-style: solid; border-width: 0.1px; padding: 5px;">
        <div class="col-md-8">
            <img class="image-fluid" width="100%" src="images/paper.jpg" id="a4" alt="">
            <div class="centered">Name</div>    
        </div>
        <div class="col-md-4" style="margin-top: auto; margin-bottom: auto;">
            <h5 style="text-align: center;">Register Detail</h5>
            <form style="margin-top: 30px;" action="addprocesssql.php" method="post">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label"> Process Name :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="process_name" name="process_name" placeholder="ชื่อกระดาษ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Process :</label>
     
                    <div class="col-sm-8 form-group">

                      
                      <?php $sql = "SELECT * FROM `paper`";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                              // output data of each row
                              while($row = $result->fetch_assoc()) { 
                                
                                echo '<input type="checkbox" class="form-check-input" id="process" name="paper_id[]" value="'.$row[paper_id].'">'.$row[paper_name].'<br>';
                              
                              }
                            } else {
                                echo "0 results";
                            }
                            $conn->close(); ?>

                    </div>
                  </div>
                
                  <button type="summit" class="btn btn-success btn-lg btn-block">บันทึก</button>
              </form>
        </div>
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