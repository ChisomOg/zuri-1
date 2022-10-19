<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    
    // echo "OKAY";

    $data = [$username, $email, $password];
    $file = fopen('users.csv', 'ra+');
    while ($row = fgetcsv($file)){
        if($row[1] == $email) {
            echo "already exists";
            exit();
        }
    } 

    fputcsv($file, $data);

    fclose($file);
}
echo "HANDLE THIS PAGE";


