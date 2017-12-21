<?php

declare(strict_types=1);

namespace Conf\Controller;

use Conf\Repository\MeetingRepository;

final class MeetingController
{
    /**
     * @var string $meeting_repository
     */
    private $meetingRepository;

    /**
     * MeetingController constructor.
     * @param string $meetingRepository
     */
    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        $meetings = $this->meetingRepository->fetchAll();

        ob_start();
        include __DIR__.'/../../../views/meeting.phtml';
        return ob_get_clean();
    }
}