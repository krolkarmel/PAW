<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    	<meta name="description" content="{$page_description|default:'Opis domyślny'}">
    	<title>{$page_title|default:"Tytuł domyślny"}</title>
    	<link rel="stylesheet" href="{$app_url}/assets/css/main.css">
	</head>
	<body>
		<div id="page-wrapper">

				<div class ="up">
					{block name=header}
				{/block}

				</div>


				<div class ="main">
				{block name=banner}
				{/block}
			
			
				{block name=kalkulator}
				{/block}


		</div>

		<div class = "down">

		{block name=footer}
		{/block}

		{* {block name=kontakt}
		{/block} *}
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>