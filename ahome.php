<?php 
session_start();
ob_start();

include 'db.php';
if(!isset($_SESSION['AID'])){
    header("location:admin.php");
}

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
                 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
                <link rel="stylesheet" href="style.css">
    <title>ACSASS</title>
    <link rel="shortcut icon" href="images\logoo.png" type="image/x-icon">
    <style>
        body{ 
        background-image: url(images/1234.jpg) ;
        background-repeat: no-repeat;
        background-size: 1520px 740px;
        background-attachment: fixed;
         } 

  .label_txt{ 
font-size: 16px; 
   }  
   .label_txt1{ 
    font-size: 22px; 
    font-weight: 600;
       }  
   .form-control{
    border-radius: 25px ;
    width: 70%;
  }
   .signup_form{ 
    margin-left: 20%;
    margin-right: 20%;
    margin-top: 25px;
    margin-bottom: 25px;
    background: rgb(189, 185, 185);
  padding-left: 25px; 
   padding-right: 25px; 
      padding-bottom:5px; 
     box-shadow: 0px 1px 36px 5px rgba(0,0,0,0.20);
     border-radius: 15px;
    }
    .form-control-s{
      border-radius: 25px ;
      width: 30%;
      text-decoration: none;

    }
    #btn{
      margin-left: 91%;
      margin-bottom:30px;
      /* margin-top: 1%; */
      /* width:50; */
      /* margin-right:20px: */
    }
    .button{
        width:10px;
     border-radius: 25px ;

    }
    .bts button{
        width:70px;
        font-size: 14px; 
        border-radius: 10px ;
        background: red;

    }
    #example_wrapper{
        background: #fcf7e5;
        padding:5px;
        /* opacity: 80%; */
        border-radius: 10px ;
    }
    .col-sm-12{
        overflow-x:auto;
    }
    .form-select-sm{
        width:20px;

    }

    </style>
</head>
<body>

<div class="logout">
                    
                    <!-- <h1>ADMIN USER &nbsp;
                        echo $_SESSION['ANAME'];?>
                    </h1> -->
                  
                </div>
                <section class="container-xl">
                <h1 class="m-0 text-center color text-white">ACMS</h1>
                   <button type="button" id="btn" class="btn-log btn-outline-warning"> <a href="logout.php"><img src="images/logout.svg" width="35"></a></button>
                    
    <!-- <div class="bg-info">
    <div class="container">
        <div class="row justify-contant-center"> -->

        <table class="table table-hover table-warning table-bordered" id="example"  style="width:100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Name</th>
                <th>Course</th>
                <th>Subject</th>
                <th>Reference Style</th>
                <th>University</th>
                <th>Project Type</th>
                <th>Deadline</th>
                <th>Documents</th>
                <th>Remarks</th>
                <th>Assign</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody class="bts">
            <?php
            include "db.php";
            $sql = "SELECT * FROM `table`";
            $result = $db->query($sql);
            while($row=$result->fetch_assoc()){
                
                    echo "<tr>
                    <td>DIR$row[id]</td>
                    <td>$row[date]</td>
                    <td>$row[name]</td>
                    <td>$row[course]</td>
                    <td>$row[subject]</td>
                    <td>$row[reference]</td>
                    <td>$row[university]</td>
                    <td>$row[type]</td>
                    <td>$row[deadline]</td>
                    <td><a style=color:blue; target='_blank'
                    href='view.php?id=$row[id]'>view</a><br><a style=color:blue; target='_blank'
                    href='download.php?id=$row[id]'>dowload</a></td>
                    <td>$row[other]</td>
                    <td>$row[amend]</td>
                    <td>
                    <button style=background:green;>
                    <a style=color:white;
                    href='edit.php?id=$row[id]'>Edit</a></button><br>
                    <button><a style=color:white;
                    href='delete.php?id=$row[id]'>Delete</a></td></button>
                    </tr>";
            
                }
            
            ?>
          
        </tbody>
    </table>
    </section>
    <script type="text/javascript">
        
        $(document).ready(function() {
            $('table').dataTable();
            $(".uploadDoc").click(function () {

            var DataType = $(this).data("type");
            var DataId = $(this).data("id");

            $("#popLabel").html(DataType + " Upload");
            $("#datatype").val(DataType);
            $("#uploadPop").modal("show");
            });

            $(".btn2").click(function (){
            var DataType = $(this).data("type");
            var DataId = $(this).data("id");


});
            
        });


    </script>
    
</body>
</html>