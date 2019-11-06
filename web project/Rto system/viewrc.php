<html>
<head>
<style>
  body{
    background-color: cornsilk;
    background: linear-gradient(90deg, blue, pink);
    
  }
  .column {
  float: left;
  width: 100%;
  margin-top: 150px;
    height: 300px;
    background-color: bisque;
    font-family: monospace;
    border-radius: 25px;
    
  </style>
<title>VIEW FOR VEHICLE REGISTRATION  DETAILS</title>
<body>
<div class="row">
  <div class="column">
    
 <?php
  session_start();
  $val=$_POST['vehicle_no'];
  $conn=mysqli_connect("localhost","root","","rto") or die("failed:" . mysqli_connect_error());
  
 $sql2="select * from vehicle_reg where vehicle_reg.tmprno=$val";
      
      $sql=mysqli_query($conn,$sql2);
      if($sql==true){
      echo "<table style='width:100%' >

      <TR style='font-size:30px; color:tomato'>
     
      <TD COLSPAN=10><CENTER><B>RC STATUS<hr></td>
      <tr style='font-size:20px; color: teal'><td>Owner's Name<hr></td>
  <td>House Name<hr></td><td>Dealer<hr></td><td>Manufacture<hr></td><td>Colour<hr></td><td>Finance<hr    <></td></tr>";
      while ($row1 = mysqli_fetch_array($sql))
  {
    echo "<tr><td>".$row1['oname']."</td><td>".$row1['hname']."</td><td>".$row1['dname']."</td><td>".$row1['place']."</td><td>".$row1['manufacture']."</td><td>".$row1['finance']."</td></tr>";;
  }
  echo "</table>";
 }
  else{
   echo ("Invalid register number");
  }
?>
</div>
</body>
</html>