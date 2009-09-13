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

/* Edit slideshow */
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_url='admin/edit/jojo_slideshow'");
if (!count($data)) {
    echo "jojo_slideshow: Adding <b>Edit Slideshow</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Edit Slideshow', pg_link='Jojo_Plugin_Admin_Edit', pg_url='admin/edit/jojo_slideshow', pg_parent = ?, pg_order=4, pg_mainnav='yes', pg_secondarynav='no', pg_footernav='no', pg_breadcrumbnav='yes', pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_index='no'", array($_ADMIN_CONTENT_ID));
}

/* Edit slideshow images */
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_url='admin/edit/jojo_slideshowimage'");
if (!count($data)) {
    echo "jojo_slideshow: Adding <b>Edit Slideshow</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Slideshow Images', pg_link='Jojo_Plugin_Admin_Edit', pg_url='admin/edit/jojo_slideshowimage', pg_parent = ?, pg_order=5, pg_mainnav='yes', pg_secondarynav='no', pg_footernav='no', pg_breadcrumbnav='yes', pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_index='no'", array($_ADMIN_CONTENT_ID));
}