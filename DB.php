<?php

class DB
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function save()
    {
        echo "Almacenando...." . $this->name;
    }
}