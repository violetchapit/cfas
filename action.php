<?php include('includes/db.php'); ?>

<?php 

if(!empty($_POST["ssm_number"])) {

    $ssm_number = $_POST["ssm_number"];

    $result =mysqli_query($conn, "SELECT ssm_number FROM users WHERE ssm_number='$ssm_number'");
    $count=mysqli_num_rows($result);

    if($count>0) {
        ?>
        <p style="color: red;"> SSM already registered .</p>
        <script>$('#register').prop('disabled',true);</script>
        <?php

    } else {
        ?>
        <p style="color: green;"> SSM available</p>
        <script>$('#register').prop('disabled',false);</script>
        <?php
    }
}

if(!empty($_POST["email"])) {

    $email = $_POST["email"];

    $result = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
    $count=mysqli_num_rows($result);

    if($count>0) {
        ?>
        <p style="color: red;"> Email already registered .</p>
        <script>$('#register').prop('disabled',true);</script>
        <?php

    } else {
        ?>
        <p style="color: green;"> Email available</p>
        <script>$('#register').prop('disabled',false);</script>
        <?php
    }
}

if(!empty($_POST["username"])) {

    $username = $_POST["username"];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");
    $count=mysqli_num_rows($result);

    if($count>0) {
        ?>
        <p style="color: red;"> Username already taken .</p>
        <script>$('#register').prop('disabled',true);</script>
        <?php

    } else {
        ?>
        <p style="color: green;"> Username available</p>
        <script>$('#register').prop('disabled',false);</script>
        <?php
    }
}





 ?>