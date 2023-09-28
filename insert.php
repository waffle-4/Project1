<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="mainPage.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Input Project</title>
    </head>
<body>
    <h1 id="pageName">Creto Basic MySQL UI</h1>
    <div id=container>
        <div id=lunchInput>
            <h2 id=lunchTitle>What would you like for lunch?</h2>
            <form action='/PracticePHP/lunchOptions.php' id=lunchForm method="post">
                <label for="choice1">Choice 1: </label><span style="color:red" style="font-size: 9pt;">*</span><input class="inputField" type="text" name="choice1" required><br>
                <label for="choice2">Choice 2: </label><input class="inputField" type="text" name="choice2"><br>
                <label for="choice3">Choice 3: </label><input class="inputField" type="text" name="choice3"><br>
                <label for="choice4">Choice 4: </label><input class="inputField" type="text" name="choice4"><br>
                <span style="color:red" style="font-size: 9pt;">*</span><span style="font-size: 8pt;">fields are required</span><br><br>
                <input type ="submit" value="Add Entry"><br>
            </form><br><br>
            <span>Click the button 'Choose Lunch' to randomly choose lunch based on today's lunch table</span>
            <form action='/PracticePHP/lunchSelector.php' id=lunchRandomizer>
            <input type="submit" value="Choose Lunch">
        </form>
        </div>
        <div id="userInput">
            <h2 id=userTitle>New User Registration</h2>
            <form action="createUser.php" method="post" id="createUser">
                <label for="fname">First Name:</label><span style="color:red" style="font-size: 9pt;">*</span><input class="inputField" type="text" name="fname" required><br>
                <label for="lname">Last Name:</label><span style="color:red" style="font-size: 9pt;">*</span><input class="inputField" type="text" name="lname" required><br>
                <label for="emailaddress">Email Address:</label><span style="color:red" style="font-size: 9pt;">*</span><input class="inputField" type="text" name="emailaddress"><br>
                <label for="pronouns">Pronouns:</label><select class="inputField" name="pronouns">
                    <option value="He/Him">He/Him</option>
                    <option value="She/Her">She/Her</option>
                    <option value="They/Them">They/Them</option>
                    <option value="Other">Other</option>
                    <option selected value="Prefer Not to Answer">Prefer Not to Answer</option>
                </select><br>
                <label for="province">Province:</label><input class="inputField" type="text" name="province"><br>
                <label for="city">City:</label><input class="inputField" type="text" name="city"><br>
                <label for="jobtitle">Job Title:</label><input class="inputField" type="text" name="jobtitle"><br>
                <input type ="submit"><br>
                <span style="color:red" style="font-size: 9pt;">*</span><span style="font-size: 8pt;">fields are required</span><br>
            </form>
        </div>
    </div>
    <div id="displayRows">
        <table id=userData>
    </div>
    <div>
        <div id="lunchContainer">

        </div>
    </div>
</body>

