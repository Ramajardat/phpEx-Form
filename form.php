<html>

<head>
    <title>Registration Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <!--  Q1 Create a form  with email and password, 
in the action page you will determine if the data is sent by GET or POST  -->
    <h2>Registration Form</h2>

    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="get">
        Username:

        <input type="text" name="username">
        <br> Password:

        <input type="password" name="password">

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" value="Submit" name="btn">

    </form>
    <?php

    echo " <br>";
    $username = $password = "";
    if (isset($_GET["btn"])) {
        $username = valid($_GET["username"]);
        $password = valid($_GET["password"]);
    }
    function valid($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo   "My Name is:" . $username . "<br/>";
    echo  "My Password is:" .  $password;
    ?>

    <?php
    # Q2
    //Make a Calculator that contains Basic Mathematical operations(+,-,*,/)

    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test($_POST["name"]);
        $email = test($_POST["email"]);
        $website = test($_POST["website"]);
        $comment = test($_POST["comment"]);
        $gender = test($_POST["gender"]);
    }

    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>




</body>

</html>