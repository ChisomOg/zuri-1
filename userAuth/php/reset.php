<?php
if(isset($_POST['submit'])){
    $email = $_POST('email');
    $newpassword = $_POST('password');

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    //open file and check if the username exist inside
    //if it does, replace the password

    $file = fopen('users.csv', 'r+');
    while($row = fgetcsv($file)){
        if($row[1] == $email){
            $data = [$newpassword];
        }
    }
    
    fputcsv($file, $data);

    fclose($file);
    
}
echo "HANDLE THIS PAGE";


