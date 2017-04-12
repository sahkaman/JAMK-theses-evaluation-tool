<?php
if(isset($_GET['eng']) && $_GET['eng'] == 1) { $lang = "eng"; } else { $lang = "fin"; }

include("yamk_criteria.php");
?>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>SahKa feedback generator</title>
</head>

<body>
	<div id="left">
		<?php if($lang == "eng") { echo "<h1><a href='https://studyguide.jamk.fi/globalassets/opinto-opas-yamk/opiskelu/opinnaytetyo/ohjeet-ja-lomakkeet/assessment/assessment-criteria-yamk2014.pdf.pdf' target='_blank'> YAMK -assessment criteria</a> @JAMK</h1>"; } else { echo "<h1><a href='http://opinto-oppaat.jamk.fi/globalassets/opinto-opas-yamk/opiskelu/opinnaytetyo/ohjeet-ja-lomakkeet/arviointi/opinnaytetyon-arviointikriteerit-yamk2014.pdf' target='_blank'> YAMK -arviointikriteerit</a> @JAMK</h1>"; } ?>
		<a href="feedback_generator.php?eng=1">In English</a>
		&nbsp&nbsp&nbsp&nbsp<a href="feedback_generator.php?eng=0">Suomeksi</a>
		&nbsp&nbsp&nbsp&nbsp<a href="feedback_generator_amk.php">AMK</a>
		&nbsp&nbsp&nbsp&nbsp
		<?php 
			if($lang == "eng") { 
				echo "</a>This tool is <a href='https://github.com/sahkaman/JAMK-theses-evaluation-tool' target='_blank'>programmed</a> by </a><a href='https://fi.linkedin.com/in/karo-saharinen-1842b07' target='_blank'>Karo Saharinen</a>"; 
			} 
			else { 
				echo "Sivuston <a href='https://github.com/sahkaman/JAMK-theses-evaluation-tool' target='_blank'>ohjelmoinut</a> <a href='https://fi.linkedin.com/in/karo-saharinen-1842b07' target='_blank'>Karo Saharinen</a>"; 
			} 
		?> 
	</div>

	<div id="right">
		<?php if($lang == "eng") { echo "<img src='jamk_it-instituutti_logo_engl_web_350x150.png'>"; } else { echo "<img src='jamk_it-instituutti_logo_suomi_web_350x150.png'>"; } ?>
	</div>

	<div style="width:100%">

	<form action="feedback_report.php?eng=<?php echo $lang?>" method="post">
	<table border="1" style="table-layout:fixed; width:100%">
	<tr align="center" bgcolor="#58ACFA"> 	<!-- Eka rivi -->
		<td></td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
	</tr>

	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[0];?></td> </tr> 	
	<!-- Toka rivi -->

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[0][0]; ?></td>	 	<!-- Vasen sarake otsikko -->

			<?php echo create_row(0, "as1_1", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[1][0]; ?></td>	 	<!-- Vasen sarake otsikko -->

			<?php echo create_row(1, "as1_2", $criteria);	?>

	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[2][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		
		<?php echo create_row(2, "as1_3", $criteria);	?>

	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[3][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		
		<?php echo create_row(3, "as1_4", $criteria);	?>

	</tr>


	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[1];?></td> </tr> 	<!-- Toka rivi -->


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[4][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		
		<?php echo create_row(4, "as2_1", $criteria);	?>
	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[5][0]; ?></td>	 	<!-- Vasen sarake otsikko -->

		<?php echo create_row(5, "as2_2", $criteria);	?>

	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[6][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(6, "as2_3", $criteria);	?>
	</tr>


	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[2];?></td> </tr> 	<!-- Toka rivi -->


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[7][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(7, "as3_1", $criteria);	?>

	</tr>
	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[8][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(8, "as3_2", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[9][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(9, "as3_3", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[10][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(10, "as3_4", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[11][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(11, "as3_5", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[12][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(12, "as3_6", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[13][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(13, "as3_7", $criteria);	?>
	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[14][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(14, "as3_8", $criteria);	?>
	</tr>

	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[3];?></td> </tr> 	<!-- Toka rivi -->

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[15][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(15, "as4_1", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[16][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(16, "as4_2", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[17][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(17, "as4_3", $criteria);	?>
	</tr>

	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[4];?></td> </tr> 	<!-- Toka rivi -->

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[18][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(18, "as5_1", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[19][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(19, "as5_2", $criteria);	?>
	</tr>

	<tr>	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[20][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(20, "as5_3", $criteria);	?>
	</tr>

	</table>
		<br>
		<a>
		<?php 
		if($lang == "eng") { 
				echo "<a><b>Comments</b></a>"; 
				$placeholder = "Write your comments here";
			} 
			else { 
				echo "<a><b>Vapaat kommentit</b></a>"; 
				$placeholder = "Kirjoita kommenttisi tähän";
			} 
		?>
		<br>
		<textarea placeholder="<?php echo $placeholder?>"rows="5" cols="50" name="comments" style="width:100%;"></textarea>
		<br>
		<div id="button_holder">
			<button type="submit" value="Submit">Submit</button>
		</div>
		<br>
	</form>
	</div>

</body>
</html>


<?php
function create_row($id, $value, $criteria) {
	$string = ""; 

		for ($x = 1; $x <=6; $x++) {
			$string .= "<td class='tab'>";
			$string .= "<input type='radio' name='" . $value . "' value='" . ($x - 1) . "' id='" . $criteria[$id][$x] . "' required>";
			$string .= "<label for='" . $criteria[$id][$x] . "'>" . $criteria[$id][$x] . "</label>";
			$string .= "</label></td>";
		}
		
return $string;
}


?>
