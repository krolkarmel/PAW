{{extends file="templates/main.tpl"}}

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
<form action="{$conf->action_url}creditCalc" method="post" class="pure-form pure-form-stacked">
<div class="row gtr-uniform">
    <fieldset>

    <div class="col-6 col-12-xsmall">
        <label for="id_wiek">Liczba lat: </label>
        <input id="id_wiek" type="text" placeholder="Np.'8'" name="wiek" value="{$form->wiek}"><br>
    </div>

    <div class="col-6 col-12-xsmall">
        <label for="id_kwotaKredytu">Kwota kredytu: </label>
        <input id="id_kwotaKredytu" type="text" placeholder="Np. '400000'" name="kwotaKredytu" value="{$form->kwotaKredytu}"><br>
    </div>

    <div class="col-6 col-12-xsmall">
        <label for="id_oprocent">Oprocentowanie: </label>
        <input id="id_oprocent" type="text" placeholder="Np. '6.76'" name="oprocent" value="{$form->oprocent}"><br>
    </div>

    </fieldset>
    <div class="col-12">
        <ul class="actions">
                <li><input type="submit" value="Oblicz" class="primary" /></li>
        </ul>
    </div>
</div>
</form>
    </div>

        <div class="messages">

        {if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            {foreach $msgs->getErrors() as $err}
            {strip}
                    <li>{$err}</li>
            {/strip}
            {/foreach}
            </ol>
        {/if}
      

        {if $msgs->isInfo()}
                <h4>Informacje: </h4>
                <ol class="inf">
                {foreach $msgs->getInfos() as $inf}
                {strip}
                        <li>{$inf}</li>
                {/strip}
                {/foreach}
                </ol>
        {/if}
        
        {if isset($res->result)}
            <h4>Wynik</h4>
            <p class="res">
            {$res->result}
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