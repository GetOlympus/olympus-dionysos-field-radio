# Dionysos Radio Field
> This component is a part of the **Olympus Dionysos fields** for **WordPress**.

```sh
composer require getolympus/olympus-dionysos-field-radio
```

---

[![Olympus Component][olympus-image]][olympus-url]
[![CodeFactor Grade][codefactor-image]][codefactor-url]
[![Packagist Version][packagist-image]][packagist-url]
[![MIT][license-image]][license-blob]

---

<p align="center">
    <img src="https://github.com/GetOlympus/olympus-dionysos-field-radio/blob/master/assets/field-radio-64.png" />
</p>

---

## Field initialization

Use the following lines to add a `radio field` in your **WordPress** admin pages or custom post type meta fields:

```php
return \GetOlympus\Dionysos\Field\Radio::build('my_radio_field_id', [
    'title'       => 'Select a Minion that you may know',
    'default'     => 'kevin',
    'description' => 'A very important question! Pay attention to it ;)',
    'mode'        => 'default',
    'options'     => [
        'kevin' => 'Kevin',
        'mel'   => 'Mel',
        'dave'  => 'Dave',
        'bob'   => 'Bob',
    ],

    /**
     * Texts definition
     * @see the `Texts definition` section below
     */
    't_no_options' => 'The field does no have any options.',
]);
```

## Variables definition

The field display depends on `mode` value:
-  set to `default` (or `inline`), labels options will be displayed on the same line, as an `inline-block` display
-  set to `block`, labels options will be displayed each per line, as a `block` display
-  set to `image`, labels options will be displayed as `default` mode, with images and overlay text label
-  set to `image-block`, labels options will be displayed as `block` mode, with images and overlay text label
-  set to `group`, labels options will be displayed as a simple but efficient group of choices

### In all cases

| Variable      | Type    | Default value if not set | Accepted values |
| ------------- | ------- | ------------------------ | --------------- |
| `title`       | String  | `'Radio button'` | *empty* |
| `default`     | String  | *empty string* | One of the options keys |
| `description` | String  | *empty* | *empty* |
| `mode`        | String  | `default` | see [Variables definition](#variables-definition) |
| `options`     | Array   | *empty* | Array with a key/value options |

## Texts definition

| Code | Default value | Definition |
| ---- | ------------- | ---------- |
| `t_no_options` | The field does no have any options. | Used as an error in the case no options have been set |

## Retrive data

Retrieve your value from Database with a simple `get_option('my_radio_field_id', '')` (see [WordPress reference][getoption-url]):

```php
// Get radio from Database
$radio = get_option('my_radio_field_id', '');

// Display value
echo '<h2><b>'.$radio.'</b>, master of the ceremony</h2>';
```

## Image mode

To display images instead of simple labels, set the `mode` to `image` and build the field's options as follow:

```php
$options = [
    'key-name' => [
        'label' => 'Label item',
        'image' => 'https://label-image-url',
    ],
];
```

Below, a full example:

```php
return \GetOlympus\Dionysos\Field\Radio::build('my_radio_field_id', [
    'title'       => 'Select a Minion that you may know',
    'default'     => 'dave',
    'description' => 'A very important question! Pay attention to it ;)',
    'mode'        => 'image',
    'options'     => [
        'kevin' => [
            'label' => 'Kevin',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/1/1d/Kevin_minions.png/revision/latest/scale-to-width-down/350?cb=20170703052012',
        ],
        'mel'   => [
            'label' => 'Mel',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/2/2e/Mel_Minion_01.png/revision/latest/scale-to-width-down/350?cb=20160717135212',
        ],
        'dave'  => [
            'label' => 'Dave',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/7/71/Daveholdingcupcake.png/revision/latest/scale-to-width-down/350?cb=20130717145735',
        ],
        'bob'   => [
            'label' => 'Bob',
            'image' => 'https://vignette.wikia.nocookie.net/despicableme/images/c/ca/Bob-from-the-minions-movie.jpg/revision/latest/scale-to-width-down/350?cb=20151224154354',
        ],
    ],

    /**
     * Texts definitions
     * @see the `Texts definitions` section below
     */
    't_no_options' => 'The field does no have any options.',
]);
```

## Release History

0.0.19
-  Remove Checkbox mode from field

0.0.18
-  Fix image label display for small images

0.0.17
-  Add group mode with native WordPress display

## Contributing

1.  Fork it (<https://github.com/GetOlympus/olympus-dionysos-field-radio/fork>)
2.  Create your feature branch (`git checkout -b feature/fooBar`)
3.  Commit your changes (`git commit -am 'Add some fooBar'`)
4.  Push to the branch (`git push origin feature/fooBar`)
5.  Create a new Pull Request

---

**Built with ♥ by [Achraf Chouk](https://github.com/crewstyle "Achraf Chouk") ~ (c) since a long time.**

<!-- links & imgs dfn's -->
[olympus-image]: https://img.shields.io/badge/for-Olympus-44cc11.svg?style=flat-square
[olympus-url]: https://github.com/GetOlympus
[codefactor-image]: https://www.codefactor.io/repository/github/GetOlympus/olympus-dionysos-field-radio/badge?style=flat-square
[codefactor-url]: https://www.codefactor.io/repository/github/getolympus/olympus-dionysos-field-radio
[getoption-url]: https://developer.wordpress.org/reference/functions/get_option/
[license-blob]: https://github.com/GetOlympus/olympus-dionysos-field-radio/blob/master/LICENSE
[license-image]: https://img.shields.io/badge/license-MIT_License-blue.svg?style=flat-square
[packagist-image]: https://img.shields.io/packagist/v/getolympus/olympus-dionysos-field-radio.svg?style=flat-square
[packagist-url]: https://packagist.org/packages/getolympus/olympus-dionysos-field-radio