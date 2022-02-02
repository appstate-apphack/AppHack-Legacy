<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("apphack", $con);

$sql="INSERT INTO attendees (fname, lname, email, phone)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[phone]')";

if (!mysql_query($sql,$con))
  {
  //die('Error: ' . mysql_error());
  }

$result = @mysql_query("SELECT * FROM attendees",$con);

while( $row = mysql_fetch_array($result) )
        {
              echo( $row["id"]);
              echo("    ");
              echo( $row["fname"]);
              echo("    ");
              echo( $row["lname"]);
              echo("    ");
              echo( $row["email"]);
              echo("     ");
              echo( $row["phone"]);
              echo("<br>");
        }

mysql_close($con);
?>

