<h2><?php print $lable?>: <?php print ($search); ?></h2>
<?php 
if(sizeof($nodes) > 0) { ?>
  <ul>
    <?php foreach($nodes as $node) { ?>
    <li><?php print l($node['title'], "node/" . $node['nid']); ?></li>
    <?php } ?>
  </ul>
<?php 
} 
else { 
  print $empty;
} 