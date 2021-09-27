<?php    
include_once 'db.php';

{   
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $state = $_POST['state'];
    $sql = "INSERT INTO user (name,dob,address,zip,state) VALUES ('$name','$dob','$address', '$zip', '$state')";
    

    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>