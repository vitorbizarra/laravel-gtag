<?php

namespace VitorBizarra\GoogleAnalytics;

class GoogleAnalytics
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $domain;

    /**
     * @var bool
     */
    protected $enabled;

    public function __construct($id, $domain, $enabled)
    {
        $this->id = $id;
        $this->domain = $domain;
        $this->enabled = $enabled;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function enable()
    {
        $this->enabled = true;
    }

    public function disable()
    {
        $this->enabled = false;
    }
}
