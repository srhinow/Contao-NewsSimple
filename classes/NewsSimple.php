<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package News
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;

class NewsSimple extends \Frontend
{
    public function addSimpleNewsText($objNewsTemplate, $arrArticle, $objModule)
    {
        global $objPage;

        if(strlen($arrArticle['newsText'])>0)
        {
            // Clean the RTE output
            if ($objPage->outputFormat == 'xhtml')
            {
                $strText = \StringUtil::toXhtml($arrArticle['newsText']);
            }
            else
            {
                $strText = \StringUtil::toHtml5($arrArticle['newsText']);
            }

// Add the static files URL to images
            if (TL_FILES_URL != '')
            {
                $path = $GLOBALS['TL_CONFIG']['uploadPath'] . '/';
                $strText = str_replace(' src="' . $path, ' src="' . TL_FILES_URL . $path, $strText);
            }

            $objTemplate = new \FrontendTemplate('ce_text');

            $objTemplate->text = \StringUtil::encodeEmail($strText);
            $objTemplate->class = 'ce_text';

            // Add an image
            if ($arrArticle['addImage'])
            {
                $arrImage = $arrArticle;
                $arrImage['title'] = $arrArticle['alt'];
                $this->addImageToTemplate($objTemplate, $arrImage);
            }

            $strText = $objTemplate->parse();

            if($GLOBALS['TL_CONFIG']['newsSimpleNoElements'] == 1)
            {
                $objNewsTemplate->text = $strText;
            }
            else
            {
                $objNewsTemplate->text = $strText . $objNewsTemplate->text;
            }

        }
    }
}