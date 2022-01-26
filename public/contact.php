<?php
session_start();

//$firstName
//$lastName
//$email
//$message

include '../includes/functions.php';

?>

<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <?php include '../includes/partials/navigation.php';?>
        <form method="POST" action="../includes/submit.php">
            <input type="text" placeholder="First Name" name="first_name" value="<?php echo $firstName; ?>">
            <br>
            <input type="text" placeholder="Last Name" name="last_name" value="<?php echo $lastName; ?>">
            <br>
            <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
            <br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
