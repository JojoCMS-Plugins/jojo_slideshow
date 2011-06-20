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

class JOJO_Plugin_Jojo_slideshow extends JOJO_Plugin
{
    function applyContentVars($data)
    {
        /* replace [[slideshow:my-slideshow-name]] with the output of the template */
        preg_match_all('/\\[\\[slideshow: ?([0-9a-z-_]+)\\]\\]/i', $data, $matches);
        foreach($matches[1] as $id => $v) {
            $html = JOJO_Plugin_Jojo_slideshow::getSlideshow($matches[1][$id]);
            $data = str_replace($matches[0][$id], $html, $data);
        }
        return $data;
    }

    function getSlideshow($name)
    {
        global $smarty;

        $slideshow = Jojo::selectRow("SELECT * FROM {jojo_slideshow} WHERE name = ? LIMIT 1", array($name));
        if (empty($slideshow['name'])) return false;

        $slideshows = Jojo::selectQuery("SELECT * FROM {jojo_slideshowimage} WHERE slideshowid = ? ORDER BY `displayorder`, `name`", array($slideshow['slideshowid']));
        $slideshow['count'] = count($slideshows);
        $smarty->assign('slideshow', $slideshow);
        $smarty->assign('slideshows', $slideshows);

        $html = $smarty->fetch('jojo_slideshow.tpl');
        return $html;
    }
}