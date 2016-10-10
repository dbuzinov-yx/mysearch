<h2>Search for: <?php print ($search); ?></h2>
<ul>
<?php
foreach($nodes as $node) {
?>
<li><?php print l($node['title'], "node/" . $node['nid']); ?></li>
<?php
}
?>
</ul>