<?php
	
	include('../database/connection.php');
	
	$motherBoardSql = "SELECT * FROM components WHERE category = 'MOTHERBOARD'";
	$processsorSql = "SELECT * FROM components WHERE category = 'PROCESSOR'";
	$ramSql = "SELECT * FROM components WHERE category = 'RAM'";
	$gpuSql = "SELECT * FROM components WHERE category = 'GPU'";
	$storageSql = "SELECT * FROM components WHERE category = 'STORAGE'";

	$motherBoard = mysqli_query($conn,$motherBoardSql);
	
	if(mysqli_num_rows($motherBoard) > 0)
	{
		echo("<h2 class='categoryTitle' >MOTHER BOARD</h2>");
		echo("<div class='componentList' id=motherBoardList>");
		
		$count = 0;
		while ($row = mysqli_fetch_assoc($motherBoard))
		{
			echo("<div class='selectionBox'>");
			
			echo("<div class='radiobox' >");
			$checked = ($count === 0) ? "checked" : "";
			echo("<input type='radio' {$checked} id='motherBoard{$count}' class='componentsName' name='motherBoard' value='{$row['id']}' >");
			echo("</div>");
			
			echo("<div class='componentNamePrice'>");
			echo("<label for='motherBoard{$count}'>");
			echo("<h3>$row[name]</h3>");
			echo("<p>RM {$row['price']}</p>");
			echo("</label>");
			echo("</div>");
			
			echo("</div>");
			
			$count ++ ;
		}
		
		echo("</div>");
	}
	
	$processor = mysqli_query($conn,$processsorSql);
	
	if(mysqli_num_rows($processor) > 0)
	{
		echo("<h2 class='categoryTitle' >PROCESSOR</h2>");
		echo("<div class='componentList' id=processorList>");
		
		$count = 0;
		while ($row = mysqli_fetch_assoc($processor))
		{
			echo("<div class='selectionBox'>");
			
			echo("<div class='radiobox' >");
			$checked = ($count === 0) ? "checked" : "";
			echo("<input type='radio' {$checked} id='processor{$count}' class='componentsName' name='processor' value='{$row['id']}' >");
			echo("</div>");
			
			echo("<div class='componentNamePrice'>");
			echo("<label for='processor{$count}'>");
			echo("<h3>$row[name]</h3>");
			echo("<p>RM {$row['price']}</p>");
			echo("</label>");
			echo("</div>");
			
			echo("</div>");
			
			$count ++ ;
		}
		
		echo("</div>");
	}

	$ram = mysqli_query($conn,$ramSql);
	
	if(mysqli_num_rows($ram) > 0)
	{
		echo("<h2 class='categoryTitle' >RAM</h2>");
		echo("<div class='componentList' id=ramList>");
		
		$count = 0;
		while ($row = mysqli_fetch_assoc($ram))
		{
			echo("<div class='selectionBox'>");
			
			echo("<div class='radiobox' >");
			$checked = ($count === 0) ? "checked" : "";
			echo("<input type='radio' {$checked} id='ram{$count}' class='componentsName' name='ram' value='{$row['id']}' >");
			echo("</div>");
			
			echo("<div class='componentNamePrice'>");
			echo("<label for='ram{$count}'>");
			echo("<h3>$row[name]</h3>");
			echo("<p>RM {$row['price']}</p>");
			echo("</label>");
			echo("</div>");
			
			echo("</div>");
			
			$count ++ ;
		}
		
		echo("</div>");
	}
	
	$gpu = mysqli_query($conn,$gpuSql);
	
	if(mysqli_num_rows($gpu) > 0)
	{
		echo("<h2 class='categoryTitle' >GPU</h2>");
		echo("<div class='componentList' id=gpuList>");
		
		$count = 0;
		while ($row = mysqli_fetch_assoc($gpu))
		{
			echo("<div class='selectionBox'>");
			
			echo("<div class='radiobox' >");
			$checked = ($count === 0) ? "checked" : "";
			echo("<input type='radio' {$checked} id='gpu{$count}' class='componentsName' name='gpu' value='{$row['id']}' >");
			echo("</div>");
			
			echo("<div class='componentNamePrice'>");
			echo("<label for='gpu{$count}'>");
			echo("<h3>$row[name]</h3>");
			echo("<p>RM {$row['price']}</p>");
			echo("</label>");
			echo("</div>");
			
			echo("</div>");
			
			$count ++ ;
		}
		
		echo("</div>");
	}
	
	$storage = mysqli_query($conn,$storageSql);
	
	if(mysqli_num_rows($storage) > 0)
	{
		echo("<h2 class='categoryTitle' >STORAGE</h2>");
		echo("<div class='componentList' id=storageList>");
		
		$count = 0;
		while ($row = mysqli_fetch_assoc($storage))
		{
			echo("<div class='selectionBox'>");
			
			echo("<div class='radiobox' >");
			$checked = ($count === 0) ? "checked" : "";
			echo("<input type='radio' {$checked} id='storage{$count}' class='componentsName' name='storage' value='{$row['id']}' >");
			echo("</div>");
			
			echo("<div class='componentNamePrice'>");
			echo("<label for='storage{$count}'>");
			echo("<h3>$row[name]</h3>");
			echo("<p>RM {$row['price']}</p>");
			echo("</label>");
			echo("</div>");
			
			echo("</div>");
			
			$count ++ ;
		}
		
		echo("</div>");
	}
?>
