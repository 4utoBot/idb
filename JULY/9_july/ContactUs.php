<?php
   // Preset authentication status to false.
   $authorized = FALSE;

   if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {

      // Read the authentication file into an array
      $authFile = file("authenticate.txt");

      // Cycle through each line in file, searching for authentication match.
      foreach ($authFile as $login) {
         list($username, $password) = explode(":", $login);

         // Remove the newline from the password
         $password = trim($password);
         if (($username == $_SERVER['PHP_AUTH_USER']) &&
             ($password == md5($_SERVER['PHP_AUTH_PW']))) {
             $authorized = TRUE;
             break;
         } 
      } 
   } 

   // If not authorized, display authentication prompt or 401 error
   if (! $authorized) {
      header('WWW-Authenticate: Basic Realm="Secret Stash"');
      header('HTTP/1.0 401 Unauthorized');
      print('You must provide the proper credentials!');
      exit;
   } 
   // restricted material goes here...
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
 you are not   welcome here
</body>
</html>