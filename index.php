<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function sayHello40times() {
            for($i = 0; $i != 41; $i++){
                echo "$i: Hello, World!\n</br>";
            }
        }

        sayHello40times();
        sayHello40times();  
        sayHello40times();      

    ?>
</body>
</html>