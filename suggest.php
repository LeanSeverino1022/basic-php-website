<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // var_dump($_POST);
    // var_dump($_GET);

    $name = trim(filter_input(INPUT_POST,"name", FILTER_SANITIZE_EMAIL));
    $email = trim(filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL));
    $details = trim(filter_input(INPUT_POST,"details", FILTER_SANITIZE_SPECIAL_CHARS));

    if($name == "" || $email ="" || $details ="") {
        echo "<p> Please fill in the required fields: Name, Email and Details</p>";   
        exit;     
    }

    // if this hidden input has a value, something is not right
    if($_POST["address"] != "" ) {
        echo "NOT GOOD. BAd form input";
        exit;
    }

    echo "<pre>";
    $html_body = "";
    $html_body .= "NAME: " .  $name . "\n";
    $html_body .= "EMAIL: " . $email . "\n";    
    $html_body .= "DETAILS: " . $details . "\n";

    echo $html_body;
    echo "</pre>";

    header("location:suggest.php?status=thanks");
}

$pageTitle = "Suggest A Media Item";
$section = "suggest";

include('inc/header.php'); ?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a media item</h1>
        <?php
        if(isset($_GET['status']) && $_GET['status'] == "thanks") {
            echo "<p>Thanks for the email I&rsquo;ll checkout your suggestions shortly!</p>";
        } else { ?>
        <p>Let me know  your suggestions. Complete the form to send me an email</p>
    </div>
    <form method="post" action="suggest.php">
        <table>
            <tr>
                <th><label for="name">Name:</label></th>
                <td><input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <th><label for="email">Email:</label></th>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <th><label for="name">Suggest Item details:</label></th>
                <td><textarea id="details" name="details">default</textarea></td>
            </tr>
            <tr style="display: none;">
            <!--for robots filling up every input text -->
                <th><label for="address">Address:</label></th>
                <td><input type="address" id="address" name="address"></td>
            </tr>
        </table>
        <input type="submit" value="send"/>        
    </form>
      <?php } ?>
</div>
<?php include('inc/footer.php'); ?>