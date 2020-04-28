<?php

namespace App\Http\Response\Factory;

use App\Http\Response\Interfaces\ResponseInterface;

class ResponseFactory
{
    const RESPONSE_MAPPING = [
        'JSON' => 'App\Http\Response\JsonResponse',
        'XML' => 'App\Http\Response\XmlResponse',
    ];

    /**
     * @param string $type
     * @param array $data
     * @param string $status
     * @return ResponseInterface
     */
    public static function createResponse(string $type, array $data, string $status = ResponseInterface::OK_200) : ResponseInterface
    {
        $responseClass = self::RESPONSE_MAPPING[$type];
        return new $responseClass($data, $status);
    }
}