 



<!-- // $from = 'Demo contact form <demo@domain.com>'; -->
<!-- $sendTo = 'Demo contact form <info@chef-france.com>'; -->
<!-- $subject = 'New message from contact form'; -->
<!-- $fields = array('name' => 'Name', 'email' => 'Email', 'message' => 'Message'); -->
<!-- $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!'; -->
<!-- $errorMessage = 'There was an error while submitting the form. Please try again later'; -->

<!-- if ($_SERVER['REQUEST_METHOD'] == 'POST') { -->
    <!-- try { -->
        <!-- $emailText = "You have a new message from the contact form\n=============================\n"; -->

        <!-- foreach ($_POST as $key => $value) { -->
            <!-- if (isset($fields[$key])) { -->
                <!-- $emailText .= "$fields[$key]: $value\n"; -->
            <!-- } -->
        <!-- } -->

        <!-- $headers = array( -->
            <!-- 'Content-Type: text/plain; charset="UTF-8";', -->
            <!-- 'From: ' . $from, -->
            <!-- 'Reply-To: ' . $_POST['email'], -->
            <!-- 'Return-Path: ' . $from, -->
        <!-- ); -->

        <!-- if (mail($sendTo, $subject, $emailText, implode("\n", $headers))) { -->
            <!-- $responseArray = array('type' => 'success', 'message' => $okMessage); -->
        <!-- } else { -->
            <!-- throw new Exception('Mail failed'); -->
        <!-- } -->
    <!-- } catch (Exception $e) { -->
        <!-- $responseArray = array('type' => 'danger', 'message' => $errorMessage); -->
    <!-- } -->

    <!-- header('Content-Type: application/json'); -->
    <!-- echo json_encode($responseArray); -->
<!-- } else { -->
    <!-- header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405); -->
    <!-- echo json_encode(array('type' => 'danger', 'message' => 'Method Not Allowed')); -->



