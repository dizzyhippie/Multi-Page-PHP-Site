<?php
session_start();
include '../includes/functions.php';

$firstName = getSubmission('first_name');
$lastName = getSubmission('last_name');
$email = getSubmission('email');
$comment = getSubmission('comment');

$showSubmissionData = showSubmission();

//Get errors if they exist and store them to display
$firstNameError = getErrors('first_name');
$lastNameError = getErrors('last_name');
$emailError = getErrors('email');
$commentError = getErrors('comment');

//When user refreshes the page the error messages clear
$_SESSION['errors'] = [];
$_SESSION['submission'] =[];

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
            <!-- Small bit of css to style errors -->
            <span style="color: red;">
                    <?php echo $firstNameError; ?>
                </span>
            <br>
            <input type="text" placeholder="Last Name" name="last_name" value="<?php echo $lastName; ?>">
            <span style="color: red;">
                    <?php echo $lastNameError; ?>
                </span>
            <br>
            <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
            <span style="color: red;">
                    <?php echo $emailError; ?>
                </span>
            <br>
            <input name="comment" placeholder="Enter Message Here!" value="<?php echo $comment; ?>"></input>
            <span style="color: red;">
                    <?php echo $commentError; ?>
                </span>
            <br>
            <button type="submit">Submit</button>
        </form>
      
    </body>
</html>
