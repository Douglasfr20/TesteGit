<?php
session_start();
//$teste = echo $_SESSION['teste'];
require("conexao.php");
require("conexao2.php");
?>

<?php
function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}
?>

<?php
//echo  $_SESSION['teste'];
//$idcontinente =$_POST['continente'];
// Select all the rows in the markers table
$teste = $_SESSION['teste'];

$result_markers = "SELECT * FROM markers WHERE continente_idcontinente = $teste";
$resultado_markers = mysqli_query($conn, $result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';
?>

<?php
// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($row_markers['name']) . '" ';
  echo 'address="' . parseToXML($row_markers['address']) . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';
  echo 'type="' . $row_markers['type'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>


