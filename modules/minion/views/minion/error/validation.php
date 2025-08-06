Parameter Errors:
<?php if (!empty($errors)) {
	foreach ($errors as $parameter => $error): ?>
		<?php echo $parameter; ?> - <?php echo $error; ?>
	<?php endforeach;
} ?>

Run

    php index.php --task=<?php if (!empty($task)) {
	echo $task;
} ?> --help

for more help