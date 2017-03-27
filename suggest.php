<?php 
$pageTitle = "Suggest A Media Item";
$section = "suggest";

include('inc/header.php'); ?>

<div class="section page">
    <div class="wrapper">
        <h1>Suggest a media item</h1>
        <p>Let me know  your suggestions. Complete the form to send me an email</p>
    </div>
    <form method="post" action="process.php">
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
</div>
<?php include('inc/footer.php'); ?>