# passwordless Login
Simple php passwordless login system

## How to use

### Send code to email and create session
```php
<?php
// include class file to your working script
include 'inc/passwordless.php';

// Create an instance of the passwordless class.
// It takes one argument, which can be either json or array. Defaults to json if no argument is passed
$p = new passwordless('json');

// To send code to email and create session
// sendCode() method handles email validation too
$p->sendCode('trial@example.com');  // pass email as argument to sendCode() method
?>
```

### Verify code that user enters
```php
$code = 23456;
// Add user code to validate() method
$p->validate($code); //will log user in if successful
```

### Check if user is logged in
You have to use this in every page that user must be logged in to view
```php
// returns true if user is logged in and false if not logged in
$p->loggedIn();
```
