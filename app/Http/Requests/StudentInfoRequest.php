<?php

namespace App\Http\Requests;

use App\Http\Response\JsonResponse;

class StudentInfoRequest
{
    private $error = [];
    /**
     * StudentInfoRequest constructor.
     */
    public function __construct()
    {
        if (empty($_GET['student']) || ((int) $_GET['student'] === 0))
        {
            $this->error = ['message' => 'bad request'];
        }
    }

    /**
     * @return array
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $_GET[$key];
    }
}