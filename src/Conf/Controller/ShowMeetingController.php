<?php

declare(strict_types=1);

namespace Conf\Controller;

use Application\Controller\ErrorController;
use Conf\Exception\MeetingNotFoundException;
use Conf\Repository\MeetingRepository;

final class ShowMeetingController
{
    /**
     * @var string $meeting_list
     */
    private $meetingRepository;

    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        try {
            $meeting = $this->meetingRepository->get($_GET['nameMeeting'] ?? '');
            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }
}