<?php
 include("../connection.php");
if (isset($_GET['str'])) {
    # code...

 $str =$_GET['str'];
 $sql="SELECT
 d.iddonation,
 d.donationN,
 u.id AS userId,
 u.name AS userName,
 u.gender AS userGender,
 o.idorphan,
 o.nameorphan,
 o.age AS orphanAge,
 o.gender AS orphanGender,
 o.amount,
 d.donationM,
 o.description,
 o.locationID
 FROM
 donation d
 JOIN user u ON d.userId = u.id
 JOIN addorphan o ON d.orphanId = o.idorphan
WHERE  u.name LIKE '$str%'"
 ;

 $result=mysqli_query($conn,$sql);
 while ($row=mysqli_fetch_array($result)) {
     # code...
     echo "<tr>";
     echo "<td>".$row['userName']."</td>";  
     echo "<td>".$row['nameorphan']."</td>";
     echo "<td>".$row['donationN']."</td>";
     echo "<td>".$row['donationM']."</td>";
     echo "</tr>";
 }  

}else {
    echo "44";
}
?>