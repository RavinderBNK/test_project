<?php

namespace App\Http\Response;

use App\Http\Response\Interfaces\ResponseInterface;

abstract class AbstractResponse
{
    /**
     * @var string
     */
    protected $status;
    /**
     * @var array
     */
    protected $data;

    /**
     * AbstractResponse constructor.
     * @param array $data
     * @param string $status
     */
    public function __construct(array $data, string $status)
    {
        $this->data = $data;
        $this->status = $status;
    }
}