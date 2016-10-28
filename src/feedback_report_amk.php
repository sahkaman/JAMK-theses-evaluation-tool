
<?php
if($_GET['eng'] == "eng") { $lang = "eng"; } else { $lang = "fin"; }

include("amk_criteria.php");

	// arvosana 1
	$as1 = ($_POST["as1_1"] + $_POST["as1_2"] + $_POST["as1_3"] ) / 3;
	// arvosana 2
	$as2 = ($_POST["as2_1"] + $_POST["as2_2"] + $_POST["as2_3"] + $_POST["as2_4"]) / 4;
	// arvosana 3
	$as3 = ($_POST["as3_1"] + $_POST["as3_2"] + $_POST["as3_3"] ) / 3;
	// arvosana 4
	$as4 = ($_POST["as4_1"] + $_POST["as4_2"] + $_POST["as4_3"] ) / 3;

	// arvosana 5
	$as5 = ($_POST["as5_1"] + $_POST["as5_2"] + $_POST["as5_3"] ) / 3;


	$total = ( $as1 + $as2 + $as3 + $as4 + $as5 ) / 5;
?>

<html>
<head>
<title>SahKa feedback results</title>
</head>
<body>
<?php if($_GET['eng'] == "eng") { echo "<h1> Results </h1>"; } else { echo "<h1> Tulokset </h1>"; } ?>

<?php 
date_default_timezone_set('EET');

if($_GET['eng'] == "eng") { echo "<a>Results generated at: </a>"; } else { echo "<a>Tulokset laskettu: </a>"; } 

echo "<a>" . date('j\.n\.Y H:i:s') . "</a>";

if($_GET['eng'] == "eng") { echo "<h2>" . $topics[0] . " (weighted grade) : " . $as1 . "</h2>"; } else { echo "<h2>" . $topics[0] . " (painotettu arvosana) : " . $as1 . "</h2>"; } 
?>

<a> <?php echo get_sentence($_POST["as1_1"], $criteria, 0); ?> </a>
<a> <?php echo get_sentence($_POST["as1_2"], $criteria, 1); ?> </a>
<a> <?php echo get_sentence($_POST["as1_3"], $criteria, 2); ?> </a>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[1] . " (weighted grade) : " . $as2 . "</h2>"; } else { echo "<h2>" . $topics[1] . " (painotettu arvosana): " . $as2 . "</h2>"; } ?>

<a> <?php echo get_sentence($_POST["as2_1"], $criteria, 3); ?> </a>
<a> <?php echo get_sentence($_POST["as2_2"], $criteria, 4); ?> </a>
<a> <?php echo get_sentence($_POST["as2_3"], $criteria, 5); ?> </a>
<a> <?php echo get_sentence($_POST["as2_4"], $criteria, 6); ?> </a>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[2] . " (weighted grade) : " . $as3 . "</h2>"; } else { echo "<h2>" . $topics[2] . " (painotettu arvosana): " . $as3 . "</h2>"; } ?>

<a> <?php echo get_sentence($_POST["as3_1"], $criteria, 7); ?> </a>
<a> <?php echo get_sentence($_POST["as3_2"], $criteria, 8); ?> </a>
<a> <?php echo get_sentence($_POST["as3_3"], $criteria, 9); ?> </a>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[3] . " (weighted grade) : " . $as4 . "</h2>"; } else { echo "<h2>" . $topics[3] . " (painotettu arvosana): " . $as4 . "</h2>"; } ?>


<a> <?php echo get_sentence($_POST["as4_1"], $criteria, 10); ?> </a>
<a> <?php echo get_sentence($_POST["as4_2"], $criteria, 11); ?> </a>
<a> <?php echo get_sentence($_POST["as4_3"], $criteria, 12); ?> </a>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[0] . " (weighted grade) : " . $as5 . "</h2>"; } else { echo "<h2>" . $topics[4] . " (painotettu arvosana): " . $as5 . "</h2>"; } ?>


<a> <?php echo get_sentence($_POST["as5_1"], $criteria, 13); ?> </a>
<a> <?php echo get_sentence($_POST["as5_2"], $criteria, 14); ?> </a>
<a> <?php echo get_sentence($_POST["as5_3"], $criteria, 15); ?> </a>

<?php if($_GET['eng'] == "eng") { echo "<h1> Total average grade: <b> " . $total . "</b> <h1>"; } else { echo "<h1> Yhteensä keskiarvo: <b> " . $total . "</b> <h1>"; } ?>

</body>
</html>

<?php
function get_sentence($value, $criteria, $id) {
	if($value == 0) $string = $criteria[$id][1];
	elseif($value == 1) $string = $criteria[$id][2];
	elseif($value == 2) $string = $criteria[$id][3];
	elseif($value == 3) $string = $criteria[$id][4];
	elseif($value == 4) $string = $criteria[$id][5];
	else $string = $criteria[$id][6];
	return $string;
}
?>