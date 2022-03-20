<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primer saitama</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
<div class="container-header">
<?php include 'logo.php'; 
include 'menu.php'?> 
</div>
<div class= "base">
<div class="about_me">
    <h1> <?php echo $title?> </h1>
</div>
<div class= "data">
<div class="kaptNHka">
    <?php  echo '<img src="img/PHP-logo.svg">'; ?>   
</div>
<div class="full_name">
    <P> меня зовут
        <?php echo $name, ' ', $surname . '<br>' ;
        echo 'город', ' ', $city . '<br>';
        echo 'мне ', $age, 'года';
        echo '<br>';
        ?>

        </p>
        
        <p> Мы научились создавать и выводить переменные </p>
        <p>Изучили простые операции с ними</p>
</div>
</div>


<div class= "knowledge">
<?php include 'knowledge.php'; ?>
<?php echo $text, ' ', $int, ' ', $symb; ?> <br>

<?php
$a= 67;
$b= 84;
$c= $a + $b;
echo $c;
?> <br>
<?php echo $f;
?>
</div>
<div class="article">
     <p class="text">
     пх'нглуи мглв'нафх ктулху р'льех вгах'нагл фхтагн <br>
     пх'нглуи мглв'нафх ктулху р'льех вгах'нагл фхтагн

    </p>
</div>
</div>

<?php include 'footer.php' ?>




        
</div>
</body>
</html>