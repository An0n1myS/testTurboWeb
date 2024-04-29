<?php

require_once 'Dogs.php';
use PHPUnit\Framework\TestCase;

class DogsTest extends TestCase
{
    public function testShibaInuSound()
    {
        $dog = new Dogs('shiba-inu');
        $this->assertEquals('woof! woof!', $dog->makeSound());
    }

    public function testMopsSound()
    {
        $dog = new Dogs('mops');
        $this->assertEquals('woof! woof!', $dog->makeSound());
    }

    public function testDachshundSound()
    {
        $dog = new Dogs('dachshund');
        $this->assertEquals('woof!', $dog->makeSound());
    }

    public function testRubberDachshundSound()
    {
        $dog = new Dogs('rubber-dachshund');
        $this->assertEquals('woof!', $dog->makeSound());
    }

    public function testPlushLabradorSound()
    {
        $dog = new Dogs('plush-labrador');
        $this->assertEquals('woof! woof!', $dog->makeSound());
    }

    public function testShibaInuHunt()
    {
        $dog = new Dogs('shiba-inu');
        $this->assertEquals("I'm hunting!", $dog->hunt());
    }

    public function testMopsHunt()
    {
        $dog = new Dogs('mops');
        $this->assertEquals("I'm too lazy to hunt.", $dog->hunt());
    }

    public function testDachshundHunt()
    {
        $dog = new Dogs('dachshund');
        $this->assertEquals("I'm too lazy to hunt.", $dog->hunt());
    }

    public function testRubberDachshundHunt()
    {
        $dog = new Dogs('rubber-dachshund');
        $this->assertEquals("I'm too lazy to hunt.", $dog->hunt());
    }

    public function testPlushLabradorHunt()
    {
        $dog = new Dogs('plush-labrador');
        $this->assertEquals("I'm hunting!", $dog->hunt());
    }
}
