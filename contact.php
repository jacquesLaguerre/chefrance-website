<?php

// configure
$from = 'Demo contact form <demo@domain.com>';
$sendTo = 'Demo contact form <info@chef-france.com>'; // Correct email format
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'subject' => 'Subject', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $emailText = "You have a new message from the contact form\n=============================\n";

        foreach ($_POST as $key => $value) {
            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: $value\n";
            }
        }

        $headers = array(
            'Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );

        if (mail($sendTo, $subject, $emailText, implode("\n", $headers))) {
            $responseArray = array('type' => 'success', 'message' => $okMessage);
        } else {
            throw new Exception('Mail failed');
        }
    } catch (Exception $e) {
        $responseArray = array('type' => 'danger', 'message' => $errorMessage);
    }

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($responseArray);
    } else {
        echo $responseArray['message'];
    }
} else {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    echo "Method Not Allowed";
}
?>
