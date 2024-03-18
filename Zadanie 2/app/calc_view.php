<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona_strona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">


<form action="<?php print(_APP_URL);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
<legend>Kalkulator rat kredytu</legend>
<table>
	<tr>
	<td><label for="id_kwotaKredytu">Kwota kredytu: </label></td>
	<td><input id="id_kwotaKredytu" type="text" name="kwotaKredytu" value="<?php isset($kwotaKredytu) ? print($kwotaKredytu) : ''; ?>" /></td>
</tr>
<tr>
	<td></td>
</tr>
	<tr>
	<td><label for="id_wiek">Wiek: </label></td>
	<td><input id="id_wiek" type="text" name="wiek" value="<?php isset($wiek) ? print($wiek) : ''; ?>" /></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td><label for="id_oprocent">Oprocentowanie: </label></td>
	<td><input id="id_oprocent" type="text" name="oprocent" value="<?php isset($oprocent) ? print($oprocent) : ''; ?>" /></td>
</tr>
	</table>
	<br>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #008000; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>