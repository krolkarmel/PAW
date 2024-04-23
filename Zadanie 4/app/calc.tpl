{{extends file="../templates/main.tpl"}}

{block name = header}
    <header id="header">
        <h1><a href="index.html">Kalkulator Rat Kredytu</a> by Tomasz Król</h1>
					<nav id="nav">
						<ul>
							<li><a href="\Zadanie 3\">Home</a></li>
						</ul>
					</nav>
</header>
{/block}

{block name = banner}
    <header id="banner">
        <h2>KALKULATOR</h2>
					<p>Oblicz ratę dla Twojego kredytu.</p>
					<ul class="actions special">
						<li><a href="\Zadanie 3\" class="button primary">Oblicz ratę kredytu</a></li>
					</ul>
</header>
{/block}


{block name=kalkulator}
<div class="kalkulator">
    <form action="{$app_url}/app/calc.php" method="post" class="pure-form pure-form-stacked">
        <div class="row gtr-uniform">
            <fieldset>

            <div class="col-6 col-12-xsmall">
               <h3> <label for="id_cost">Kwota kredytu: </label></h3>
                <input id="id_cost" type="text" placeholder="Np. '400000'" name="cost" value="{$form['cost']}"><br>
            </div>


            <div class="col-6 col-12-xsmall">
                <h3><label for="id_years">Liczba lat: </label></h3>
                <input id="id_years" type="text" placeholder="Np.'8'" name="years" value="{$form['years']}"><br>
            </div>


            <div class="col-6 col-12-xsmall">
                <h3><label for="id_percent">Oprocentowanie: </label></h3>
                <input id="id_percent" type="text" placeholder="Np. '6.76'" name="percent" value="{$form['percent']}"><br>
            </div>

            </fieldset>
            <div class="col-12">
                <ul class="actions">
                        <li><input type="submit" value="Oblicz" class="primary" /></li>
                        <li><input type="reset" value="Zresetuj" /></li>
                </ul>
            </div>
        </div>
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