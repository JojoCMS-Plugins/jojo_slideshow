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

$table = 'jojo_slideshowimage';
$query = "
    CREATE TABLE `jojo_slideshowimage` (
    `slideshowimageid` int(11) NOT NULL auto_increment,
    `name` VARCHAR( 255 ) NOT NULL ,
    `image` VARCHAR( 255 ) NOT NULL ,
    `title` VARCHAR( 255 ) NOT NULL ,
    `slideshowid` INT NOT NULL ,
    `displayorder` INT NOT NULL ,
    `url` VARCHAR( 255 ) NOT NULL,
    PRIMARY KEY  (`slideshowimageid`)
    ) ENGINE = MYISAM ;";

/* Check table structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("jojo_slideshowimage: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("jojo_slideshowimage: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) Jojo::printTableDifference($table,$result['different']);