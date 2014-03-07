<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * System configuration
 */

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{simpleNews_legend},newsSimpleNoElements';

$GLOBALS['TL_DCA']['tl_settings']['fields']['newsSimpleNoElements'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['newsSimpleNoElements'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'m12')
);