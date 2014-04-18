<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('rsioa', 'RSIOA: アパート入居状況情報サイト');
?>
<?php echo $this->Html->docType('html5'); ?>
<html lang="ja">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'));
		echo $this->fetch('css');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->fetch('script');
		echo $this->Html->script('http://code.jquery.com/jquery.js');
		echo $this->Html->script('bootstrap.min');
	?>
</head>
<body>
	<div id="container">
		<header>
		</header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer>
			<?php echo __('Copyright &copy; 2014 And Works, Inc. All Rights Reserved.'); ?>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
