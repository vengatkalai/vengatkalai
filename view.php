<!-- image view from data base table -->

<?php 
$conn=new mysqli('localhost','root','','project');

$id = $_GET['id'];

$sql = "SELECT `doc` FROM `table` WHERE id=$id";
$result = mysqli_query($conn, $sql);

if ($count = mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $image = $row['doc'];
    $file = ''.$image;

    echo '<img src="'.$file.'" alt="file" />';
} else {
    echo 'Image not found'; 
} 

mysqli_close($conn);
?>