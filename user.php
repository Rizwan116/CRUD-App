<?php 
    include 'connect.php';


    if(isset($_POST['submit'])) {
        $productname = $_POST['productname'];
        $catno = $_POST['catno'];
        $casno = $_POST['casno'];
        $molf = $_POST['molf'];
        $molwt = $_POST['molwt'];

        $sql = "INSERT INTO `crud` (productname, catno, casno, molf, molwt) VALUES ('$productname', '$catno', '$casno', '$molf', '$molwt')";
        $result = mysqli_query($con, $sql);

        if($result) {
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

    <title>User Operation</title>
  </head>
  <body>

        <div class="container my-5">
        <form method="post" action="" >
                <div class="mb-3 form-group">
                    <label for="productname" class="form-label">Product Name</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" name="productname" autocomplete="off">  
                </div>


                <div class="mb-3 form-group">
                    <label for="catno" class="form-label">CAT No</label>
                    <input type="text" class="form-control" placeholder="Enter CAT No" name="catno" autocomplete="off">  
                </div>


                <div class="mb-3 form-group">
                    <label for="casno" class="form-label">CAS No</label>
                    <input type="text" class="form-control" placeholder="Enter CAS No" name="casno" autocomplete="off">  
                </div>

                <div class="mb-3 form-group">
                    <label for="molf" class="form-label">Mol F</label>
                    <input type="text" class="form-control" placeholder="Enter Mol F" name="molf" autocomplete="off">  
                </div>

                <div class="mb-3 form-group">
                    <label for="molwt" class="form-label">Mol WT</label>
                    <input type="text" class="form-control" placeholder="Enter Mol WT" name="molwt" autocomplete="off">  
                </div>  

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
        </div>

    
  </body>
</html>



