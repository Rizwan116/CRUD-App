<?php 
    include 'connect.php';
    $id=$_GET['updateid'];

    $sql="Select * from `crud` where id=$id";
    $result= mysqli_query($con,$sql);

    $row= mysqli_fetch_assoc($result);


    $productname=$row['productname'];
    $catno=$row['catno'];
    $casno=$row['casno'];
    $molf=$row['molf'];
    $molwt=$row['molwt'];

    if(isset($_POST['submit'])) {
        $productname = $_POST['productname'];
        $catno = $_POST['catno'];
        $casno = $_POST['casno'];
        $molf = $_POST['molf'];
        $molwt = $_POST['molwt'];

        // $sql = "update `crud` set id=$id,productname='$productname',catno='$catno,casno='$casno,molf='$molf,molwt='$molwt
        // where id=$id";

        $sql = "UPDATE `crud` SET productname='$productname', catno='$catno', casno='$casno', molf='$molf', molwt='$molwt' WHERE id=$id";


        $result = mysqli_query($con, $sql);
        if($result) {
            // echo "update";
            header('location:index.php');
        } else {
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Operation</title>
  </head>
  <body>

        <div class="container my-5">
        <form method="post" action="" >
                <div class="mb-3 form-group">
                    <label for="productname" class="form-label">Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="productname" autocomplete="off" value=<?php
                    echo $productname;
                    ?>>  
                </div>


                <div class="mb-3 form-group">
                    <label for="catno" class="form-label">CAT No</label>
                    <input type="text" class="form-control" placeholder="Enter CAT No" name="catno" autocomplete="off"  value=<?php
                    echo $catno;
                    ?>>  
                </div>


                <div class="mb-3 form-group">
                    <label for="casno" class="form-label">CAS No</label>
                    <input type="text" class="form-control" placeholder="Enter CAS No" name="casno" autocomplete="off"  value=<?php
                    echo $casno;
                    ?>>  
                </div>

                <div class="mb-3 form-group">
                    <label for="molf" class="form-label">Mol F</label>
                    <input type="text" class="form-control" placeholder="Enter Mol F" name="molf" autocomplete="off"  value=<?php
                    echo $molf;
                    ?>>  
                </div>

                <div class="mb-3 form-group">
                    <label for="molwt" class="form-label">Mol WT</label>
                    <input type="text" class="form-control" placeholder="Enter Mol WT" name="molwt" autocomplete="off"  value=<?php
                    echo $molwt;
                    ?>>  
                </div>  

                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </form>
        </div>

    
  </body>
</html>



