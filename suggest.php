<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);
    var_dump($_GET);

    $name = $_POST["name"];
    $email = $_POST["email"];
    $details = $_POST['details'];

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
        </table>
        <input type="submit" value="send"/>        
    </form>
      <?php } ?>
</div>
<?php include('inc/footer.php'); ?>