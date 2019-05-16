<?php

$myXml="
<message>
    <to>Tove</to>
    <from>Jani</from>
    <msg>Don't forget me this weekend</msg>
</message>
";

$xml=simplexml_load_string($myXml);
foreach ($xml as $fild=>$cont){
    echo $fild.":".$cont."<br>";
}
?>