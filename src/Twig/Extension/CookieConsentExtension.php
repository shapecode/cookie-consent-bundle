<?php

declare(strict_types=1);

namespace Shapecode\Bundle\CookieConsentBundle\Twig\Extension;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CookieConsentExtension extends AbstractExtension
{
    /** @var array<string, mixed> */
    protected array $config;

    /**
     * @param array<string, mixed> $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @inheritdoc
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('cookie_consent', [$this, 'getCookieConsent'], ['is_safe' => ['html'], 'needs_environment' => true]),
        ];
    }

    public function getCookieConsent(Environment $environment): string
    {
        $template = $this->config['template'] ?? '@ShapecodeCookieConsent/cookie_consent.html.twig';

        return $environment->render($template, [
            'config' => $this->config,
        ]);
    }
}
