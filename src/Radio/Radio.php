<?php

namespace GetOlympus\Field;

use GetOlympus\Hera\Field\Controller\Field;
use GetOlympus\Hera\Translate\Controller\Translate;

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
     * @var string
     */
    protected $faIcon = 'fa-dot-circle-o';

    /**
     * @var string
     */
    protected $template = 'radio.html.twig';

    /**
     * Prepare HTML component.
     *
     * @param array $content
     * @param array $details
     *
     * @since 0.0.1
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

            // details
            'post' => 0,
            'prefix' => '',
            'template' => 'pages',

            // texts
            't_no_options' => Translate::t('radio.no_options', [], 'radiofield'),
        ];

        // Build defaults data
        $vars = array_merge($defaults, $content);

        // Retrieve field value
        $vars['val'] = $this->getValue($details, $vars['default'], $content['id'], true);

        // Update vars
        $this->getField()->setVars($vars);
    }
}
