<?php

namespace Shapecode\Bundle\CookieConsentBundle\Twig\Extension;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class CookieConsentExtension
 *
 * @package Shapecode\Bundle\CookieConsentBundle\Twig\Extension
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class CookieConsentExtension extends AbstractExtension
{

    /** @var array */
    protected $config;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @inheritdoc
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('cookie_consent', [$this, 'getCookieConsent'], ['is_safe' => ['html'], 'needs_environment' => true])
        ];
    }

    /**
     * @param Environment $environment
     *
     * @return string
     */
    public function getCookieConsent(Environment $environment)
    {
        $template = ($this->config['template'] !== null)?$this->config['template']:'@ShapecodeCookieConsent/cookie_consent.html.twig';

        return $environment->render($template,[
            'config' => $this->config
        ]);
    }
}
