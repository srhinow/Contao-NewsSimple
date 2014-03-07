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
 * HOOKS
 *
 * Hooks are stored in a global array called "TL_HOOKS". You can register your
 * own functions by adding them to the array.
 *
 * $GLOBALS['TL_HOOKS'] = array
 * (
 *    'hook_1' => array
 *    (
 *       array('MyClass', 'myPostLogin'),
 *       array('MyClass', 'myPostLogout')
 *    )
 * );
 *
 * Hooks allow you to add functionality to the core without having to modify the
 * source code by registering callback functions to be executed on a particular
 * event. For more information see https://contao.org/manual.html.
 */
$GLOBALS['TL_HOOKS']['parseArticles']['newsSimple'] = array('NewsSimple','addSimpleNewsText');