<html>
<head>
    <meta charset="UHF8">
    <title>OOP Progress Check 1</title>
    <?php
    include("index_1.php");
    ?>
</head>
<body>
</body>
</html>
<?php

//$eric = new player('EricCoolKid123');
//
//echo "Eric's Username: " . $eric->get_username();

$characterO = new Offense();
$characterD = new Defense();
$characterT = new Tank;
$characterS = new Support();

$characterD->KDratio =  '1.74';
$characterD->hero = 'Bastion';
echo $characterD->bestHero()."<br/>";
foreach($characterD as $key => $value)
{
    print "$key => $value\n". "<br>";
}
//echo $characterD->describe()."<br/>";


$characterO->KDratio =  '2.21';
$characterO->hero = 'Tracer';
echo $characterO->bestHero()."<br/>";
foreach($characterO as $key => $value)
{
    print "$key => $value\n". "<br>";
}
//echo $characterO->describe()."<br/>";

$characterT->KDratio =  '3.56';
$characterT->hero = 'D.VA';
echo $characterT->bestHero()."<br/>";
foreach($characterT as $key => $value)
{
    print "$key => $value\n". "<br>";
}
//echo $characterT->describe()."<br/>";

$characterS->KDratio =  '1.29';
$characterS->hero = 'Lucio';
echo $characterS->bestHero()."<br/>";
foreach($characterS as $key => $value)
{
    print "$key => $value\n". "<br>";
}
//echo $characterS->describe()."<br/>";


?>