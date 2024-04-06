<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Build Your Own PC </title>
	
	<link rel="stylesheet" href="/BuildPc/style.css">
</head>

<body>
    <?php
    include('../includes/header.php')
    <form action="confirmation.php" method="POST">
        <div>
            <label for =""> 1. Motherboard </label><br>
            <input type="radio" name="motherboard" value="101" /> RM425 - AMD B450M GAMING MOTHERBOARD <br>
            <input type="radio" name="motherboard" value="102" /> RM483 - ASUS STRIX Z270F GAMING MOTHERBOARD <br>
            <input type="radio" name="motherboard" value="103" /> RM628 - ASUS TUF B550M-PLUS GAMING MOTHERBAORD <br><br>
        </div>
        <div>
            <label for =""> 2. Processor</label><br>
            <input type="radio" name="processor" value="201" /> RM399 - AMD RYZEN 5 5500<br>
            <input type="radio" name="processor" value="202" /> RM619 - Intel® Core™ i5-12400F <br>
            <input type="radio" name="processor" value="203" /> RM1,199 - Intel® Core™ i7-12700F<br><br>
        </div> 
        <div>
            <label for =""> 3. Random Access Memory</label><br>
            <input type="radio" name="ram" value="301" /> RM115 - ADATA XPG SPECTRIX 8GB DDR4 3200MHZ<br>
            <input type="radio" name="ram" value="302" /> RM162 - KINGSTON HYPERX FURY 8GB DDR4 3200MHZ<br>
            <input type="radio" name="ram" value="303" /> RM235 - ADATA XPG SPECTRIX 16GB DDR4 3600MHZ<br><br>
        </div> 
        <div>
            <label for =""> 4. Graphics Processing Unit </label><br>
            <input type="radio" name="gpu" value="401" /> RM1,159 - GIGABYTE GTX 1650 WINDFORCE 4GB<br>
            <input type="radio" name="gpu" value="402" /> RM1,520 - ZOTAC RTX 4060 TWIN EDGE 8GB<br>
            <input type="radio" name="gpu" value="403" /> RM3,892 - ASUS RTX 4070 DUAL GEFORCE 12GB<br><br>
        </div> 
        <div>
            <label for =""> 5. Storage</label><br>
            <input type="radio" name="storage" value="501" /> RM308 - WD SA510 500GB SATA SSD<br>
            <input type="radio" name="storage" value="502" /> RM416 - XPG S60 1TB PCIE SSD<br>
            <input type="radio" name="storage" value="503" /> RM642 - SAMSUNG 980 1TB NVME M.2 SSD<br><br>
        </div>
        <div>
            <button type="submit" name="confirmation" >CUSTOMIZE!</button>
        </div>   
    </form>
    ?>
</body>

</html>
