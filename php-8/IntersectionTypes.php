<?php

interface HasName
{
    public function getName(): string;
}

interface HasBrand
{
    public function getBrand(): string;
}


class Test implements HasName, HasBrand
{
    function getBrand(): string
    {
        return "";
    }
    function getName(): string
    {
        return "";
    }
}
