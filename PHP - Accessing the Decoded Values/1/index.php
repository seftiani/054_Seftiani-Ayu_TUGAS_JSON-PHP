<p>BERAT BADAN</p>
<?php
$jsonobj = '{"Namu":78,"Vante":67,"Jiji":56}';

$arr = json_decode($jsonobj, true);

echo $arr["Namu"];
echo $arr["Vante"];
echo $arr["Jiji"];

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>