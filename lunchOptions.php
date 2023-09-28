<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lunchOptions.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Input Project</title>
    </head>
<body>
    <h1>Insert Lunch Options</h1>
    <div id=lunchRandomphp>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "CURLYfry4444!";
            $dbname = "lunchdb";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
                        
            // Check connection
            if ($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);
            }

            $todaysdate = date('m/d/Y');
            $choice1=$_POST['choice1'];
            $choice2=$_POST['choice2'];
            $choice3=$_POST['choice3'];
            $choice4=$_POST['choice4'];
            $sql = "INSERT INTO `lunch` (choice) VALUES ('$choice1'), ('$choice2') , ('$choice3'), ('$choice4')";
            $message = "".$choice1.", " .$choice2.", " .$choice3.", and" .$choice4." have been inserted into the Lunch Table for ".$todaysdate.".";

            if ($conn->query($sql) === TRUE) {
                echo $message;
            } else{
                    echo "Error: ".$sql."<br>".$conn->errno();
            }
        ?>
    <br><br>
    </div>
    <div id=redirectButton>
        <span>Click here to enter more people's preferences</span><br>
		<form action=/PracticePHP/insert.php>
			<input type="submit" value="Back to Insert">
		</form>
	</div>
