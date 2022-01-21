<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>SitCar - wypożyczalnia samochodów</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{$conf->app_url}/css/style.css" />
	<script src="https://kit.fontawesome.com/1ff37acaf2.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{$conf->app_url}/js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="{$conf->app_url}/js/script.js"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
		<div class="container">
			<a class="navbar-brand" href="{$conf->action_root}homeView"><i class="fas fa-car text-primary"></i> Sit<span
					class="text-primary">Car</span></a>
			<button class="navbar-toggler border-0" type="button" data-toggle="collapse"
				data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
				aria-label="Toggle navigation">
				<i class="fas fa-bars px-4"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
                    {block name=navigation}{/block}
				</div>
			</div>
		</div>
	</nav>

    {block name=header}{/block}

    {block name=main}{/block}

	{block name=footer}{/block}

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
	</script>
</body>
</html>
