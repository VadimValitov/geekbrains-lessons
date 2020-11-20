<?php

interface Observer
{
    public function notify(string $data);
    public function getName();
    public function getEmail();
    public function getVacancy();
}
