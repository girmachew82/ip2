<?php
require 'nav.php';
?>

<form class="form-inline mt-15" method="POST" action="fileWrite.php">
  <div class="form-group mx-sm-3 mb-2">
    <label for="staticEmail2" class="sr-only">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">First name</label>
    <input type="text" class="form-control" name ="fname" >
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Father name</label>
    <input type="text" class="form-control"   name="fathername">
  </div>
  <div class="form-group mx-sm-3 mb-2">
  <input class="form-check-input" type="radio" value="male" name="gender">
  <label class="form-check-label" for="flexRadioDefault2">
    Male
  </label>
  <input class="form-check-input" type="radio" value="female" name="gender">
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<div class="form-group mx-sm-3 mb-2">
<select class="form-select" name ="department">
  <option>Select Department</option>
  <option value="1">IT</option>
  <option value="2">CS</option>
  <option value="3">IS</option>
</select>
</div>
<div class="form-group mx-sm-3 mb-2">
<label class="form-check-label" for="remark">
    Remark
  </label>
    <textarea name="remark"></textarea>
</div>
  <button type="submit" class="btn btn-primary mb-2">Register</button>
</form>