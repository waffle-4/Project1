<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mainPage.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Input Project</title>
    </head>
<body>
    <h1 id="pageName">Creto Basic MySQL UI</h1>
    <div id="formResponse">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "CURLYfry4444!";
			$dbname = "testdb";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
		
			// Check connection
			if ($conn->connect_error){
				die("Connection failed: ". $conn->connect_error);
			}
					
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$emailaddress = $_POST['emailaddress'];
			$pronouns = $_POST['pronouns'];
			$province = $_POST['province'];
			$city = $_POST['city'];
			$jobtitle = $_POST['jobtitle'];
		
			$sql = "INSERT INTO Users (fname, lname, emailaddress, pronouns, province, city, jobtitle) VALUES ( '$fname', '$lname', '$emailaddress', '$pronouns', '$province', '$city', '$jobtitle')";
		
			if ($conn->query($sql) === TRUE) {
				echo '<div id= "userAdded";>' ."User ".$fname." ".$lname." Added!" .'</div>';
			} else if ($conn->errorno == 1062){
				echo "That Email Address already exists, please insert a unique one.";
			} else{
					echo "Error: ".$sql."<br>".$conn->errno();
				
			}
			?>
				<table id=userTable>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Pronouns</th>
						<th>Province</th>
						<th>City</th>
						<th>Job Title</th>
			<?php
			$query = "SELECT id, fname, lname, emailaddress, pronouns, province, city, jobtitle FROM Users ORDER BY ID DESC";
			$result = $conn->query($query);
			while($row = $result->fetch_assoc()) {
				?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['fname']?></td>
						<td><?php echo $row['lname']?></td>
						<td><?php echo $row['emailaddress']?></td>
						<td><?php echo $row['pronouns']?></td>
						<td><?php echo $row['province']?></td>
						<td><?php echo $row['city']?></td>
						<td><?php echo $row['jobtitle']?></td>
				<?php
			}
		?>
    </div><br>
	<div id=redirectButton>
		<form action=/PracticePHP/insert.php>
			<span> <input type="submit" value="Main Page">
		</form><br><br>
	</div>
</body>

