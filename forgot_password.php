<?php


$conn = mysqli_connect('localhost:3306', 'root', '', 'travel');

$username_or_email = $_POST["username_or_email"];
$password = $_POST["password"];
$new_password = $_POST["new_password"];


$sql = "SELECT * FROM customer WHERE fname=? OR email=?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username_or_email, $username_or_email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    
    echo "User does not exist.";
} else {
    $row = mysqli_fetch_assoc($result);
    $stored_password = $row["password"];

    if ($stored_password == $password) {

        $sql2 = "UPDATE customer SET password='$new_password' WHERE fname='$username_or_email' OR email='$username_or_email'";
        $result2 = mysqli_query($conn, $sql2);

        if ($result2) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }

    } else {
        echo "Password does not match.";
    }
}

mysqli_close($conn);

?>
