<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert</title>

    <link rel="stylesheet" href="bootstrap.min.css">
  </head>
  <body>

    <div class="container">

      <h1 class="text-center"> Insert Data With Ajax </h1>
      <br>

      <div class="col-lg-8 m-auto">
      <form id="myform" action="insertphp.php" method="post">

        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" name="username">
        </div>

        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name="password">
        </div>

        <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">
      </div>

      </form>

      <script type="text/javascript">

      $(document).ready(function(){

        var from = $('myform');
        $('#submit').click(function(){

          $.ajax({

            url: from.attr("action");
            type: 'post',
            data: $('#myform input').serialize(),

            success: function(data){
              console.log(data);
            }


          });

        });

      });

      </script>

    </div>

  </body>
</html>
