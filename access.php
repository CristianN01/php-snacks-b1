
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {
        echo 'Errore';
    } else if (strlen($_GET['name']) <= 3) {
        echo 'Accesso negato';
    } else if (!str_contains($_GET['email'], '@') || !str_contains($_GET['email'], '.')) {   
        echo 'Accesso negato';
    } else if (!is_numeric($_GET['age'])) {
        echo 'Accesso negato';
    } else {
        echo 'Accesso consentito';
    }

?>
    <form action="./access.php" method="GET">
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

