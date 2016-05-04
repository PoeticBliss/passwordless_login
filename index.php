<?php
// Enable all error reporting so we can debug
// Commment out below line of code when using this in production
error_reporting(-1);

// This is the sample file to run it

include 'inc/passwordless.php';

$p = new passwordless('json', true);  // remove second argument in production

if (isset($_GET['code'])) {
  echo $p->validate($_GET['code']);
} else if (isset($_GET['email'])) {
  echo $p->sendCode($_GET['email']);
} else {
echo 'Submit value (Email or code) using php url get for trial';
}
?>
