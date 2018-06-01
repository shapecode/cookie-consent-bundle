# Shapecode Cookie Consent Bundle

[![Latest Stable Version](https://poser.pugx.org/shapecode/cookie-consent-bundle/v/stable)](https://packagist.org/packages/shapecode/cookie-consent-bundle)
[![Total Downloads](https://poser.pugx.org/shapecode/cookie-consent-bundle/downloads)](https://packagist.org/packages/shapecode/cookie-consent-bundle)
[![Latest Unstable Version](https://poser.pugx.org/shapecode/cookie-consent-bundle/v/unstable)](https://packagist.org/packages/shapecode/cookie-consent-bundle)
[![License](https://poser.pugx.org/shapecode/cookie-consent-bundle/license)](https://packagist.org/packages/shapecode/cookie-consent-bundle)

**Symfony Bundle for the popular [Cookie Consent plugin](https://cookieconsent.insites.com/).**

## Install

Via Composer

``` bash
$ composer require shapecode/cookie-consent-bundle
```

Enable the bundle in your kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Shapecode\Bundle\CookieConsentBundle\ShapecodeCookieConsentBundle(),
    );
}
```

## Usage

Configure the bundle:

``` yaml
shapecode_cookie_consent:
    // url to your privacy policy 
    policy_url: http://example.com/privacy
    
    // default layout options
    layout:
        position: top  
        static: false
        theme: edgeless
        palette:
            popup:
                background: #252e39
                text: #ffffff
            button:
                background: #14a7d0
                text: #ffffff
```

**Note:** Translations are in `ShapecodeCookieConsent.de` domain.

Use the `cookie_consent` method in your Twig template:
`{{ cookie_consent() }}`

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.