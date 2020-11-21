<?php

include 'includes/header.php';

?>
<div class='content'>
  <div class='border'>
    <form class='form'>
      <div class="row">
        <label class="label" for="forname"> First name: </label>
        <input class="input" type="text" id="forname" name="forname"><br>
      </div>
      <div class="row">
        <label class="label" for="surname"> Last name: </label>
        <input class="input" type="text" id="surname" name="surname"><br>
      </div>
      <div class="row">
        <label class="label" for="email"> E-mail: </label>
        <input class="input" type="text" id="email" name="email"><br>
      </div>
      <div class="row">
        <label class="label" for="message"> Message: </label>
        <input class="input" type="text" id="message" name="message"><br>
      </div>
      <input class="button" type="submit" value="Submit">
    </form>
  </div>
</div>

<?php
include 'includes/footer.php';

?>
