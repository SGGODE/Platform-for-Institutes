<?php
include("database.php");

if(isset($_POST['importSubmit'])){
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            fgetcsv($csvFile);
            while(($line = fgetcsv($csvFile)) !== FALSE){
                $id   = $line[0];
                $fullName  = $line[1];
                $gender  = $line[2];
                $email = $line[3];
                $mobile = $line[4];
                $address = $line[5];
                $city = $line[6];
                $state = $line[7];
                $prevQuery = "SELECT id FROM students WHERE email = '".$line[3]."'";
                $prevResult = $conn->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    $conn->query("UPDATE students SET id = '".$id."', fullName = '".$fullName."', gender = '".$gender."', mobile = '".$mobile."', address = '".$address."', city = '".$city."', state = '".$state."', WHERE email = '".$email."'");
                     $to = "$email";
                     $subject = "My subject";
                     $txt = "Hi,$fullName Your Data Updated is Successful.";
                     $headers = "From: OneSmarter.com" . "\r\n" .
                     "CC: somebodyelse@example.com";
                     mail($to,$subject,$txt,$headers);
                }else{
                    $conn->query("INSERT INTO students (id, fullName, gender, email, mobile, address,city,state) VALUES ('".$id."', '".$fullName."', '".$gender."','".$email."','".$mobile."','".$address."','".$city."','".$state."')");
                     $to = "$email";
                     $subject = "My subject";
                     $txt = "Hi,$fullName Your Registraion is Successful.";
                     $headers = "From: OneSmarter.com" . "\r\n" .
                     "CC: somebodyelse@example.com";
                     mail($to,$subject,$txt,$headers);
                }
            }
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}
header("Location: student_board.php".$qstring);