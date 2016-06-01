<?php
$macro = nl2br($_POST['macrofield']);
 if ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_pt'){
	 include("Spells/hunter_en_pt.php");
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_es'){
	 include("Spells/hunter_en_es.php");
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_de'){
	 include("Spells/hunter_en_de.php");
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_fr'){
	 include("Spells/hunter_en_fr.php");
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_it'){
	 include("Spells/hunter_en_it.php");
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_ru'){
	 include("Spells/hunter_en_ru.php");
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_pt'){
	 include("Spells/shaman_en_pt.php");
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_es'){
	 include("Spells/shaman_en_es.php");
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_de'){
	 include("Spells/shaman_en_de.php");
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_fr'){
	 include("Spells/shaman_en_fr.php");
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_it'){
	 include("Spells/shaman_en_it.php");
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_ru'){
	 include("Spells/shaman_en_ru.php");
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Translated Macro</title>
<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script><script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": false, "renamelinks": true }</script>
</head>

<body>
<?php
$macro = nl2br($_POST['macrofield']);
 if ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_pt'){
	 $translatevar = $hunter_en_pt;
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_es'){
	 $translatevar = $hunter_en_es;
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_de'){
	 $translatevar = $hunter_en_de;
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_fr'){
	 $translatevar = $hunter_en_fr;
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_it'){
	 $translatevar = $hunter_en_it;
 } elseif ($_POST['class'] == 'hunter' && $_POST['l_direction'] == 'en_ru'){
	 $translatevar = $hunter_en_ru;
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_pt'){
	 $translatevar = $shaman_en_pt;
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_es'){
	 $translatevar = $shaman_en_es;
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_de'){
	 $translatevar = $shaman_en_de;
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_fr'){
	 $translatevar = $shaman_en_fr;
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_it'){
	 $translatevar = $shaman_en_it;
 } elseif ($_POST['class'] == 'shaman' && $_POST['l_direction'] == 'en_ru'){
	 $translatevar = $shaman_en_ru;
 }

function strReplaceAssoc(array $translatevar, $macro) {
   return str_ireplace(array_keys($translatevar), array_values($translatevar), $macro);
}
echo strReplaceAssoc($translatevar,$macro);
?>
</body>
</html>