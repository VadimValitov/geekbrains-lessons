<?php

class Applicant implements Observer
{
    private $name;
    private $email;
    private $experience;
    private $vacancy;

    public function __construct(string $name, string $email, int $experience, string $vacancy)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
        $this->vacancy = $vacancy;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getVacancy(): string
    {
        return $this->vacancy;
    }

    public function notify(string $data)
    {
        echo sprintf('%s %s %s %s', $this->name, $this->email, $this->vacancy, $data) . PHP_EOL;
    }
}
