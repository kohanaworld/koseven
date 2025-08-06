<h4>Tags</h4>
<ul class="tags">
<?php if (!empty($tags)){
foreach ($tags as $name => $set): ?>
<li><?php echo ucfirst($name).($set?' - '.implode(', ',$set):''); ?>
<?php endforeach;
	} ?>
</ul>