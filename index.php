<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'abc');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
  <body>

    <div class="container">
      <br><br>
      <form action="index.html" method="post">
        Username : <input type="text" class="form-control" name="" value=""><br>
        Password : <input type="text" class="form-control" name="" value=""><br>
        Degree :
        <select class="form-control" onchange="func(this.value)">

          <option>Choose any one</option>
          <?php
          $q = "SELECT * FROM degree";
          $result = mysqli_query($con,$q);

          while($rows = mysqli_fetch_array($result)){
            ?>
            <option value="<?php echo $rows['mid']; ?>"> <?php echo $rows['degrees']; ?> </option>
            <?php
          }

           ?>

        </select><br>
        Class :
        <select class="form-control" id="dataget">

          <option value=""> Choose any one</option>

        </select>
        <br><br>
        <button class="btn btn-primary">Submit</button>




      </form>

    </div>

    <script type="text/javascript">

    function func(datavalue){
      $.ajax({
        url: 'class.php',
        type: 'POST',
        data: {datapost : datavalue},
        success: function(result){
          $('#dataget').html(result);
        }

      });
    }


    </script>


  </body>
</html>
