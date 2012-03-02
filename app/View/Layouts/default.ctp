<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = Configure::read('Company');
if(!isset($cakeDescription)):
    $cakeDescription = 'DVD Club';
endif;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');
        echo $this->Html->css('dvdclub');

        echo $scripts_for_layout;
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $cakeDescription; ?></h1>
                <div id="menu">
                    <?php echo $this->Html->link(__('Clients'), array('controller' => 'clients','action' => 'index')); ?>
                    <?php echo $this->Html->link(__('Copies'), array('controller' => 'copies','action' => 'index')); ?>
                    <?php echo $this->Html->link(__('Formats'), array('controller' => 'formats','action' => 'index')); ?>
                    <?php echo $this->Html->link(__('Movements'), array('controller' => 'movements','action' => 'index')); ?>
                    <?php echo $this->Html->link(__('Report'), array('controller' => 'movements','action' => 'reportform')); ?>
                    <?php echo $this->Html->link(__('Logout'), array('controller' => 'users','action' => 'logout')); ?>
                </div>
            </div>
            <div id="content">

                <?php echo $this->Session->flash(); ?>

                <?php echo $content_for_layout; ?>

            </div>
            <div id="footer">
                <?php echo $this->Html->link(
                $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                'http://www.cakephp.org/',
                array('target' => '_blank', 'escape' => false)
                );
                ?>
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>