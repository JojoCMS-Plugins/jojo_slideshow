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

Jojo::addFilter('content', 'applyContentVars', 'jojo_slideshow');

/* add an icon onto the editors for inserting slideshows */
$vars = array('name'=>array('name'=>'name','description'=>'Slideshow name (as entered on /edit Slideshows page)'));
$slideshow = array(
                'name'=>'Image slideshow',
                'format'=>'[[slideshow: [name]]]',
                'description'=>'',
                'vars'=>$vars,
                'icon'=>'images/jojo_slideshow.png'
                );
Jojo::addContentVar($slideshow);

$_options[] = array(
    'id'          => 'slideshow_filter',
    'category'    => 'Slideshow',
    'label'       => 'Filter for maps in',
    'description' => 'The plugin can check for the filter text in templates or body content, or run twice to check both. (force refresh to update the api.txt after changing this option)',
    'type'        => 'radio',
    'default'     => 'both',
    'options'     => 'content,template,both',
    'plugin'      => 'jojo_slideshow'
);


$slideshow_filter = Jojo::getOption('slideshow_filter');
/* Map filter */
if (!$slideshow_filter || $slideshow_filter=='content' || $slideshow_filter=='both') Jojo::addFilter('content', 'applyContentVars', 'jojo_slideshow');
if (!$slideshow_filter || $slideshow_filter=='template' || $slideshow_filter=='both') Jojo::addFilter('output', 'applyContentVars', 'jojo_slideshow');