<?php

	include('../database/connection.php');
	
	$sql = "SELECT * FROM PCcase";
	
	$PCcase = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($PCcase) > 0)
	{
		echo("<div id='PCcaseList'>");
		
		while ($row = mysqli_fetch_assoc($PCcase))
		{
			echo("<div class='PCCaseContainer' id={$row['name']} >");
			
			echo("<div class='PCCaseImageContainer'>");
			echo("<img class='PCCaseImage' src='/WebAssignment/Images/".$row["img"]."'>");
			echo("</div>");
			
			echo("<h2 class='PCcaseName'>{$row['name']}</h2>");
			echo("<p class='PCcaseDesc'>{$row['desc']}</p>");
			
			echo("<p class='buildButton'><a href='/WebAssignment/Buildpc/customizePC?caseId=$row[id]' class='buildLink'>BUILD NOW</a></p>");
			echo("</div>");
		}
		echo("</div>");
	}

?>
