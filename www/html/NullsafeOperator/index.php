<?php

class Lingerie
{
    public function __construct(
        public string $size,
        public string $color
    )
    {
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}

class Shop
{
    public Lingerie | null $lingerie = null;
}

$shop = new Shop();

// Fatal error: Uncaught Error: Call to a member function getColor() on null
$shop->lingerie->getColor();

// ~ php7まではif文がいる
if($shop->lingerie !== null)
{
    $shop->lingerie->getColor();
}

// php8 Nullsafe operatorを使えば、これでOK
$shop->lingerie?->getColor();
