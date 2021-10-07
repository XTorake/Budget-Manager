<?php if (isset($_GET[NO_ACCESS])): ?>
  <h3> ACCESS DENIED TO ADMIN PANEL </h3>
  <hr>
<?php endif; ?>
<h2> GENERAL PAGE FOR CLIENTS </h2>
<a href="controller/doLogout.php">Logout</a>
<br><br>
<a href="?<?=ADMIN_VIEW?>"> Go To Admin </a>
