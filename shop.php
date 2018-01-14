<!DOCTYPE html>
<html>
  <head>
    <title>Crazy Cassiel's Crafts Shop - Receipt</title>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
	<link rel = "stylesheet" type = "text/css" href = "CCCstyles.css" />
  </head>

  <body>
    <?php
    /* Styling for printed receipt */
    print
    "<style>
		body 
		{
			color: #FFFFFF; 
			font-size: 22px; 
			margin: 4%; 
			text-align: center; 
			background-color: rgb(255,150,50);
			background-repeat: no-repeat;
			background-image: url(Yarn.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		div 
		{
			height: 400px; 
			width: 450px; 
			margin: 2%; 
			background-color: grey; 
			border: 4px dotted black;
		}
		h1 
		{
			border-bottom: 2px solid black; 
			text-align: center;
		}
    </style>";

    /* Gets customer name to display on receipt */
      if(isset($_GET["custName"])) { $custName = $_GET["custName"]; } else { $custName = ""; }
      echo "Guest Name: ".$custName."<br />";


      /* Each if statement goes though the entire form and checks if there is a value present
         in the user input box. If there is input, the value is multipled by the price of
         the item and saved as a variable. The item name and item quantity is then printed
         to the receipt. If there is no value input, then nothing is printed and the price
         is set to 0 */
		 
		//YARN ARTS SECTION
      if(!empty($_GET["knittingNeedles"])) {
        $knittingNeedlesPrice = ($_GET["knittingNeedles"] * 14);
        $knittingNeedles = ($_GET["knittingNeedles"]);
        echo "Knitting Needles: ".$knittingNeedles."<br />";
        } else {
        $knittingNeedlesPrice = "0";
      }
      if(!empty($_GET["crochetHooks"])) {
        $crochetHooksPrice = ($_GET["crochetHooks"] * 12);
        $crochetHooks = ($_GET["crochetHooks"]);
        echo "Crochet Hooks: ".$crochetHooks."<br />";
        } else {
        $crochetHooksPrice = "0";
      }
      if(!empty($_GET["yarnSkein"])) {
        $yarnSkeinPrice = ($_GET["yarnSkein"] * 8.50);
        $yarnSkein = ($_GET["yarnSkein"]);
        echo "Yarn Skein: ".$yarnSkein."<br />";
        } else {
        $yarnSkeinPrice = "0";
      }
      if(!empty($_GET["stitchMarkers"])) {
        $stitchMarkersPrice = ($_GET["stitchMarkers"] * 4.50);
        $stitchMarkers = ($_GET["stitchMarkers"]);
        echo "Stitch Markers: ".$stitchMarkers."<br />";
        } else {
        $stitchMarkersPrice = "0";
      }
      if(!empty($_GET["weaverLoom"])) {
        $weaverLoomPrice = ($_GET["weaverLoom"] * 18);
        $weaverLoom = ($_GET["weaverLoom"]);
        echo "Weaver's Loom: ".$weaverLoom."<br />";
        } else {
        $weaverLoomPrice = "0";
      }
	  
	  //SEWING SECTION
      if(!empty($_GET["basicKit"])) {
        $basicKitPrice = ($_GET["basicKit"] * 16.50);
        $basicKit = ($_GET["basicKit"]);
        echo "Basic Kit: ".$basicKit."<br />";
        } else {
        $basicKitPrice = "0";
      }
      if(!empty($_GET["fabric"])) {
        $fabricPrice = ($_GET["fabric"] * 19);
        $fabric = ($_GET["fabric"]);
        echo "Fabric: ".$fabric."<br />";
        } else {
        $fabric = "0";
      }
      if(!empty($_GET["thread"])) {
        $threadPrice = ($_GET["thread"] * 15);
        $thread = ($_GET["thread"]);
        echo "Thread: ".$thread."<br />";
        } else {
        $thread = "0";
      }
      if(!empty($_GET["sewingMachine"])) {
        $sewingMachinePrice = ($_GET["sewingMachine"] * 27);
        $sewingMachine = ($_GET["sewingMachine"]);
        echo "Sewing Machine: ".$sewingMachine."<br />";
        } else {
        $sewingMachinePrice = "0";
      }
      if(!empty($_GET["mannequin"])) {
        $mannequinPrice = ($_GET["mannequin"] * 32.50);
        $filet = ($_GET["mannequin"]);
        echo "Mannequin: ".$filet."<br />";
        } else {
        $mannequinPrice = "0";
      }
	  
	  //JEWELRY SECTION
      if(!empty($_GET["pliers"])) {
        $pliersPrice = ($_GET["pliers"] * 8);
        $pliers = ($_GET["pliers"]);
        echo "Pliers: ".$pliers."<br />";
        } else {
        $pliersPrice = "0";
      }
      if(!empty($_GET["wire"])) {
        $wirePrice = ($_GET["wire"] * 8.50);
        $wire = ($_GET["wire"]);
        echo "Wire: ".$wire."<br />";
        } else {
        $wirePrice = "0";
      }
      if(!empty($_GET["beadString"])) {
        $beadStringPrice = ($_GET["beadString"] * 7);
        $beadString = ($_GET["beadString"]);
        echo "String of Beads: ".$beadString."<br />";
        } else {
        $beadStringPrice = "0";
      }
      if(!empty($_GET["clasps"])) {
        $claspsPrice = ($_GET["clasps"] * 8);
        $clasps = ($_GET["clasps"]);
        echo "Clasps: ".$clasps."<br />";
        } else {
        $claspsPrice = "0";
      }
      if(!empty($_GET["chain"])) {
        $chainPrice = ($_GET["chain"] * 9);
        $chain = ($_GET["chain"]);
        echo "Chain: ".$chain."<br />";
        } else {
        $chainPrice = "0";
      }
	  
	  //PAPER CRAFTS SECTION
      if(!empty($_GET["cardstock"])) {
        $cardstockPrice = ($_GET["cardstock"] * 6);
        $cardstock = ($_GET["cardstock"]);
        echo "Cardstock: ".$cardstock."<br />";
        } else {
        $cardstockPrice = "0";
      }
      if(!empty($_GET["washi"])) {
        $washiPrice = ($_GET["washi"] * 7.50);
        $washi = ($_GET["washi"]);
        echo "Washi: ".$washi."<br />";
        } else {
        $washiPrice = "0";
      }
      if(!empty($_GET["scissors"])) {
        $scissorsPrice = ($_GET["scissors"] * 4.50);
        $scissors = ($_GET["scissors"]);
        echo "Scissors: ".$scissors."<br />";
        } else {
        $scissorsPrice = "0";
      }
      if(!empty($_GET["glue"])) {
        $gluePrice = ($_GET["glue"] * 3);
        $glue = ($_GET["glue"]);
        echo "glue: ".$scissors."<br />";
        } else {
        $gluePrice = "0";
      }
      if(!empty($_GET["knife"])) {
        $knifePrice = ($_GET["knife"] * 5.50);
        $knife = ($_GET["knife"]);
        echo "Knife: ".$knife."<br />";
        } else {
        $knifePrice = "0";
      }
	  
	  //PAINTING SECTION
      if(!empty($_GET["palette"])) {
        $palettePrice = ($_GET["palette"] * 4);
        $palette = ($_GET["palette"]);
        echo "Palette: ".$palette."<br />";
        } else {
        $palettePrice = "0";
      }
      if(!empty($_GET["brushes"])) {
        $brushesPrice = ($_GET["brushes"] * 2.50);
        $brushes = ($_GET["brushes"]);
        echo "Brushes: ".$brushes."<br />";
        } else {
        $brushesPrice = "0";
      }
      if(!empty($_GET["paintPencil"])) {
        $paintPencilPrice = ($_GET["paintPencil"] * 3.50);
        $paintPencil = ($_GET["paintPencil"]);
        echo "Watercolor Pencils: ".$paintPencil."<br />";
        } else {
        $paintPencilPrice = "0";
      }
      if(!empty($_GET["paintBottle"])) {
        $paintBottlePrice = ($_GET["paintBottle"] * 4.50);
        $paintBottle = ($_GET["paintBottle"]);
        echo "Paint Bottles: ".$paintBottle."<br />";
        } else {
        $paintBottlePrice = "0";
      }
      if(!empty($_GET["canvas"])) {
        $canvasPrice = ($_GET["canvas"] * 10.50);
        $canvas = ($_GET["canvas"]);
        echo "Canvas: ".$canvas."<br />";
        } else {
        $canvasPrice = "0";
      }

      /* Calculates total price by adding variables assigned in previous if statements,
        and assigned it to the total variable. */
      $total = $knittingNeedlesPrice + $crochetHooksPrice + $yarnSkeinPrice + $stitchMarkersPrice + $weaverLoomPrice + 
				$basicKitPrice + $fabricPrice + $threadPrice + $sewingMachinePrice + $mannequinPrice + 
				$pliersPrice + $wirePrice + $beadStringPrice + $claspsPrice + $chainPrice + 
				$cardstockPrice + $washiPrice + $scissorsPrice + $gluePrice + $knifePrice + 
				$palettePrice + $brushesPrice + $paintPencilPrice + $paintBottlePrice + $canvasPrice;
			   
      /* Formats order total to show all decimal places and prints it to the receipt. */
      echo "Total: $".number_format($total, 2)."<br /><br /> Thank You!";
    ?>
  </body>


</html>