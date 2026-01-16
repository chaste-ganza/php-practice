<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic calculator</title>
    <style>
        body{
            display: flex;
            background-color: #f0f0f0;
            align-items: center;
            justify-content: center;
            align-content: center;
            flex-direction: column;
            height: 97vh;
        }
        .container{
            display: flex;
            width: 100%;
            justify-content: space-evenly;
        }
        .inputs-container{
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .value-input{
            display: flex;
            flex-direction: column;
        }
        .value-input input{
            border-radius: 200px;
            border: 2px green solid;

        }
    </style>
</head>
<body>
    <h1>Welcome to the Quadratic calculator</h1>
    <div class="container">
        <form action="" method="post">
            <div class="inputs-container">
                <div class="value-input">
                    <label for="a">Enter a</label>
                    <input type="number" class="values" name="a" id="a">
                </div>
                <div class="value-input">
                    <label for="b">Enter b</label>
                    <input type="number" class="values" name="b" id="b">
                </div>
                
                <div class="value-input">
                    <label for="c">Enter c</label>
                    <input type="number" class="values" name="c" id="c">
                </div>
            </div>
            
            <input type="submit">
        </form>
    </div>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

function calculate($a,$b, $c) {
    $delta = ($b*$b)-(4*$a*$c);

    if ($delta<0){
        return "Sorry, still trying to figure out how to use negative numbers";
    }

    $x1 = (-$b + sqrt($delta))/(2*$a);
    $x2 = (-$b - sqrt($delta))/(2*$a);
    return [$x1, $x2];

    
}

$result = calculate($a, $b, $c);

echo "x1 = " . $result[0] . " and x2 = " . $result[1];
}



?>

</body>
</html>