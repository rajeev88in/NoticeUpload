<?php 
//echo "Coming Soon";
$servername = "localhost";
$username = "u663555798_mnsnhs"; //
$password = "Michaeleng@123";		//You know what it is?
$dbname = "u663555798_mnsnhs"; //

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
//include "dbconfig.php";
?>
<style type="text/css">
  thead .thlink{
    background: #0089ba;
  }
  .thlink{
    font-size: 18px !important;
    text-align: center;
    border:none !important;
    color:#000;
  }
  .tdlink{
    font-size: 18px !important;
    text-align: left;
    border:none !important;
  }
  .link{
    font-size: 19px !important;
    color:#032b09;
     text-align: left;
     /*font-family: "Times New Roman", Times, serif;*/
  }
</style>
<table>
    
  <thead>
    <tr>
      <th class="thlink">#</th>
      <th class="thlink">Title of the Notice</th>
      
    </tr>
  </thead>
  <tbody>
      <?php 
      $sql = "select * from notice_list order by id desc";
        $result = mysqli_query($connect, $sql);
    $i = 1;
      while($row = mysqli_fetch_array($result)) { 
           
             ?>
    <tr>
      <th class="thlink" ><?php echo $i++; ?></th>
      <td class="tdlink"><a class="link" href="/Upload/uploads/<?php echo $row['filename']; ?>" download>
      <?php echo $row['title']; ?> &nbsp;
        <?php if($row['new']=='0') echo "<img src='/media/2021/02/new.gif' width=75px>" ?></td>
    </tr>
    <?php }
    ?>
  </tbody>
</table> 



