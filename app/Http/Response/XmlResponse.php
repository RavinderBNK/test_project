<?php

namespace App\Http\Response;

use App\Http\Response\Interfaces\ResponseInterface;
use Spatie\ArrayToXml\ArrayToXml;

class XmlResponse extends AbstractResponse implements ResponseInterface
{
    public function response(): void
    {
        header($this->status);
        header("Content-type: text/xml");
        echo ArrayToXml::convert($this->data);
        return;
    }
}