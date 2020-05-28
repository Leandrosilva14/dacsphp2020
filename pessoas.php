<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <table>
        <?php
            $con = mysqli_connect("localhost","bob","bob","integrantes_casa");
            $sql = "select * from pessoas";
		    $result = mysqli_query($con,$sql);
		    while($row = $result->fetch_row()){
		       echo "<tr>";
		   	   	  echo "<td>" . $row[0] . "</td>";
		   	   	  echo "<td>" . $row[1] . "</td>";
		   	   	  echo "<td>" . $row[2] . "</td>";
		   	   echo "</tr>";
		    }
        ?>
        </table>
    </body>
</html>