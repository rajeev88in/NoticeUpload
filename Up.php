<?php
//check if form is submitted
include_once 'dbconfig.php';
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];
    $title = $_POST['title'];
    if(!empty($_POST['new']))
        $new = 0;
    else $new = 1;
    //$status = 0;
    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($conn, $sql);
            if (count($result) > 0)
                $row = mysqli_fetch_array($result);
            
            //set target directory
            $path = 'uploads/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO notice_list(filename, title, created, new) VALUES('$filename', '$title','$created','$new')";
            mysqli_query($conn, $sql);
            header("Location: Main.php?st=success");
        }
        else
        {
            header("Location: Main.php?st=error");
        }
    }
    else
        header("Location: Main.php");
}
?>