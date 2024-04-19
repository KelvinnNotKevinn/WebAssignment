<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
	if(isset($_GET["caseId"]))
	{
		$caseId = $_GET["caseId"];
		$caseInfo = "SELECT * FROM pccase WHERE id='{$caseId}'";
		
		include("connectDatabase.php");
		
		$result = mysqli_fetch_assoc(mysqli_query($connect,$caseInfo));
		
		$name = $result["name"];
		$img = $result["img"];
		$desc = $result["desc"];
	}
	else
	{
		header('Location: /chooseCase.php');
	}	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="customizePCStyle.css">
	<title>Build Your Own PC </title>
</head>

<body>
	<?php include ('../includes/header.php') ?>

    <!-- This form is for user to choose components-->
	<h1 id="customizePC">Customize PC</h1>
	
	<h2 id="caseName"><?=$name?></h2>
	
	<div id="caseImageContainer">
		<img src="/Images/<?=$img?>">
	</div>
	
    <form method="post" action="/Product/addToCart.php">
        <div id="formContainer">
			<input type="hidden" name="caseId" value=<?=$caseId?> >
		
			<?php include("components.php") ?>
			
			<button class="buildButton" type="submit">BUILD</button>
		</div>
    </form>
    
</body>
</html>