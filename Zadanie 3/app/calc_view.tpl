{{extends file="../templates/main.tpl"}}

{block name = header}
    <header id="header">
        <h1><a href="index.html">Kalkulator Rat Kredytu</a> by Tomasz Król</h1>
					<nav id="nav">
						<ul>
							<li><a href="\kalkulator\">Home</a></li>
						</ul>
					</nav>
</header>
{/block}

{block name = banner}
    <header id="banner">
        <h2>KALKULATOR</h2>
					<p>Oblicz ratę dla Twojego kredytu.</p>
					{* <ul class="actions special">
						<li><a href="\kalkulator\" class="button primary">Oblicz ratę kredytu</a></li>
					</ul> *}
</header>
{/block}


{block name=kalkulator}
<div class="kalkulator">
<form action="{$app_url}/app/calc.php" method="post" class="pure-form pure-form-stacked">
<legend>Kalkulator rat kredytu</legend>
	<label for="id_kwotaKredytu">Kwota kredytu: </label>
	<input id="id_kwotaKredytu" type="text" name="kwotaKredytu" value="{$form['kwotaKredytu']}" />
	<label for="id_wiek">Wiek: </label>
	<input id="id_wiek" type="text" name="wiek" value="{$form['wiek']}" />
	<label for="id_oprocent">Oprocentowanie: </label>
	<input id="id_oprocent" type="text" name="oprocent" value="{$form['oprocent']}" />
	<br>
	<button type="submit" class="pure-button">Oblicz</button>
</form>	
    </div>

        <div class="messages">

        {if isset($messages) }
            {if count($messages) > 0 }
                <h4>Wystąpiły błędy: </h4>
                <ol class="err">
                {foreach $messages as $msg}
                {strip}
                    <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
            {/if}
        {/if}

        {if isset($infos) }
            {if count($infos) > 0 }
                <h4>Informacje: </h4>
                <ol class="inf">
                {foreach $infos as $msg}
                {strip}
                    <li>{$msg}</li>
                {/strip}
                {/foreach}
                </ol>
            {/if}
        {/if}
        
        {if isset($result)} 
            <h4>Wynik</h4>
            <p class="res">
            <u>
            {$result}
            </u>
            </p>
        {/if}
        
        </div>
</body>
{/block}
<!-- {block name=kontakt}
<p><a href="#">Wyślij mail</p>
<p>Zadźwoń: 492912313</p>
			{/block} -->

            
                {block name=footer}
                
                <footer id="footer">
                    <p class="copyright">&copy; Krolkarmel. All rights reserved.</p>
                    <p><a href="https://html5up.net/">Design: HTML5 UP</p>
                </footer> 
            
                {/block}