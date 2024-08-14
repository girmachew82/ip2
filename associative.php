<?php

$computer = [
            "brand" => "HP",
            "manufacturedDate" => 2024,
            "price" => 60_000,
            "os" => "Windows 11",
            "antivirus" => false,
             ];
?>
<h1>Computer detail</h1>
<p> Brand : <?php echo $computer['brand']?></p>
<p> Manufacture Date : <?php echo $computer['manufacturedDate']?> E.T</p>
<p> Price : <?php echo number_format($computer['price'],2)?> Birr</p>
<p> OS : <?php echo $computer['os']?></p>
<p> AntiVirus is installed : <?php echo var_export($computer['antivirus'])?> </p>
<?php
if(!$computer['antivirus']){
    echo "Please install antivirus";
}



