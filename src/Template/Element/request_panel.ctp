<?php
/**
 * Request Panel Element
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         DebugKit 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<h4>Routing Params</h4>
<?php echo $this->Toolbar->makeNeatArray($params); ?>

<h4>Post data</h4>
<?php
if (empty($content['data'])):
	echo '<p class="info">' . __d('debug_kit', 'No post data.') . '</p>';
else:
	echo $this->Toolbar->makeNeatArray($data);
endif;
?>

<h4>Query string</h4>
<?php
if (empty($query)):
	echo '<p class="info">' . __d('debug_kit', 'No querystring data.') . '</p>';
else:
	echo $this->Toolbar->makeNeatArray($query);
endif;
?>

<h4>Cookie</h4>
<?php if (isset($cookie)): ?>
	<?= $this->Toolbar->makeNeatArray($cookie); ?>
<?php else: ?>
	<p class="info"><?= __d('debug_kit', 'No Cookie data.') ?></p>
<?php endif; ?>