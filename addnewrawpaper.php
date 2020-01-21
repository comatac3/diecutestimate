<?php include('header.php'); ?>
<div class="container" id="body">
  <div class="row">
    <div class="col-12">
      <h3 style="text-align:center">ADD NEW RAW PAPER</h3>
    </div>
  </div>
  <div class="row" style="border-style: solid; border-width: 0.1px; padding: 5px;">
    <div class="col-md-8">
      <img class="image-fluid" width="100%" src="images/paper.jpg" id="paper_draw" alt="">
      <!-- <div id="paper_name" class="centered">ชื่อกระดาษ</div> -->
    </div>
    <div class="col-md-4" style="margin-top: auto; margin-bottom: auto;">
      <h5 style="text-align: center;">Register Detail</h5>
      <form style="margin-top: 30px;">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-4 col-form-label"> Paper Name :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="paper_name" name="paper_name" onchange="changetext(this.value)" placeholder="ชื่อกระดาษ">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-4 col-form-label"> Supplier :</label>
          <div class="col-sm-6" style="padding-right:0">
            <select name="" class="form-control" id="">
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
            </select>
            <!-- <input type="text" class="form-control" id="paper_supplier" name="paper_supplier" placeholder="supplier"> -->
          </div>
          <div class="col-sm-2">
            <i style="font-size:30px;" class="fas fa-cog"></i>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-4 col-form-label"> Size :</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="paper_size_x" name="paper_size_x" onmouseover="changeimagex()" onmouseout="resetimage()" placeholder="x">
          </div>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="paper_size_y" name="paper_size_y" onmouseover="changeimagey()" onmouseout="resetimage()" placeholder="y">
          </div>
        </div>

        <button type="submit" name="button2" class="btn btn-success btn-lg btn-block">บันทึก</button>
      </form>
    </div>
  </div>
</div>
</div>
<script>
  $(function() {

    $('form').on('submit', function(e) {

      e.preventDefault();

      $.ajax({
        type: 'post',
        url: 'addrawpapersql.php',
        data: $('form').serialize(),
        success: function(response) {
          swal({
            title: "Good job!",
            text: response,
            icon: "success",
            button: "สุดยอด",
          });
        }
      });

    });

  });
</script>




<script language="javascript">
  // function changetext($x) {
  //   document.getElementById("paper_name").innerHTML = $x;
  // }

  function changeimagex() {
    document.getElementById("paper_draw").src = "images/paper_x.jpg";
  }

  function changeimagey() {
    document.getElementById("paper_draw").src = "images/paper_y.jpg";
  }



  function resetimage() {
    document.getElementById("paper_draw").src = "images/paper.jpg";
  }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>