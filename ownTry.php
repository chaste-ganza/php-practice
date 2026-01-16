<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname">
        <select name="class" id="">
            <option value="Year 1 A">
                Year 1A
            </option>
            <option value="Year 1 B">
                Year 1B
            </option>
            <option value="Year 1 C">
                Year 1C
            </option>
        </select>
        <input type="number" name="year">
        <input type="submit">
        <?php
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_REQUEST['fname'];
            $class = $_POST["class"];
            $year = $_POST["year"];
            echo "\nWelcome student, your name is $name, you study in $class and you first attended this school in $year.";
        }

        ?>
    </form>
</body>
</html>