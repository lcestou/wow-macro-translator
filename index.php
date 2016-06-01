<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WOW Macro Translator</title>
</head>

<body>
<form action="macro_translate.php" method="post" enctype="application/x-www-form-urlencoded" target="_parent" id="translate">
      <p>
        <label for="l_direction">Language Direction:</label>
        <select name="l_direction" id="l_direction">
          <option value="en_pt">English &gt; Português</option>
          <option value="en_es">English &gt; Español</option>
          <option value="en_de">English &gt; Deutsch</option>
          <option value="en_fr">English &gt; Français</option>
          <option value="en_it">English &gt; Italiano</option>
          <option value="en_ru">English &gt; Русский</option>
        </select>
        <br>
        <label for="class">Class: </label>
        <select name="class" id="class">
          <option value="hunter">Hunter</option>
          <option value="shaman">Shaman</option>
        </select>
        <br>
        <br>
        <label for="macrofield">Macro: </label>
        <textarea name="macrofield" id="macrofield" cols="65" rows="8"></textarea>
      </p>
        <input type="submit" name="submit" id="submit" value="Enviar" />
      </form>
</body>
</html>