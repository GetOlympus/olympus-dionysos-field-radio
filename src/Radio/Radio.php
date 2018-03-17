<?php

namespace GetOlympus\Field;

use GetOlympus\Zeus\Field\Controller\Field;
use GetOlympus\Zeus\Translate\Controller\Translate;

/**
 * Builds Radio field.
 *
 * @package Field
 * @subpackage Radio
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 *
 * @see https://olympus.readme.io/v1.0/docs/radio-field
 *
 */

class Radio extends Field
{
    /**
     * Prepare variables.
     */
    protected function setVars()
    {
        $this->getModel()->setFaIcon('fa-dot-circle-o');
        $this->getModel()->setStyle('css'.S.'radio.css');
        $this->getModel()->setTemplate('radio.html.twig');
    }

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     */
    protected function getVars($content, $details = [])
    {
        // Build defaults
        $defaults = [
            'id' => '',
            'title' => Translate::t('radio.title', [], 'radiofield'),
            'default' => '',
            'description' => '',
            'mode' => '',
            'options' => [],

            // texts
            't_no_options' => Translate::t('radio.no_options', [], 'radiofield'),
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($content['id'], $details, $vars['default']);

        // Update vars
        $this->getModel()->setVars($vars);
    }
}
