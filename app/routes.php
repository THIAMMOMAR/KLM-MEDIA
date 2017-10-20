<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		// Route for adding Wine in the database
		['GET|POST', '/adminsecurewine', 'Default#addwine', 'addwine'],

		// afin de recupere la route et afficher plus de details sur le produit
		['GET|POST', '/wine/[i:id]', 'Default#showine', 'showwine'],

		// route for the wine liste
		['GET|POST', '/winelist', 'Default#listwine', 'winlist'],

		// road for supplier
		['GET|POST', '/supplier', 'Default#supplier', 'supplier'],

		// road for Region
		['GET|POST', '/region', 'Default#region', 'region']
	);