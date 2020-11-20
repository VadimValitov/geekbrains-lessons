<?php

spl_autoload_register(function ($name) {
    include $name . '.php';
});

$handHunter = new HandHunter();

$phpApplicant1 = new Applicant('php applicant', 'php@applicant.ru', 5, 'php');
$phpApplicant2 = new Applicant('php applicant2', 'php2@applicant.ru', 10, 'php');
$jsApplicant = new Applicant('js applicant', 'js@applicant.ru', 8, 'js');

$handHunter->addApplicant($phpApplicant1);
$handHunter->addApplicant($phpApplicant2);
$handHunter->addApplicant($jsApplicant);

$handHunter->postVacancy('php', 'Текст вакансии на php');
$handHunter->postVacancy('js', 'Текст вакансии на js');

$handHunter->removeApplicant($phpApplicant1);
$handHunter->postVacancy('php', 'Текст2 вакансии на php');
