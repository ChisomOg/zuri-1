<?php
if(isset($_POST['submit'])){
    $email = $_POST('email');
    $password = $_POST('password');

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $file = fopen('users.csv', 'r');

    if($file) {
        while($row = fgetcsv($file)){
            if($row[1] == $email && $row[2] == $password) {
                $_SESSION['email'] = $row['email'];
                header("Location: ../dashboard.php");


            } elseif($row[1] == $email && $row[2] != $password){

                exit();
            } else {
                    exit();
            }
        }
    } 

}

echo "HANDLE THIS PAGE";

