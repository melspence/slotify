<?php
function sanitizeFormUsername($inputText) {
    $inputText = htmlspecialchars($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}
function sanitizeFormString($inputText) {
    $inputText = htmlspecialchars($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

function validateEmail($inputEmail) {
    filter_var($inputEmail, FILTER_VALIDATE_EMAIL);
    return $inputEmail;

}
function sanitizeFormPassword($inputText) {
    $inputText = htmlspecialchars($inputText);
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    //  register button was pressed
    // Collect data from form
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = validateEmail($_POST['email']);
    $email2 = validateEmail($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);
}
?>