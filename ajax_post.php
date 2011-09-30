<?php
$sestine = $_POST["sestina"];
$terzine = $_POST["terzina"];
$carre = $_POST["carre"];
$cavalli = $_POST["cavallo"];
$pieni = $_POST["pieno"];
$tot = ($sestine*5) + ($terzine*11) + ($carre*8) + ($cavalli*17) + ($pieni*35);

?>
<div id="post">
  <div class="toolbar">
    <h1>Risultato</h1>
    <a href="#" class="button back">Back</a>
  </div>
  <ul class="edgetoedge">
<?php
      echo '<li><b>Totale: </b>' . $tot . '</li>';
?>
  </ul>

</div>
<div></div>
