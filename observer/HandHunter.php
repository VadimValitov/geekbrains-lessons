<?php

class HandHunter
{
    private $observers;

    public function addApplicant(Observer $observer)
    {
        $this->observers[$observer->getVacancy()][$observer->getEmail()] = $observer;
    }

    public function removeApplicant(Observer $observer)
    {
        unset($this->observers[$observer->getVacancy()][$observer->getEmail()]);
    }

    public function postVacancy($type, $text)
    {
        if (empty($this->observers[$type])) {
            return;
        }

        foreach ($this->observers[$type] as $observer) {
            $observer->notify($text);
        }
    }
}
