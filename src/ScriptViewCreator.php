<?php

namespace VitorBizarra\GoogleAnalytics;

use Illuminate\View\View;
use VitorBizarra\GoogleAnalytics\Exceptions\GoogleAnalyticsIdNotSetException;

class ScriptViewCreator
{
    /**
     * @var \VitorBizarra\GoogleAnalytics\GoogleAnalytics
     */
    protected $googleAnalytics;

    public function __construct(GoogleAnalytics $googleAnalytics)
    {
        $this->googleAnalytics = $googleAnalytics;
    }

    public function create(View $view)
    {
        if ($this->googleAnalytics->isEnabled() && empty($this->googleAnalytics->getId())) {
            throw new GoogleAnalyticsIdNotSetException;
        }

        $view
            ->with('enabled', $this->googleAnalytics->isEnabled())
            ->with('id', $this->googleAnalytics->getId())
            ->with('domain', $this->googleAnalytics->getDomain());
    }
}
