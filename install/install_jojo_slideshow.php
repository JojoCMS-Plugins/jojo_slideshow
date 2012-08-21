<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */


$table = 'jojo_slideshow';
$query = "
    CREATE TABLE `jojo_slideshow` (
    `slideshowid` INT(11) NOT NULL auto_increment ,
    `name` VARCHAR( 255 ) NOT NULL ,
    `width` INT NOT NULL ,
    `height` INT NOT NULL ,
    `delay` VARCHAR( 10 ) NOT NULL ,
    `fadespeed` VARCHAR( 10 ) NOT NULL ,
    PRIMARY KEY  (`slideshowid`)
    ) ENGINE = MYISAM DEFAULT CHARSET=utf8 COLLATE utf8_general_ci ;";

/* Check table structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("jojo_slideshow: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("jojo_article: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) Jojo::printTableDifference($table,$result['different']);