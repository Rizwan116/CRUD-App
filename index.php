<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a class="text-light" href="user.php">Add User</a>
        </button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Product Name</th>
      <th scope="col">CAT No. </th>
      <th scope="col">CAS. No.</th>
      <th scope="col">Mol. F.</th>
      <th scope="col">Mol. Wt.</th>
      <th scope="col">Oprerations</th>
    </tr>
  </thead>
  <tbody>

    <?php 
            $sql="Select * from `crud`";
            $result=mysqli_query($con,$sql);

            if($result) {
               
                while($row=mysqli_fetch_assoc($result)) {
                    $id=$row['id'];
                    $productname=$row['productname'];
                    $catno=$row['catno'];
                    $casno=$row['casno'];
                    $molf=$row['molf'];
                    $molwt=$row['molwt'];

                    echo '<tr>
    <th>'.$id.'</th>
      <td>'.$productname.'</td>
      <td>'.$catno.'</td>
      <td>'.$casno.'</td>
      <td>'.$molf.'</td>
      <td>'.$molwt.'</td>
       <td>
        <button class="btn btn-primary">
        <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
        </button>
        <button class="btn btn-danger">
        <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
        </button>
        
    </td>
    </tr>';
                }
            }
    ?>
    
   
   
  </tbody>
</table>
    </div>
</body>
</html>