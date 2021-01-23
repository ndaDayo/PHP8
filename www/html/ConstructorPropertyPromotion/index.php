<?php

// ~ php7
class Lingerie
{
    public string $size;

    public string $color;

    public function __construct(string $size, string $color)
    {
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}

// php8~
class LaceKnickers
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

$LaceKnickers = new LaceKnickers("A", "レッド");
echo $LaceKnickers->getColor();
