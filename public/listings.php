<?php
include '../includes/functions.php';

$projects = [
    [
        'project' => 'Item 1',
        'preview' => 'images/project1.png'
    ],
    [
        'project' => 'Item 2',
        'preview' => 'images/project2.png'
    ],
    [
        'project' => 'Item 3',
        'preview' => 'images/project3.png'
    ],
    [
        'project' => 'Item 4',
        'preview' => 'images/project4.png'
    ],
    [
        'project' => 'Item 5',
        'preview' => 'images/project5.png'
    ],
    [
        'project' => 'Item 6',
        'preview' => 'images/project6.png'
    ]
];

?>
<html>
    <head>
    <title>Listings Page</title>
    <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <?php include '../includes/partials/navigation.php';?>
        <h1>Listing</h1>
        <?php
            //for each item listed in the array, can call individual keys as $items
            foreach($projects as $item){
                //Echo all images and titles onto the page
                echo $item['project'];
                echo '<img src="' . $item['preview'] . '"/>';
            }
        ?>
    </body>
</html>