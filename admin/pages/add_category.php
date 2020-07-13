<?php
// date_default_timezone_set('Africa/Dar_es_salaam');
include '../../database/config.php';
include '../../includes/uniques.php';   // this is for category ID (auto generated)
$category_id = 'CT-'.get_rand_numbers(6).'';  //this will create random nos
$category_name =   ucwords(mysqli_real_escape_string($conn, $_POST['category'])); // here the category name is fetched from the category.php page into variable
// mysqli_real_escape_string(): escape from special char
// ucwords(): Converts the first letter is upper case
$department_name = ucwords(mysqli_real_escape_string($conn, $_POST['department']));
$date_registered = date('d-m-Y');

$sql = "SELECT * FROM tbl_categories WHERE name = '$category_name' AND department = '$department_name'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    header("location:../categories.php?rp=1185");
    }
} else {

$sql = "INSERT INTO tbl_categories (category_id, name, department, date_registered)
VALUES ('$category_id', '$category_name', '$department_name', '$date_registered')";

if ($conn->query($sql) == TRUE) {
    header("location:../categories.php?Category was Added Successfully!!");
} else {
    header("location:../categories.php?Could Not Added Category!!");
}


}
$conn->close();
?>


