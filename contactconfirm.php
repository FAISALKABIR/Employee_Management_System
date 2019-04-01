<?php

if (isset($_POST) && !empty($_POST)){
    $to      =  $_POST['to'];
   $subject = 'Email Tester From Shuvo';
   $message = $_POST['message'];
   $headers = 'From: pakkna@gmail.com' . "\r\n" .
       'Reply-To: pakkna@gmail.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();

   if(mail($to, $subject, $message, $headers)) {
       $_SESSION['success']= ' Your Email sent successfully!';
   } else {
       $_SESSION['error']= 'Failure: Your Email was not sent!';
      // die('Failure: Your Email was not sent!');
   }
}


?>
<!Doctype html>
<html>
<head>
    <title>Mail Sender</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .red{
        color: red;
    }
</style>
</head>
<body>
<div class="container" style="width: 800px; height: 500px; border: 3px solid chocolate">
                    <h5 style="text-align: center">
                        <?php if(isset($_SESSION['success'])){ ?><div class="alert alert-success" role="alert"> <?php echo $_SESSION['success']; unset($_SESSION['success']);?> </div><?php } ?>

                        <?php if(isset($_SESSION['error'])){ ?><div class="alert alert-danger" role="alert"> <?php echo $_SESSION['error']; unset($_SESSION['error']);?> </div><?php } ?>

                    </h5>

<form method="post">
    <div>
        <div class="form-group col-sm-offset-3 col-sm-6 "  style="background-color:darkmagenta; margin-top: 10px; border-radius: 5px; color: white; font-weight: bolder">
          <h3 style="padding-bottom: 4px;"><center>Email Sender From Local Host</center> </h3>
        </div>
        <br style="clear:both">
        <div class="form-group col-sm-offset-3 col-sm-6 ">
            <label id="messageLabel" for="message">To</label>
            <input class="form-control" type="email" name="to" placeholder="Enter Your Email Address" required>
        </div>
        <br style="clear:both">
        <div class="form-group col-sm-offset-3 col-sm-6 ">
            <label id="messageLabel" for="message">Message </label>
            <textarea class="form-control input-sm " name="message" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p</span>
        </div>
        <br style="clear:both">
        <div class="form-group col-sm-offset-4 col-sm-4 ">
            <input class="form-control input-sm btn btn-success disabled" id="btnSubmit" name="btnSubmit" type="submit" style="height:35px">
        </div>
</form>
    </div>
    <script>
        $(document).ready(function(){
            $('#characterLeft').text('140 characters left');
            $('#message').keyup(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });
        </script>
</body>
</html>
