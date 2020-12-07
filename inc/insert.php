<?php

$connect = mysqli_connect("localhost", "root", "", "mydatabase");
if ($connect-> connect_error) { /* Checks that we have connected to database, if not then inform user */
    die("Connection Failed:". $connectio-> connect_error);
} else {

    $name=test_input($_POST['name']);

    $email=test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Checks that email number is valid
        echo '<script>alert("Invalid Email Address")</script>';
        echo '<script>window.history.back()</script>';
    }

    $phone=test_input($_POST['phone']);
    if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) { // Checks that phone number is valid
        echo '<script>alert("Invalid Phone Number")</script>';
        echo '<script>window.history.back()</script>';
    }
      

    $subject=test_input($_POST['subject']);
    $message=test_input($_POST['message']);
    if (isset($_POST['check1'])) {
        $tickbox = "true";
    } else {
        $tickbox = "false";
    }
    $length = strlen($phone);

    /*=============================================
     * Data Restrictions Functions
    ==============================================*/

    if ($name == "" || $email == "" || $phone == "" || $subject == "" || $message == "") {
        echo '<script>alert("Please make sure to fill in all text-fields")</script>';
        echo '<script>window.history.back()</script>';
    } else if ($length <= 10) {
        echo '<script>alert("Invalid Phone Number")</script>';
        echo '<script>window.history.back()</script>';
    } else {
    
    /*============================================
    =============================================*/

        /*=============================================
        * Stores the new data into the Database 
        ==============================================*/
        $sql="INSERT INTO email_details(name, email, telephone, subject, message, marketing_info)VALUES('$name','$email','$phone','$subject','$message', '$tickbox')";
        if(mysqli_query($connect,$sql)){
            echo "Record Has Been Inserted!";
        } else {
            echo "Failed To Insert data";
        }
        mysqli_close($connect);
        /*============================================
        =============================================*/
    }
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
?>