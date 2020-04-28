<?php

namespace App\Http\Response\Interfaces;

interface ResponseInterface
{
    const NOT_FOUND_404 = 'HTTP/1.1 404 Not Found';
    const OK_200 = 'HTTP/1.1 200 OK';
    const BAD_REQUEST_400 = 'HTTP/1.1 400 Bad Request';

    public function response();
}