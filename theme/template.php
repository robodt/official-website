<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8" />
	<meta name="generator" content="Robodt" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?php if (isset($request['metadata']['title'])) print $request['metadata']['title']; ?> - <?php print $settings['site.name']; ?></title>

	<link rel="stylesheet" href="<?php print $settings['theme.assets']; ?>normalize.css">
	<link rel="stylesheet" href="<?php print $settings['theme.assets']; ?>style.css" />

</head>
<body>


	<div class="heading">
		<div class="container">

			<div class="header">
				<a href="<?php print $settings['site.url']; ?>"><img src="<?php print $settings['theme.assets']; ?>robodt-logo.svg" id="header-logo" /></a>
			</div><!-- .header -->

			<div class="navigation">
				<ul>
<?php foreach ($navigation as $navigation_item) : ?>
					<li<?php if ($navigation_item['active']) print ' class="active"';?>><a href="<?php print $settings['site.url'] . $navigation_item['url']; ?>"><?php print $navigation_item['title']; ?></a></li>
<?php endforeach; ?>
				</ul>
			</div><!-- .navigation -->

		</div><!-- .container -->
	</div><!-- .heading -->


	<div class="container">
		<div class="page">
			<h1><?php if (isset($request['metadata']['title'])) print $request['metadata']['title']; ?></h1>
			<div class="page-content">

<?php print $request['content']; ?>

			</div><!-- .page-content -->
			<p class="date"><?php if (isset($request['metadata']['date'])) print $request['metadata']['date']; ?></p>
		</div><!-- .page -->


		<div class="footer">
			<p><?php print $settings['theme.footer_text']; ?></p>
		</div><!-- .footer -->
	</div><!-- .container -->


</body>
</html>