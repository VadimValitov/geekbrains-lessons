<?php

class Request
{
    private $data;
    private $method;
    private $path;

    public function __construct($data, $method, $path)
    {
        $this->data = $data;
        $this->method = $method;
        $this->path = $path;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getPath()
    {
        return $this->path;
    }
}
