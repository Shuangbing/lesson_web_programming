<?php
$a = '<p>red</p>';
$b = 'Can\'t';
$c = 'it is $a';
$d = "it is $a";
$e = "it is \$a";
$f = 'it is '.$a;
$g = $a.$b;
$h = '$a.$b';
$i = "$a.$b";
$j = '\\';
$k = "a=\"hogehoge\"";
$l = "hogehoge='$a';";
$m = 'hogehoge="$a";';
$n = 'hogehoge='.';';
$o = "\".".".\"";
$p = "hogehoge='.';";
$q = 'hogehoge=\'.\';';
$r = <<< EOT
<p> hogehoge </p>
$a
<p> hogehoge </p>
EOT;

echo "\$aは「".$a."」です。\n";
echo "\$bは「".$b."」です。\n";
echo "\$cは「".$c."」です。\n";
echo "\$dは「".$d."」です。\n";
echo "\$eは「".$e."」です。\n";
echo "\$fは「".$f."」です。\n";
echo "\$gは「".$g."」です。\n";
echo "\$hは「".$h."」です。\n";
echo "\$iは「".$i."」です。\n";
echo "\$jは「".$j."」です。\n";
echo "\$kは「".$k."」です。\n";
echo "\$lは「".$l."」です。\n";
echo "\$mは「".$m."」です。\n";
echo "\$nは「".$n."」です。\n";
echo "\$oは「".$o."」です。\n";
echo "\$pは「".$p."」です。\n";
echo "\$qは「".$q."」です。\n";
echo "\$rは「".$r."」です。\n";

?>