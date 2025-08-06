<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title><?php if (!empty($title)) {
		echo $title;
	} ?> | Koseven <?php echo 'User Guide'; ?></title>

<?php if (!empty($styles)) {
	foreach ($styles as $style => $media) echo HTML::style($style, ['media' => $media], NULL, TRUE), "\n";
} ?>

<?php if (!empty($scripts)) {
	foreach ($scripts as $script) echo HTML::script($script, NULL, NULL, TRUE), "\n";
} ?>

</head>
<body>

	<div id="kodoc-header">
		<div class="container">
			<a id="kodoc-logo" href="https://koseven.dev/">koseven</a>
			<div id="kodoc-menu">
				<ul>
					<li class="guide first">
						<a href="<?php echo Route::url('docs/guide') ?>">User Guide</a>
					</li>
					<?php if (KO7::$config->load('userguide.api_browser')): ?>
					<li class="api">
						<a href="<?php echo Route::url('docs/api') ?>">API Browser</a>
					</li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</div>

	<div id="kodoc-content">
		<div class="wrapper">
			<div class="container">
				<?php if (!empty($breadcrumb)) {
					if (count($breadcrumb) > 1): ?>
					<div class="span-22 prefix-1 suffix-1">
						<ul id="kodoc-breadcrumb">
							<?php foreach ($breadcrumb as $link => $title): ?>
								<?php if (is_string($link)): ?>
								<li><?php echo HTML::anchor($link, $title, NULL, NULL, TRUE) ?></li>
								<?php else: ?>
								<li class="last"><?php echo $title ?></li>
								<?php endif ?>
							<?php endforeach ?>
						</ul>
					</div>
					<?php endif;
				} ?>
				<div class="span-6 prefix-1">
					<div id="kodoc-topics">
						<?php if (!empty($menu)) {
							echo $menu;
						} ?>
					</div>
				</div>
				<div id="kodoc-body" class="span-16 suffix-1 last">
					<?php if (!empty($content)) {
						echo $content;
					} ?>

					<?php if (!empty($show_comments)) {
						if ($show_comments): ?>
						<div id="disqus_thread" class="clear"></div>
						<script type="text/javascript">
							var disqus_identifier = '<?php echo HTML::chars(Request::current()->uri()) ?>';
							(function() {
								var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
								dsq.src = 'http://koseven.disqus.com/embed.js';
								(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
								})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=koseven">comments powered by Disqus.</a></noscript>
						<a href="http://disqus.com" class="dsq-brlink">Documentation comments powered by <span class="logo-disqus">Disqus</span></a>
						<?php endif;
					} ?>
				</div>
			</div>
		</div>
	</div>

	<div id="kodoc-footer">
		<div class="container">
			<div class="span-12">
			<?php if (isset($copyright)): ?>
				<p><?php echo $copyright ?></p>
			<?php else: ?>
				&nbsp;
			<?php endif ?>
			</div>
			<div class="span-12 last right">
			<p>Powered by <?php echo HTML::anchor('https://koseven.dev/', 'Koseven') ?> v<?php echo KO7::VERSION ?></p>
			</div>
		</div>
	</div>

<?php if (KO7::$environment === KO7::PRODUCTION): ?>
    <a class="btn btn-secondary" href="https://telegram.me/koseven" aria-label="koseven Telegram Group" target="_blank"><svg class="svg-inline--fa fa-telegram fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="telegram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z"></path></svg><!-- <i class="fab fa-telegram"></i> --> Telegram</a>
<?php endif ?>
</body>
</html>
