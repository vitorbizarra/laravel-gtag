<?php

namespace VitorBizarra\Gtag;

use Illuminate\View\View;
use VitorBizarra\Gtag\Exceptions\GtagIdNotSetException;

class ScriptViewCreator
{
    /**
     * @var \VitorBizarra\Gtag\Gtag
     */
    protected $gtag;

    public function __construct(Gtag $gtag)
    {
        $this->gtag = $gtag;
    }

    public function create(View $view)
    {
        if ($this->gtag->isEnabled() && empty($this->gtag->getId())) {
            throw new GtagIdNotSetException;
        }

        $view
            ->with('enabled', $this->gtag->isEnabled())
            ->with('id', $this->gtag->getId())
            ->with('domain', $this->gtag->getDomain());
    }
}
