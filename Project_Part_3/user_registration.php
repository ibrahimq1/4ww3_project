<!DOCTYPE html>
<!-- HTML5 Compliant -->
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <!-- external main CSS stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/user_registration.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <!-- Bootstrap Icon library -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- Animate.css library !-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Metadata -->
  <title>Moila</title>
  <meta charset="utf8" />
  <meta name="author" content="Quazi Rafid Ibrahim, Frank Su" />
  <meta name="description" content="CS 4WW3 Project Part 1" />
  <meta name="keywords" content="web,programming,McMaster,4ww3 Project" />

  <!-- Tell search engines not to index this page -->
  <meta name="robots" content="noindex" />

  <!-- favicon -->
  <link rel=icon typ="image/x-icon" href=favicon.ico>
  <!-- link to js file -->
  <script src="assets/js/formValidation.js"></script>

</head>


</head>

<body>
  <!-- header included from another file -->
  <?php include 'header.php'; ?>

  <!-- Registration form content -->
  <section id="main" class="animate__animated animate__slideInDown">
    <!-- check to see if flash message is set, if so display it -->
    <?php
    if (isset($_SESSION["flash-error"])) {
      vprintf("<div class='alert alert-danger' style='text-align: center;'>%s</div>", $_SESSION["flash-error"]);
      unset($_SESSION["flash-error"]);
    }
    if (isset($_SESSION["flash-success"])) {
      vprintf("<div class='alert alert-success' style='text-align: center;'>%s</div>", $_SESSION["flash-success"]);
      unset($_SESSION["flash-success"]);
    } ?>
    <div class="container">

      <h1 class="reg-header">Sign Up</h1>

      <div class="reg-body">
        <form name="userRegistration" method="post" action="/Project_Part_3/scripts/save_user.php">
          <div class="form-group">
            <input class="form-control" type="text" name="userName" placeholder="Username (no whitespaces)">
            <div id="nameerror"> </div>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password (min 6 chars, with at least 1 capital and 1 number)">
            <div id="passerror"> </div>
          </div>
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="E-mail">
            <div id="emailerror"> </div>
          </div>
          <div class="form-group">
            <label for="countries">Choose your Country:</label>
            <select id="countries" name="country">
              <option value="Canada">Canada</option>
              <option value="United States<">United States</option>
              <option value="China">China</option>
              <option value="Sweden">Sweden</option>
            </select>
            <label for="form-gender">Choose your gender</label>
            <div id="form-gender">
              <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female"> Female
              <input type="radio" name="gender" value="other" checked> Other
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-lg btn-dark btn-block" id="pinkbg" type="submit">Sign Up</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- footer included from another file -->
  <?php include 'footer.php'; ?>

</body>

</html>



<!-- 
<div>Icons made by <a href="https://www.flaticon.com/authors/prettycons" title="prettycons">prettycons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
Video by Pavel Danilyuk from Pexels
-->