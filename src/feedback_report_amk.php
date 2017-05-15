<script>
function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (25+o.scrollHeight)+"px";
}
</script>
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

	$total = ( $_POST["as1_1"] + $_POST["as1_2"] + $_POST["as1_3"] +  $_POST["as2_1"] + $_POST["as2_2"] + $_POST["as2_3"] + $_POST["as2_4"] + $_POST["as3_1"] + $_POST["as3_2"] + $_POST["as3_3"] + $_POST["as4_1"] + $_POST["as4_2"] + $_POST["as4_3"] + $_POST["as5_1"] + $_POST["as5_2"] + $_POST["as5_3"]) / 16;

	$sentences_on_first = get_sentence($_POST["as1_1"], $criteria, 0);
	$sentences_on_first .= " ";
	$sentences_on_first .= get_sentence($_POST["as1_2"], $criteria, 1);
	$sentences_on_first .= " ";
	$sentences_on_first .= get_sentence($_POST["as1_3"], $criteria, 2);

	$sentences_on_second = get_sentence($_POST["as2_1"], $criteria, 3);
	$sentences_on_second .= " ";
	$sentences_on_second .= get_sentence($_POST["as2_2"], $criteria, 4);
	$sentences_on_second .= " ";
	$sentences_on_second .= get_sentence($_POST["as2_3"], $criteria, 5);
	$sentences_on_second .= " ";
	$sentences_on_second .= get_sentence($_POST["as2_4"], $criteria, 6);

	$sentences_on_third = get_sentence($_POST["as3_1"], $criteria, 7);
	$sentences_on_third .= " ";
	$sentences_on_third .= get_sentence($_POST["as3_2"], $criteria, 8);
	$sentences_on_third .= " ";
	$sentences_on_third .= get_sentence($_POST["as3_3"], $criteria, 9);

	$sentences_on_fourth = get_sentence($_POST["as4_1"], $criteria, 10);
	$sentences_on_fourth .= " ";
	$sentences_on_fourth .= get_sentence($_POST["as4_2"], $criteria, 11);
	$sentences_on_fourth .= " ";
	$sentences_on_fourth .= get_sentence($_POST["as4_3"], $criteria, 12); 

	$sentences_on_fifth = get_sentence($_POST["as5_1"], $criteria, 13);
	$sentences_on_fifth .= " ";
	$sentences_on_fifth .= get_sentence($_POST["as5_2"], $criteria, 14);
	$sentences_on_fifth .= " ";
	$sentences_on_fifth .= get_sentence($_POST["as5_3"], $criteria, 15); 
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

if($_GET['eng'] == "eng") { echo "<h1> Total average grade: <b> " . $total . "</b> <h1>"; } else { echo "<h1> Yhteensä keskiarvo: <b> " . $total . "</b> </h1>"; } 

if($_GET['eng'] == "eng") { echo "<h2>" . $topics[0] . " (weighted grade) : " . $as1 . "</h2>"; } else { echo "<h2>" . $topics[0] . " (painotettu arvosana) : " . $as1 . "</h2>"; } 
?>

<textarea onmouseover="textAreaAdjust(this)" rows="6" cols="50" name="comments" style="width:100%;"><?php echo $sentences_on_first ?></textarea>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[1] . " (weighted grade) : " . $as2 . "</h2>"; } else { echo "<h2>" . $topics[1] . " (painotettu arvosana): " . $as2 . "</h2>"; } ?>

<textarea onmouseover="textAreaAdjust(this)" rows="6" cols="50" name="comments" style="width:100%;"><?php echo $sentences_on_second ?> </textarea>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[2] . " (weighted grade) : " . $as3 . "</h2>"; } else { echo "<h2>" . $topics[2] . " (painotettu arvosana): " . $as3 . "</h2>"; } ?>

<textarea onmouseover="textAreaAdjust(this)" rows="6" cols="50" name="comments" style="width:100%;"><?php echo $sentences_on_third ?> </textarea>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[3] . " (weighted grade) : " . $as4 . "</h2>"; } else { echo "<h2>" . $topics[3] . " (painotettu arvosana): " . $as4 . "</h2>"; } ?>


<textarea onmouseover="textAreaAdjust(this)" rows="6" cols="50" name="comments" style="width:100%;"><?php echo $sentences_on_fourth ?> </textarea>

<?php if($_GET['eng'] == "eng") { echo "<h2>" . $topics[0] . " (weighted grade) : " . $as5 . "</h2>"; } else { echo "<h2>" . $topics[4] . " (painotettu arvosana): " . $as5 . "</h2>"; } ?>


<textarea onmouseover="textAreaAdjust(this)" rows="6" cols="50" name="comments" style="width:100%;"><?php echo $sentences_on_fifth ?> </textarea>

<?php

if(isset($_POST["comments"])) {  
	if($_GET['eng'] == "eng") {
		echo "<h2>Comments</h2><textarea rows='6' cols='50' name='comments' style='width:100%;'>";
	} else {		
		echo "<br><h2>Vapaat kommentit</h2><textarea onmouseover='textAreaAdjust(this)' rows='6' cols='50' name='comments' style='width:100%;''>";
	}
	//htmlspecialchars($_POST["comments"]);
	echo $_POST["comments"]; 
	echo "</textarea>";
}
?>

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