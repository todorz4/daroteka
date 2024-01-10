<?php
include 'header.php';
include 'conn/connection.php';
?>
<div class="container col-12 mt-5 mb-5 mx-auto">
    <div class="row">
        <h1 class="mx-auto">Uloguj se</h1>
    </div>
</div>

<form action="admin.php" method="post">
<div class="container col-12 mt-5 mx-auto">
  <!-- Email input -->
  <div class="form-outline mb-4 col-lg-3 col-sm-12 mx-auto">
  <label class="form-label" for="form2Example1">Korisničko ime</label>
    <input type="text" id="kor_ime" name="kor_ime" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4  col-lg-3 col-sm-12 mx-auto">
  <label class="form-label" for="form2Example2">Lozinka</label>
    <input type="password" id="lozinka" name="lozinka" class="form-control" />
  </div>

  <!-- Submit button -->
  <div class="form-outline mb-4  col-lg-3 col-sm-12 mx-auto">
  <input type="submit" value="Uloguj se" class="btn btn-primary btn-block mb-5">
</div>
</div>
</form>









<?php include 'footer.php'; ?>