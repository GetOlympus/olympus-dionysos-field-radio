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
 */

class Radio extends Field
{
    /**
     * @var string
     */
    protected $style = 'css'.S.'radio.css';

    /**
     * @var string
     */
    protected $template = 'radio.html.twig';

    /**
     * @var string
     */
    protected $textdomain = 'radiofield';

    /**
     * Prepare defaults.
     *
     * @return array
     */
    protected function getDefaults()
    {
        return [
            'title' => Translate::t('radio.title', $this->textdomain),
            'default' => '',
            'description' => '',
            'mode' => '',
            'multiple' => false,
            'options' => [],

            // texts
            't_no_options' => Translate::t('radio.errors.no_options', $this->textdomain),
        ];
    }

    /**
     * Prepare variables.
     *
     * @param  object  $value
     * @param  array   $contents
     *
     * @return array
     */
    protected function getVars($value, $contents)
    {
        // Available mode display: "inline" === "default"
        $modes = ['default', 'block', 'image', 'image-block', 'inline'];

        // Get contents
        $vars = $contents;

        // Update value
        $vars['value'] = !is_array($value) ? [$value] : $value;

        // Mode
        $vars['mode'] = isset($vars['mode']) ? $vars['mode'] : '';
        $vars['mode'] = in_array($vars['mode'], $modes) ? $vars['mode'] : 'default';

        // Update vars
        return $vars;
    }
}
