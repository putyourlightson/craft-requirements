<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
	<title>Craft Requirements Checker</title>

	<style type="text/css">
		body { margin: 0; font-size: 13px; line-height: 18px; color: #29323d; background: #EBEDEF; font-family: HelveticaNeue, sans-serif; }
		ul { padding-left: 20px; }
		.message-container { position: absolute; z-index: 100; top: 0; width: 100%; height: 100%; }
		.message-container .pane { top: 50%; margin-left: auto; margin-right: auto; width: 420px; }
		.pane { background: #fff; -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 2px 8px -2px rgba(0, 0, 0, 0.1); -moz-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 2px 8px -2px rgba(0, 0, 0, 0.1); box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05), 0 2px 8px -2px rgba(0, 0, 0, 0.1); position: relative; margin: 14px 0; padding: 24px; border-radius: 3px; word-wrap: break-word; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; }
		.copyright { margin: 0; font-size: 11px; color: #b9bfc6; }
		.copyright a { color: #b9bfc6; text-decoration: none; }
	</style>
</head>
<body>
		<div class="message-container">
			<div id="message" class="pane">
				<h2><?php echo $title; ?></h2>
				<?php if (is_array($messages)): ?>
					<ul>
						<?php foreach ($messages as $message): ?>
							<li><?php echo $message; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php else: ?>
					<p><?php echo $messages; ?></p>
				<?php endif; ?>
				<p><em>Note that MySQL 5.1.0 or higher with the InnoDB storage engine is required to run Craft and has not been tested for.</em></p>
				<p class="copyright">&copy; <a href="http://www.putyourlightson.net" target="_blank">PutYourLightsOn (Ben Croker)</a></p>
		</div>
	</div>
		<script type="text/javascript">
		var message = document.getElementById('message'),
			margin = -Math.round(message.offsetHeight / 2);
		message.setAttribute('style', 'margin-top: '+margin+'px !important;');
	</script>
</body>
</html>