<?php
session_start();

include 'functions.php';
include 'validation.php';


$_SESSION['errors'] = [];
$_SESSION['submission'] = $_POST; //stores inputs incase of error - prevents input form clearing

//ensure there is a place for user to be re directed
if (! array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}

//If nothing is inputted do not continue and return to the page
if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}

//getPostData gets the inputs and stores them in the variables
$firstName = getPostData('first_name');
$lastName = getPostData('last_name');
$email = getPostData('email');
$comment = getPostData('comment');

//returns true or false based on if the inputs are valid or not
$firstNameIsValid = isFirstNameValid($firstName);
$lastNameIsValid = isLastNameValid($lastName);
$emailIsValid = isEmailValid($email);
$commentIsValid = isCommentValid($comment);


//Display error if not valid for first name, last name and email
if (! $firstNameIsValid) {
    $_SESSION['errors']['first_name'] = 'Please Enter a Longer First Name';
}

if (! $lastNameIsValid) {
    $_SESSION['errors']['last_name'] = 'Please Enter a Longer Last Name';
}

if (! $emailIsValid) {
    $_SESSION['errors']['email'] = 'Please Enter a Valid Email';
}

if (! $commentIsValid) {
    $_SESSION['errors']['comment'] = 'Please Add More to Your Message';
}

//if there are any errors - return back to the page
if (! $firstNameIsValid || ! $lastNameIsValid || ! $emailIsValid || ! $commentIsValid) {
    //set errors to show to user
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}

//gather all inputs and prepare for email
$to = "jacob.regsmith@gmail.com";
$subject = "New Email from Contact Form";
$message= "";
$message .= "First Name: " . $firstName . "<br>";
$message .= "Last Name: " . $lastName . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= "Message:" . $comment . "<br>";

//this actually sends the mail
mail($to, $subject, $message);
$_SESSION['submission'] = [];


header('Location: ' . $_SERVER['HTTP_REFERER']);