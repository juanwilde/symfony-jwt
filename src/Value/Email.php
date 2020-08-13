<?php

namespace App\Value;

class Email
{
    private string $value;

    public function __construct(string $value)
    {
        if (!\filter_var($value, \FILTER_VALIDATE_EMAIL)) {
            throw new \LogicException('Invalid email');
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}