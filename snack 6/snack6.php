<?php
 


$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
 
$grey = 'grey-square';  
$green = 'green-square';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <p class=" <?php echo $grey ?> " >
        <?php foreach ($db['teachers'] as $teacher) { ?>
            <?php echo $teacher['name'] . ' ' . $teacher['lastname'].','; ?>
         <?php } ?>
    </p>

    <p class=" <?php echo $green ?> " >
        <?php foreach ($db['pm'] as $pm) { ?>
            <?php echo $pm['name'] . ' ' . $pm['lastname'].','; ?>
        <?php } ?>
    </p>
    
</body>
</html>


