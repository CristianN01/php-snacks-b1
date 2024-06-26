
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="get">
        <div>
            <label for="">Name</label>
            <input type="text" name='name' id='name'> 
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name='email' id='email'> 
        </div>
        <div>
            <label for="">Age</label>
            <input type="text" name='age' id='age'> 
        </div>
        <button type="submit">INVIA</button>
    </form>
    
</body>
</html>

<?php
$name = $_GET['name'];



if (str_contains($name,'@','.')) {
    echo "Accesso riuscito";
} else 
    "Accesso negato"


?>