<?php 
$conn=new mysqli('localhost','root','','project');

$id = $_GET['id'];
$sql = "SELECT `doc` FROM `table` WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $pdf = $row['doc'];
    $file = '' . $pdf;

    if (headers_sent()) {
        echo 'HTTP header already sent';
    } else {
        ob_end_clean();
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $pdf . '"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
} else {
    echo 'File not found';
}

mysqli_close($conn);
?>