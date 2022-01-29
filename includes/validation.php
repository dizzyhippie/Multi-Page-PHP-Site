<?php

//Check if the field is empty
function isFieldEmpty($input){
    return $input == "";
}

function isFirstNameValid($firstName){
    //If first name is less than 3 letters, DENY
    if (strlen($firstName) < 2) {
        return false;
    }
    //Otherwise return true
    return true;
}

function isFirstEmpty($firstName){
    if (isFieldEmpty($firstName)){
        return false;
    }
    return true;
}

function isLastNameValid($lastName){
    //If last name is less than 3 letters, DENY
    if (strlen($lastName) < 2) {
        return false;
    }
    //Otherwise return true
    return true;
}

function isLastEmpty($lastName){
    if (isFieldEmpty($lastName)){
        return false;
    }
    return true;
}

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

function isEmailEmpty($email){
    if (isFieldEmpty($email)){
        return false;
    }
    return true;
}

function isCommentValid($comment){
    //If the message is less than 20 letters, false
    if (strlen($comment) < 20) {
        return false;
    }
    //Otherwise return true
    return true;
}

function isCommentEmpty($comment){
    if (isFieldEmpty($comment)){
        return false;
    }
    return true;
}

