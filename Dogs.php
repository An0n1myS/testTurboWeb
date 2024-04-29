<?php

class Dogs
{
    protected $breed;

    public function __construct($breed)
    {
        $this->breed = $breed;
    }

    public function makeSound()
    {
        switch ($this->breed) {
            case 'shiba-inu':
            case 'mops':
            case 'plush-labrador':
                return "woof! woof!";
            case 'dachshund':
            case 'rubber-dachshund':
                return "woof!";
            default:
                return "Unknown breed";
        }
    }

    public function hunt()
    {
        switch ($this->breed) {
            case 'shiba-inu':
            case 'plush-labrador':
                return "I'm hunting!";
            case 'mops':
            case 'dachshund':
            case 'rubber-dachshund':
                return "I'm too lazy to hunt.";
            default:
                return "Unknown breed";
        }
    }
}