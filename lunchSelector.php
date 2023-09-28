<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Input Project</title>
    </head>
<body>
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
        $sql= "SELECT choice FROM lunch WHERE todaysdate = CAST( CURRENT_TIMESTAMP() AS Date ) ORDER BY RAND() LIMIT 1";
        $result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
            ?> 
        <h1 id=><?php echo $row['choice']?>
        <?php
        }
    ?>
</body>