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
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://use.typekit.net/ghs3lib.css">
    </head>
    <body>
        <?php include '../includes/partials/navigation.php';?>
        
        <section id="contact">
        <form method="POST" action="../includes/submit.php" id="form">
            <h2 class="contact-title">Get in Touch!</h2>
            <input type="text" placeholder="First Name" name="first_name" class="input-field" value="<?php echo $firstName; ?>">
            <span class="errors">
                    <?php echo $firstNameError; ?>
                </span>
            <br>
            <input type="text" placeholder="Last Name" name="last_name" class="input-field" value="<?php echo $lastName; ?>">
            <span class="errors">
                    <?php echo $lastNameError; ?>
                </span>
            <br>
            <input type="text" placeholder="Email" name="email" class="input-field" value="<?php echo $email; ?>">
            <span class="errors">
                    <?php echo $emailError; ?>
                </span>
            <br>
            <input name="comment" placeholder="Enter Message Here!" class="input-field comment" value="<?php echo $comment; ?>"></input>
            <span class="errors">
                    <?php echo $commentError; ?>
                </span>
            <br>
            <button type="submit" id="send">Submit</button>
        </form>
        </section>
        <?php include '../includes/partials/footer.php';?>
    </body>
</html>
