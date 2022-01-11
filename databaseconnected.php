<html>
	<body>
		<?php
			echo "Database";
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "test";
			$table = "stud";
			$conn = new mysqli($servername, $username, $password, $db);	
			if ($conn->connect_error) 
			{
  				die("Connection failed: " . $conn->connect_error);
			}
			else
			{
				echo "Connected successfully";


				//$table = "CREATE TABLE stud (id int(3), name varchar(10), marks int(3))";
				//if ($conn -> query($table) === TRUE)
				// {
				// 	echo "Table created successfully";
				// }
				// else
				// {
				// 	echo "Error creating Table".$conn -> error;
				// }


				// $insert = "INSERT INTO stud (id, name, marks) VALUES (1, 'ABC', 30)";
				// $insert = "INSERT INTO stud (id, name, marks) VALUES (2, 'DEF', 40)";
				// $insert = "INSERT INTO stud (id, name, marks) VALUES (3, 'GHI', 20)";
				// $insert = "INSERT INTO stud (id, name, marks) VALUES (4, 'JKL', 50)";
				// $insert = "INSERT INTO stud (id, name, marks) VALUES (5, 'MNO', 30)";
				// $insert = "INSERT INTO stud (id, name, marks) VALUES (6, 'PQR', 90)";
				// if ($conn -> query($insert) === TRUE)
				// {
				// 	echo "Data inserted successfully";
				// }
				// else
				// {
				// 	echo "Data Insertion Failure".$conn -> error;
				// }


				// $update = "UPDATE stud SET id = 105 WHERE id = 5";
				// if ($conn -> query($update) === TRUE)
				// {
				// 	echo "Data Updated successfully";
				// }
				// else
				// {
				// 	echo "Data updatation failure".$conn ->error;
				// }


				// $delete = "DELETE FROM stud WHERE id = 6";
				// if ($conn -> query($delete) === TRUE)
				// {
				//  	echo "Data delete successfully";
				// }
				// else
				// {
				// 	echo "Data deletion failure".$conn ->error;
				// }

				$select = "SELECT * FROM stud"; 
				$result =mysqli_query($conn, $select);  
  				if(mysqli_num_rows($result) > 0)
  				{  
 					while($row = mysqli_fetch_assoc($result))
 					{  
	    				echo "ID :{$row['id']}  <br> ".  
	         				"NAME : {$row['name']} <br> ".  
	         				"MARKS : {$row['marks']} <br> ".  
	         				"--------------------------------<br>";
	         		}  
	         	}
				else 
				{
	  				echo "no matchin record found.";
				}
			}
		?>
	</body>
</html>