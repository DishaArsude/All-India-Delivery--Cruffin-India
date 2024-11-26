<?php

$con = mysqli_connect("localhost","root","","cruffin");

if(!$con)
{
    die("connection failed:".mysql_connect_error());

}

$sql="SELECT * FROM cruff";
$result  = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result))
{
    echo "<p>".$row["NAME"].":".$row["EMAIL"]."</p>";
}

echo "<form action = 'sub.php' method = 'post'>";
echo "NAME: <input type='text' name='NAME'><br><br><br>";
echo "EMAIL: <input type='text' name='EMAIL'><br><br><br>";
echo "<input type ='submit' value='SUBMIT'>";
echo "</form>";

mysqli_close($con);
?>