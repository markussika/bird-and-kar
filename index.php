<?php
include "Bird.php";
include "Kar.php";

$bird1 = new Bird("Railijs", 14);
echo $bird1->name ."<br>";

$bird2 = new Bird("matuIIIIIsssss", 18);
echo $bird2->name ."<br>";
$bird2->fly();






echo "<h1>Zemenes vardi</h1>";
echo "Kopš bērnu dienām Tevi zinu es <br>
Mēs gandrīz katru dienu bijām kopā <br>
Gan uz skolas sola, gan uz tāfeles<br>
Kā mācēju es rakstu Tavu vārdu <br>
<br>
Pēdējo reiz, tā gribētos ar Tevi atkal kopā <br>
Pēdējo reiz, būt mūsu pielijušā vasarā <br><br>
Vai atceries kā uzsmaidīja gaiss<br>
Kā lietū gājām lasīt zemenes<br>
Kā aizbēgām no stundām kopā mēs<br>
Un skūpstījāmies tad zem ābeles<br>
Viss kārtībā, zied atkal zemenes<br>
Un mūsu bērni tagad vienā klasē<br>
Tu vienmēr būsi mana meitene<br>
No mūsu pielijušās vasaras <br> <br>";


$kar1 = new Kar("avdi", 238490);
echo $kar1->brand . "<br>";

$kar2 = new Kar("volvo", 583920);
echo $kar2->brand . "<br>";




