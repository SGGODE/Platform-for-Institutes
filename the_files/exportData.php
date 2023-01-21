<?php 
include("database.php"); 
$query = $conn->query("SELECT * FROM students ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
    $f = fopen('php://memory', 'w'); 
    $fields = array('id', 'fullName', 'gender', 'email', 'mobile', 'address', 'city', 'state'); 
    fputcsv($f, $fields, $delimiter); 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['id'], $row['fullName'], $row['gender'], $row['email'], $row['mobile'], $row['address'], $row['city'],$row['state'], $status); 
        fputcsv($f, $lineData, $delimiter); 
    }
    fseek($f, 0); 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
    fpassthru($f); 
} 
exit; 
 
?>