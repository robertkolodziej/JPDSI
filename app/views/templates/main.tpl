<!DOCTYPE HTML>
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Kalkulator kredytowy</h1>
								<p>Przy użyciu tego kalkulatora będziesz mógł obliczyć orientacyjną ratę miesięczną</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#kredyt">Oblicz swoją ratę!</a></li>	
                                                               
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

	
							<article id="kredyt">
								<h2 class="major">Oblicz swoja rate!</h2>
								{block name=content} Tu powinien być kalkulator ... {/block}

							</article>


                                                            {block name=bottom} tu powinna być baza danych...{/block}
					</div>


                        <!-- Footer -->
                            
					<footer id="footer">
                                                {block name=stopka} Tu powinna być stopka {/block}
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>
			</div>
				
<!-- BG -->
			<div id="bg"></div>
		

		<!-- Scripts -->
			<script src="{$conf->app_url}/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/js/browser.min.js"></script>
			<script src="{$conf->app_url}/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/js/util.js"></script>
			<script src="{$conf->app_url}/js/main.js"></script>

	</body>
</html>
