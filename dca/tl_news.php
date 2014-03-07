<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package   news_simple 
 * @author    Felix Pfeiffer : Neue Medien 
 * @license   LGPL 
 * @copyright 2013 Felix Pfeiffer : Neue Medien 
 */


/**
 * Table tl_news 
 */
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('teaser;','teaser;{newstext_legend},newsText;',$GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_news']['fields']['newsText'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_news']['newsText'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'textarea',
    'eval'                    => array('rte'=>'tinyMCE', 'tl_class'=>'clr'),
    'sql'                     => "text NULL"
);


/**
 * Button anpassen
 */
if($GLOBALS['TL_CONFIG']['newsSimpleNoElements'] == 1)
{
    $GLOBALS['TL_DCA']['tl_news']['config']['ctable'] = false;
    $GLOBALS['TL_DCA']['tl_news']['config']['switchToEdit'] = false;

    unset($GLOBALS['TL_DCA']['tl_news']['list']['operations']['editmeta']);

    $GLOBALS['TL_DCA']['tl_news']['list']['operations']['edit']['href'] = 'act=edit';
}