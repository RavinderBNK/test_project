<?php

namespace App\Http\Response;

use App\Http\Response\Interfaces\ResponseInterface;

/**
 * Class JsonResponse
 * @package App\Http\Response
 */
class JsonResponse extends AbstractResponse implements ResponseInterface
{
    public function response(): void
    {
        header($this->status);
        header('Content-Type: application/json');
        echo json_encode($this->data);
        return;
    }
}