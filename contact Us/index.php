<?php
require_once 'config.php';

if(isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];
    $last_name  = $_POST['lastname'];
    $email      = $_POST['email'];
    $msg        = $_POST['msg'];

    $STH = $db->prepare("INSERT INTO feedback(first_name, last_name, email, msg) values(?,?,?,?)");
    $data = array($first_name,$last_name,$email,$msg);
    $STH ->execute($data);

    echo 'Successfully Sent';
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="jumbotron">

        <div class="modal-header">
            <h2>Contact Us</h2>
        </div>

        <div class="modal-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input class="form-control" type="text" name="firstname" placeholder="Enter firstname" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input class="form-control" type="text" name="lastname" placeholder="Enter lastname" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Enter valid Email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <input class="form-control" type="text" name="msg" required>
                </div>

        <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>

            </form>
        </div>
    <?php
    require_once 'footer.php';
    ?>
    <center>
    <i class="fas fa-phone-alt"></i>
    <i class="fas fa-envelope"></i>

    </center>
    
    </div>
    </div>
    
</body>
</html>