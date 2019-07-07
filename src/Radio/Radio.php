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
        // Get contents
        $vars = $contents;

        // Mode
        $vars['mode'] = isset($contents['mode']) ? $contents['mode'] : '';
        $vars['mode'] = in_array($vars['mode'], ['default', 'image']) ? $vars['mode'] : 'default';

        // Update vars
        return $vars;
    }
}
