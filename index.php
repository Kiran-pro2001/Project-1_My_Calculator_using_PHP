<?php

$result = "No Result";

if(isset($_GET["exp"]))
{
    // echo "yes";
    $exp = $_GET["exp"];

    $result = eval("return $exp;");
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Calculator</title>    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;
        }
        body{
            display: grid;
            place-content: center;
            height: 100vh;
            background-color: black;
           
        }
        .container{
            box-shadow: inset 0 0 5px 2px blue;
            padding: 1rem 2rem;
            min-width: 350px;
            background-color: yellowgreen;
            border-radius: 30px;
        }
        img{
            display: block;
            max-width: 200px;
            margin: 1rem auto;
            margin-bottom: 1rem;
        }
        input{
            display: block;
            width: 100%;
            padding: 0.4rem 1rem;
            font-size: 1.4rem;
            border-color: blue;
            text-align: center;
            border-radius: 5px;
            outline: none;

        }
        input:focus{
            outline: none;
        }
        button{
            display: block;
            margin: 1rem auto;
            background-color: blue;
            color: white;
            padding: 0.8rem 1.4rem;
            border-radius: 1.2rem;
            font-size: 2rem;
            border: none;
            cursor: pointer;
        }
        .result{
            border: 1px solid blue;
            min-height: 100px;
            display: grid;
            place-content: center;
            /* text-align: center; */
            border-radius: 8px;


        }
        p{
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="assets/image.png" alt="">
        <form action="" method="get">
            <input type="text" name="exp" placeholder="Enter the Math Expression ">
            <button>Calculate</button>
        </form>
        <h2>OUTPUT</h2>
        <div class="result">
            <h1>
                <!-- short hand PHP-->
                <?=$result?>    
            </h1>
           
        </div>
        <p style="text-align: center;"  >Developed By Er. Kiran Kumar</p>
    </div>
</body>
</html>