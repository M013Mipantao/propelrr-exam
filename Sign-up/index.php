<?php
include_once('db_connection/connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link
      rel="stylesheet"
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>
    <script type="text/javascript" src="js/validate.js"></script>
</head>
<body>

    <div class="col-sm-6 col-sm-offset-3">
      <h1>Sign-up</h1>

      <form action="controller/validate.php" method="POST">
        <div id="fullname-group" class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name"/>
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com"/>
        </div>

        <div id="number-group" class="form-group">
          <label for="number">Mobile Number</label>
          <input type="number" class="form-control" id="number" name="number" placeholder="09xxxxxxxxxx"/>
        </div>

        <div id="dateofbirth-group" class="form-group">
          <label for="dateofbirth">Date of Birth</label>
          <input type="text" class="form-control"  id="date_picker" name="dateofbirth" placeholder=""/>
        </div>

        <div id="age-group" class="form-group">
          <label for="age">Age</label>
          <input type="number" class="form-control" id="age" name="age" readonly/>
        </div>

        <div id="gender-group" class="form-group">
          <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <option value="male" selected>Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
          Submit
        </button>
      </form>
    </div>
</body>
<script>
    $(function() {
        $("#date_picker").datepicker({
            onSelect: function(value, ui) {
                var today = new Date(),
                    age = today.getFullYear() - ui.selectedYear;
                $('#age').val(age);
            },
            dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
        });
    });
</script>
</html>