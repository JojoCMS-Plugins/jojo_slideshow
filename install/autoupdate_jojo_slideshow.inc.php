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
$o = 1;

$default_td[$table]['td_displayfield'] = 'name';
$default_td[$table]['td_displayname'] = 'Slideshow';
$default_td[$table]['td_primarykey'] = 'slideshowid';
$default_td[$table]['td_parentfield'] = '';
$default_td[$table]['td_rolloverfield'] = '';
$default_td[$table]['td_orderbyfields'] = 'name';
$default_td[$table]['td_topsubmit'] = 'yes';
$default_td[$table]['td_filter'] = 'yes';
$default_td[$table]['td_deleteoption'] = 'yes';
$default_td[$table]['td_menutype'] = 'list';
$default_td[$table]['td_categoryfield'] = '';
$default_td[$table]['td_categorytable'] = '';
$default_td[$table]['td_group1'] = '';
$default_td[$table]['td_help'] = '';
$default_td[$table]['td_golivefield'] = '';
$default_td[$table]['td_expiryfield'] = '';

//ID
$field = 'slideshowid';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_name'] = 'ID';
$default_fd[$table][$field]['fd_type'] = 'readonly';
$default_fd[$table][$field]['fd_help'] = 'A unique ID, automatically assigned by the system';
$default_fd[$table][$field]['fd_mode'] = 'advanced';
$default_fd[$table][$field]['fd_tabname'] = 'Content';

//Name
$field = 'name';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type'] = 'text';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size'] = '30';
$default_fd[$table][$field]['fd_help'] = 'A unique name for the slideshow - no spaces or special characters';
$default_fd[$table][$field]['fd_mode'] = 'basic';
$default_fd[$table][$field]['fd_tabname'] = 'Content';

//Width
$field = 'width';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type'] = 'integer';
$default_fd[$table][$field]['fd_help'] = 'Width in pixels for the slideshow';
$default_fd[$table][$field]['fd_mode'] = 'basic';
$default_fd[$table][$field]['fd_tabname'] = 'Content';

//Height
$field = 'height';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type'] = 'integer';
$default_fd[$table][$field]['fd_help'] = 'Height in pixels for the slideshow';
$default_fd[$table][$field]['fd_mode'] = 'basic';
$default_fd[$table][$field]['fd_tabname'] = 'Content';

//Delay
$field = 'delay';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_type'] = 'list';
$default_fd[$table][$field]['fd_options'] = "0:default\n500:0.5 seconds\n1000:1 second\n1500:1.5 seconds\n2000:2 seconds\n3000:3 seconds\n4000:4 seconds\n5000:5 seconds\n6000:6 seconds\n7000:7 seconds\n8000:8 seconds\n9000:9 seconds\n10000:10 seconds\n15000:15 seconds\n20000:20 seconds\n30000:30 seconds\n60000:60 seconds";
$default_fd[$table][$field]['fd_help'] = 'The length of the pause between each image change';
$default_fd[$table][$field]['fd_mode'] = 'basic';
$default_fd[$table][$field]['fd_tabname'] = 'Content';

//Fade Speed
$field = 'fadespeed';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_name'] = 'Fade speed';
$default_fd[$table][$field]['fd_type'] = 'list';
$default_fd[$table][$field]['fd_options'] = "0:default\n100:1/10 second\n250:1/4 second\n500:1/2 second\n1000:1 second\n1500:1.5 seconds\n2000:2 seconds";
$default_fd[$table][$field]['fd_help'] = 'The speed of the fade between images';
$default_fd[$table][$field]['fd_mode'] = 'basic';
$default_fd[$table][$field]['fd_tabname'] = 'Content';