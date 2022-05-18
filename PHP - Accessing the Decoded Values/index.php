<p>BERAT BADAN</p>
<?php
$jsonobj = '{"Namu":78,"Vante":67,"Jiji":56}';

$obj = json_decode($jsonobj);

echo $obj->Namu;
echo $obj->Vante;
echo $obj->Jiji;
?>