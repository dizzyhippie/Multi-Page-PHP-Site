<?php
include '../includes/functions.php';

$projects = [
    [
        'project' => 'Trap Complex',
        'p-class' => 'header-style',
        'preview' => 'images/project1.png',
        'i-class' => 'image-style'
    ],
    [
        'project' => 'Neon Dreams',
        'p-class' => 'header-style',
        'preview' => 'images/project2.png',
        'i-class' => 'image-style'
    ],
    [
        'project' => 'Trap Complex',
        'p-class' => 'header-style',
        'preview' => 'images/project3.png',
        'i-class' => 'image-style'
    ],
    [
        'project' => 'Scatter Brained',
        'p-class' => 'header-style',
        'preview' => 'images/project4.png',
        'i-class' => 'image-style'
    ],
    [
        'project' => 'Flipside Posters',
        'p-class' => 'header-style',
        'preview' => 'images/project5.png',
        'i-class' => 'image-style'

    ],
    [
        'project' => 'Login UI',
        'p-class' => 'header-style',
        'preview' => 'images/project6.png',
        'i-class' => 'image-style'
    ],
    [
        'project' => 'Space Cadet',
        'p-class' => 'header-style',
        'preview' => 'images/project7.png',
        'i-class' => 'image-style'
    ]
];

?>
<html>
    <head>
    <title>Listings Page</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/ghs3lib.css">
    </head>
    <body>
        <?php include '../includes/partials/navigation.php';?>
        <h1 class="port-title">My Projects</h1>
        <p class="port-desc">Below are some of my recent projects for clients, check them out and feel free to send me a message on the contact page!</p>
        <section id="gallery">
            <?php
                //for each item listed in the array, can call individual keys as $items
                foreach($projects as $item){
                    //open the parent section
                    echo '<section class="pieces">';
                    //Echo h1 with class name for the title
                    echo '<h1 class="' . $item['p-class'] . '">' . $item['project'] . '</h2>';
                    //Echo img with src and class for the image
                    echo '<img class="' . $item['i-class']  . '"src="' . $item['preview'] . '"/>';
                    //close the parent section
                    echo '</section>';
                }
            ?>
        </section>
        <?php include '../includes/partials/footer.php';?>
    </body>
</html>