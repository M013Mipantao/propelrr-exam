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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/validate.js"></script>
</head>
<body>

    <div class="col-sm-6 col-sm-offset-3">
      <h1>Sign-up</h1>

      <form action="controller/validate.php" method="POST">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name"/>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com"/>
        </div>

        <div class="form-group">
          <label for="number">Mobile Number</label>
          <input type="number" class="form-control" id="number" name="number" placeholder="09xxxxxxxxxx"/>
        </div>

        <div class="form-group">
          <label for="dateofbirth">Date of Birth</label>
          <input type="text" class="form-control" id="dateofbirth" name="dateofbirth" placeholder=""/>
        </div>

        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" class="form-control" id="age" name="age" />
        </div>

        <div class="form-group">
          <label for="gender">Gender</label>
            <select class="form-control">
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
</html>