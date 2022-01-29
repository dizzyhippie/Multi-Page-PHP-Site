<?php
// Count entries in post array, if more than 0 - show submission data. If not return false because it's empty.
function showSubmission(){
    return count($_POST) > 0;
}

//Get the data that the user submitted into the _POST array
function getPostData($key){
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    return "";
}

//Get error messages from session
function getErrors($key){

    if (! isset($_SESSION)){
        return "";
    }
    if (! array_key_exists('errors', $_SESSION)){
        return "";
    }
    if (! array_key_exists($key, $_SESSION['errors'])) {
        return "";
    }
    return $_SESSION['errors'][$key];
}

//Get the user submission from session
function getSubmission($key){

    if (! isset($_SESSION)){
        return "";
    }
    if (! array_key_exists('submission', $_SESSION)){
        return "";
    }
    if (! array_key_exists($key, $_SESSION['submission'])) {
        return "";
    }
    return $_SESSION['submission'][$key];
}