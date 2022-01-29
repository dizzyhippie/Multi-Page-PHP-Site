<?php

//Check if the fields are empty
function isFieldEmpty($input){
    return $input == "";
}

//Makes sure the input is over 2 letters or error
function isFirstNameValid($firstName){
    //If first name is less than 3 letters, DENY
    if (strlen($firstName) < 2) {
        return false;
    }
    //Otherwise return true
    return true;
}
//Makes sure the input is not completely empty, gives seperate message
function isFirstEmpty($firstName){
    if (isFieldEmpty($firstName)){
        return false;
    }
    return true;
}

//Makes sure the input is over 2 letters
function isLastNameValid($lastName){
    //If last name is less than 3 letters, DENY
    if (strlen($lastName) < 2) {
        return false;
    }
    //Otherwise return true
    return true;
}

//Makes sure the input is not completely empty
function isLastEmpty($lastName){
    if (isFieldEmpty($lastName)){
        return false;
    }
    return true;
}

//Makes sure the email is over 6 letters and also is a valid email address
function isEmailValid($email){
    //If email name is less than 3 letters, DENY
    if (strlen($email) < 6) {
        return false;
    }
    //IF EMAIL IS NOT VALID return false (! flips the variable !true = false, !false = true)
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    //Otherwise return true
    return true;
}

//Will give a seperate message if they didn't enter an email at all
function isEmailEmpty($email){
    if (isFieldEmpty($email)){
        return false;
    }
    return true;
}

//Makes sure the message is over 20 letters
function isCommentValid($comment){
    //If the message is less than 20 letters, false
    if (strlen($comment) < 20) {
        return false;
    }
    //Otherwise return true
    return true;
}

//Makes sure they didnt leave the comment section empty, returns seperate message to user
function isCommentEmpty($comment){
    if (isFieldEmpty($comment)){
        return false;
    }
    return true;
}

