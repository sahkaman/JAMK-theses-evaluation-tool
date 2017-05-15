<?php
if(isset($_GET['eng']) && $_GET['eng'] == 1) { $lang = "eng"; } else { $lang = "fin"; }

include("amk_criteria.php");
?>


<html>
<head>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="floating-1.12.js"></script>  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>SahKa feedback generator</title>
</head>

<body>

    <div id="floatdiv" style="  
        position:absolute;  
        width:200px;height:50px;top:10px;right:10px;  
        padding:16px;background:#747679;
        color: white;
        border:0px solid #2266AA;  
        z-index:100; font-size: 150%; text-align: center">  
    <b>Average Grade</b>
    <br><br>
    <a id="average"></a>
    </div>  
      
    <script type="text/javascript">  
        floatingMenu.add('floatdiv',  
            {  
                // Represents distance from left or right browser window  
                // border depending upon property used. Only one should be  
                // specified.  
                // targetLeft: 0,  
                targetRight: 10,  
      
                // Represents distance from top or bottom browser window  
                // border depending upon property used. Only one should be  
                // specified.  
                // targetTop: 10,  
                   targetBottom: 10,  
      
                // Uncomment one of those if you need centering on  
                // X- or Y- axis.  
                // centerX: true,  
                // centerY: true,  
      
                // Remove this one if you don't want snap effect  
                snap: true  
            });  
        $(document).ready(function() {
	    $('input:radio').change(function() {

	    });
		$('.tab').click(function(){
			var rows = [];
			var value = parseInt($(this).val());
			$('input[type="radio"]:checked').each(function(){
				rows.push(parseInt($(this).val()));
			});
			var checkedradios = $('input:radio:checked').length;
			countAverage(rows, checkedradios);
		});
		function countAverage(rows, checked) {
			var sum = 0;
			for (var i=0; i<rows.length; i++) {
				sum = sum + rows[i];
			}
			// var average = Math.round((sum / checked) * 100) / 100;
			var average = sum / checked;
        	var average2 = average.toFixed(4);
        	document.getElementById("average").innerHTML = average2;
		}
	});
    </script>  

	<div id="left">
		<?php if($lang == "eng") { echo "<h1> <a href='https://studyguide.jamk.fi/globalassets/opinto-opas-amk/opiskelu/opinnaytetyo/assessment/assessment-criteria-amk2011.pdf' target='_blank'> AMK -assessment criteria</a> @JAMK</h1>"; } else { echo "<h1> <a href='http://opinto-oppaat.jamk.fi/globalassets/opinto-opas-amk/opiskelu/opinnaytetyo/arviointi/opinnaytetyon-arviointikriteerit-amk2014.pdf' target='_blank'> AMK -arviointikriteerit</a> @JAMK</h1>"; } ?>
		<a href="feedback_generator_amk.php?eng=1">In English</a>
		&nbsp&nbsp&nbsp&nbsp<a href="feedback_generator_amk.php?eng=0">Suomeksi</a>
		&nbsp&nbsp&nbsp&nbsp<a href="feedback_generator.php">YAMK</a>
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

	<form action="feedback_report_amk.php?eng=<?php echo $lang?>" method="post">
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

	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[1];?></td> </tr> 	<!-- Toka rivi -->


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[3][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		
		<?php echo create_row(3, "as2_1", $criteria);	?>
	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[4][0]; ?></td>	 	<!-- Vasen sarake otsikko -->

		<?php echo create_row(4, "as2_2", $criteria);	?>

	</tr>


	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[5][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(5, "as2_3", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[6][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(6, "as2_4", $criteria);	?>
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

	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[3];?></td> </tr> 	<!-- Toka rivi -->

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[10][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(10, "as4_1", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[11][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(11, "as4_2", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[12][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(12, "as4_3", $criteria);	?>
	</tr>

	<tr bgcolor="#2EFE2E"><td colspan="7"><?php echo $topics[4];?></td> </tr> 	<!-- Toka rivi -->

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[13][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(13, "as5_1", $criteria);	?>
	</tr>

	<tr> 	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[14][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(14, "as5_2", $criteria);	?>
	</tr>

	<tr>	<!-- Rivin luonti-->
		<td bgcolor="#F5A9BC"><?php echo $criteria[15][0]; ?></td>	 	<!-- Vasen sarake otsikko -->
		<?php echo create_row(15, "as5_3", $criteria);	?>
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
