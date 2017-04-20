<?php

$myemail  = "mike@machinegunstudios.com";

$yourname = check_input($_POST['yourname'], "Enter your name");
$email    = check_input($_POST['email']);
$comments = check_input($_POST['comments'], "Write your comments");

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

$message = "Machine Gun Studios:
Your contact form has been submitted by:

Name: $yourname
E-mail: $email

Comments:
$comments

End of message.
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: contact-sent.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>