<?php

declare(strict_types=1);

namespace Application\Router;

use Application\Controller\IndexController;
use Application\Controller\LecturerController;
use Cinema\Controller\FilmController;
use Cinema\Controller\ShowFilmController;
use Conf\Controller\MeetingController;
use Conf\Controller\ShowMeetingController;
use Exception;

use function explode;
use function preg_match;
use function substr;
use function urldecode;

final class ParseUriStaticNameHelper implements ParseUriHelper
{
    /**
     * @param string $requestUri
     * @return string
     * @throws Exception
     */
    public function parseUri(string $requestUri): string
    {
        $requestUri = substr($requestUri, 19);
        if ($requestUri === '/') {
            $requestUri = substr($requestUri, 1);
        }

        if ($requestUri === '/film') {
            return FilmController::class;
        }
        if ($requestUri === '/meeting') {
            return MeetingController::class;
        }

        if (preg_match('#/meeting/.*#', $requestUri)) {
            $requestUriParams = explode('/', $requestUri);
            $_GET['nameMeeting'] = urldecode($requestUriParams[2]);
            return ShowMeetingController::class;
        }

        if (preg_match('#/film/.*#', $requestUri)) {
            $requestUriParams = explode('/', $requestUri);
            $_GET['name'] = urldecode($requestUriParams[2]);
            return ShowFilmController::class;
        }

        if (preg_match('#/lecturer/.*#', $requestUri)) {
            $requestUriParams = explode('/', $requestUri);
            $_GET['lecturer'] = urldecode($requestUriParams[2]);
            return LecturerController::class;
        }

        return IndexController::class;
    }
}
