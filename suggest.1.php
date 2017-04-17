<html>
<head>
	<title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<style>
        .lbl {
            vertical-align: top;
            margin-top: 20px;
        }

        form input[type="submit"] {
            width: auto;
            text-align: center;
            border: 0;
            background: #3888c2;
            color: #FFF;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            font-size: 16px;
            padding: 6px;
            font-family: 'Open Sans', sans-serif;
        }

        form {
            width: 500px;
            margin: 0 auto;
        }

        #comment, #comment_2 {
            width: 100%;
            border-radius: 4px;
            padding: 10px;
            border: 1px solid #a5a5a5;
            font-size: 14px;           
        }

        .highlight {
            background-color: #f7f7f9;
            padding: 1.5rem;
            margin-right: 0;
            margin-left: 0;
            display: inline-block;
        }

        #wrapper {
            padding: 20px;
        }

        h1 {
            color: red;
        }


    </style>
</head>
<body>  

<?php
// header("location:suggest.1.php");     

if($_SERVER['REQUEST_METHOD'] == "POST") {

    // $name = $_POST['name'];
    // $email = $_POST['email'];
    $comment = $_POST['comment'];
    $comment_2 = $_POST['comment_2'];


    if($comment == "") {
        $error_message = "details field cannot be blank.";
    }

    // if(!isset($error_message)) {
    //     echo "<pre>";
    //     echo "name: " . $name ."\n";
    //     echo "email:" . $email ."\n";
    //     echo "comment:" . $comment ."\n";
    //     echo "</pre>";
    // }  

}

?>

<div id="wrapper">
    <div id="instructions">
        <h3>Escaping output is important to prevent malicious attack. </h3>
        <p>You should always escape any output you are sending to the browser</p>



        <p style="margin: 0">try to input the following in the comments section and click send to se what can happen...</p>
        <figure class="highlight">
        <code>
        <?php echo htmlspecialchars($str ='</textarea><h1>Malicios stuff INserted!</h1><textare>'); ?>
        </code>

        </figure>

        <p style="margin: 0">You can also copy this code and place it into the comments section too to see how your account can be compromised.</p>
        <figure class="highlight">
        <code>

        <?php echo htmlspecialchars($str ='</textarea></div></form><p>I\'ve hidden all other elements on your page with CSS. If you enter the info below, it may be sent to some malicious server</p>
<div><label>Email:</label><input type="text" id="email" name="email"></div><div><label>Password:</label><input type="text" id="pw" name="pw">  </div> <style> #my_form, #instructions {display:none;}</style>
'); ?>
        </code>

        </figure>      
    </div>

    <form id="my_form" method="post" action="suggest.1.php">

        <!--<div>
            <label for="name">Name (Required)</label>
            <input type="text" id="name" name="name" value="<?php if(isset($name)) { echo $name; } ?>">              
        </div> 

        <div>
            <label for="email">Email (Required)</label>
            <input type="text" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>">              
        </div> -->

        <div>  
            <label class="lbl" for="comment">Comment(not escaped)</label>
            <textarea id="comment" name="comment"><?php if(isset($comment)) { echo $comment; } ?></textarea>
        </div>

        <div>  
            <label class="lbl" for="comment_2">Comments(escaped with htmlspecialchars)</label>
            <textarea id="comment_2" name="comment_2"><?php if(isset($comment_2)) { echo htmlspecialchars($comment_2); } ?></textarea>
        </div>    

        <div style="display: none;">
            <!--for robots filling up every input text -->
            <label for="address">Address:</label>
            <input type="address" id="address" name="address">
        </div>    

        <input type="submit" value="send"/>        

    </form>
</div>
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
    

</html>
