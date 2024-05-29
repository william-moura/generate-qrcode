<?php

declare(strict_types=1);

namespace WilliamMoura\GenerateQrcode\Providers;

abstract class AbstractProvider
{
    protected $client;
    protected $data;
    protected float $width = 500;
    protected float $height = 300;
    public function __construct()
    {
    }

    abstract public function createQrCode();

    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }
    public function setWidth(float $width): self
    {
        $this->width = $width;
        return $this;
    }
    public function setHeight(float $height): self
    {
        $this->height = $height;
        return $this;
    }
}
