<?php

declare(strict_types=1);

namespace Conf\Repository;

use Conf\Collection\MeetingCollection;
use Conf\Entity\Meeting;
use Conf\Exception\MeetingNotFoundException;
use PDO;

final class MeetingRepository
{
    /**
     * @var PDO
     */
    private $pdoMeeting;

    public function __construct(PDO $pdoMeeting)
    {
        $this->pdoMeeting = $pdoMeeting;
    }

    public function fetchAll() : MeetingCollection
    {
        $result = $this->pdoMeeting->query('SELECT * FROM meeting');
        $meetings = [];
        while ($meeting = $result->fetch()) {
            $meetings[] = new Meeting($meeting['nameMeeting']);
        }
        return new MeetingCollection(...$meetings);
    }

    /**
     * @param string $nameMeeting
     * @return Meeting
     */
    public function get(string $nameMeeting) : Meeting
    {
        $statement = $this->pdoMeeting->prepare('SELECT * FROM meeting WHERE nameMeeting = :nameMeeting');
        $statement->execute([':nameMeeting' => $nameMeeting]);
        $meeting = $statement->fetch();
        $meetingObject = new Meeting($meeting['nameMeeting']);
        $meetingObject->setDescriptionMeeting($meeting['descriptionMeeting']);
        $meetingObject->setDateDebut($meeting['date_debut']);
        $meetingObject->setDateFin($meeting['date_fin']);
        if (!$meeting) {
            throw new MeetingNotFoundException();
        }
        return $meetingObject;
    }
}