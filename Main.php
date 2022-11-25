<?php
include_once 'dbconfig.php';
session_start();
if(!isset($_SESSION['username'])){
   die("Please login");
   header("Location:index.php");
}
                       

// fetch files
$sql = "select * from notice_list order by id desc";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Notice | Madhyamgram High School </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/datatable.css" type="text/css" />
    
    <style>
        body { 
        background: -webkit-gradient(linear, left top, left bottom, from(#75f0e1), to(#98fa9c)) fixed; 
    }
    
    a{
        color:black;
    }
    </style>
</head>
<body>
<br/>
<div class="container">
    <div class="row">
        <div class="col-sm-7 col-xs-offset-2 well">
        <form action="/Upload/Up.php" method="post" enctype="multipart/form-data">
            <legend>Upload a Notice:</legend>
            <div class="input-group">
               
  <div class="input-group-prepend">
    <span class="input-group-text" >Title of the Notice: </span>
  </div> 
  <input type="text" class="form-control" name="title" required />
</div>
            <br/>
                    <div class="form-group">
                <input type="file" name="file1" required />
            </div>
            <div class="form-check">
    <input type="checkbox" data-toggle="toggle" checked name="new" value="Yes"/> Mark New? &emsp; &emsp;&emsp;
    <input type="submit" name="submit" value="Upload" class="btn btn-success"/> &emsp; &emsp;
    <input type="button" onclick="window.location.href = 'logout.php';" value="Log Out" class="btn btn-danger" />
  </div>

            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success')
                        echo "File Uploaded Successfully!";
                      else if ($_GET['st'] == 'delete')
                        echo "File Deleted Successfully!";
                     else if ($_GET['st'] == 'new')
                        echo "New Tag Removed!";
                    else
                        echo 'Invalid File Extension!';
                ?>
                </div>
            <?php } ?>
        </form>
        </div>
    </div>
    <br/>
    <div class="row mb-3 mt-3">
            <table class="table table-striped table-hover mytable" style="width:100%" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Delete</th>
                        <th> Remove New</th>
                    </tr>
                </thead>
                <tbody>
       <?php
        $i = 1;
         while($row = mysqli_fetch_array($result)) { 
            
             ?>

         <tr>
            <td><?php echo $i++; ?></td>

            <td><a href="uploads/<?php echo $row['filename']; ?>" download><?php echo $row['title']; ?></a><?php if ($row['new']=='0') echo "<img src='img/new1.gif' width=60px height=35px>" ?></td>
            <td> <button type="button" onclick="location.href = 'del.php?id=<?php echo $row['id']; ?>'" class="btn btn-danger"> Delete </button> </td>
            <td> <button type="button" onclick="location.href = 'removenew.php?id=<?php echo $row['id']; ?>'" class="btn btn-info"> Remove </a> </td>
            
            </tr>
                <?php } ?>
                </tbody>
            </table>
    </div>
</div>
<script src="js/boot4.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.js"></script>
<script src="js/datatablejq.js"></script>
<script src="js/datatableboot.js"></script>
<script>
    $(document).ready(function(){  
      $('.mytable').DataTable();  
 });  
    
</script>
</body>
</html>