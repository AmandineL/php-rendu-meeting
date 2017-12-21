<?php

declare(strict_types=1);

namespace Conf\Entity;

final class Meeting
{
    /**
     * @var string $nameMeeting
     */
    private $nameMeeting;
    private $descriptionMeeting;
    private $dateDebut;
    private $dateFin;


    public function __construct(string $nameMeeting)
    {
        $this->nameMeeting = $nameMeeting;
    }

    // Name Meeting
    public function getNameMeeting()
    {
        return $this->nameMeeting;
    }

    public function setNameMeeting($nameMeeting)
    {
        $this->nameMeeting = $nameMeeting;
    }

    // Decription Meeting
    public function setDescriptionMeeting(string $descriptionMeeting)
    {
        $this->descriptionMeeting = $descriptionMeeting;
    }

    public function getDescriptionMeeting()
    {
        return $this->descriptionMeeting;
    }

    // Date de debut du Meeting
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function getDateDebut()
    {
        $dateDebut = date('d m Y', strtotime($this->dateDebut));
        return $dateDebut;
    }

    // Date de fin du Meeting
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getDateFin()
    {
        $dateFin = date('d m Y', strtotime($this->dateFin));
        return $dateFin;
    }

    public function getMeeting()
    {
        return $this;
    }
}