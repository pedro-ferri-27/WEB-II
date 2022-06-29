<?php

namespace APP\Model;

class Provider
{
    private string $cnpj;
    private string $name;
    private float $phone;
    private ?Address $address;

    public function __construct(
        float $cnpj,
        string $name,
        float $phone = null,
        ?Address $address = null,
        
    )
    {
        $this->cnpj = $cnpj;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}
