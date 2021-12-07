<?php

$plugin_data = get_plugin_data( plugin_dir_path(__DIR__) . 'ancient-faith-radio-widget.php', false, false );

?>
<div>
  <h1><?php print_r ($plugin_data['Name'])?></h1>
  <h2>Version <?php print_r ($plugin_data['Version']); ?></h2>
  <p>This plugin allows you to display an Ancient Faith Radio player on your WordPress site.</p>