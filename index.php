<?php

include 'includes/header.php';

?>
<div class='content'>
  <div class='form'>
    <form>
      <label for="forname"> First name: </label>
      <input type="text" id="forname" name="forname"><br>
      <label for="surname"> Last name: </label>
      <input type="text" id="surname" name="surname"><br>
      <label for="email"> E-mail: </label>
      <input type="text" id="email" name="email"><br>
      <label for="message"> Message: </label>
      <input type="text" id="message" name="message"><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>

<?php
include 'includes/footer.php';

?>
