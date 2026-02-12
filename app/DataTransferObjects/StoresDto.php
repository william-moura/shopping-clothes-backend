<?php

namespace App\DataTransferObjects;

class StoresDto
{
    public string $socialReason;
    public string $fantasyName;
    public string $cnpj;
    public string $email;
    public string $phone;
    public string $picture;

    public function __construct(string $socialReason, string $fantasyName, string $cnpj, string $email, string $phone, string $picture)
    {
        $this->socialReason = $socialReason;
        $this->fantasyName = $fantasyName;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->phone = $phone;
        $this->picture = $picture;
    }
}