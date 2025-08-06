
Usage
=======
php minion.php --task=<?php if (!empty($task)) {
	echo $task;
} ?> [--option1=value1] [--option2=value2]

Details
=======
<?php if (!empty($tags)) {
	foreach($tags as $tag_name => $tag_content): ?>
	<?php echo ucfirst($tag_name) ?>: <?php echo $tag_content ?>

	<?php endforeach;
} ?>

Description
===========
<?php if (!empty($description)) {
	echo $description;
} ?>


