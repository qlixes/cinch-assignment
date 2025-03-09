<?php

namespace App\Traits;

trait ResponseTrait
{
    private int $code;
    private string $message;
    private mixed $data;

    function setError(int $httpCode)
    {
        return response()->json([
            "code"      => "111",
            "message"   => $this->getMessage(),
        ], $httpCode);
    }

    function setSuccess(int $httpCode)
    {
        return response()->json([
            "code"      => "000",
            "message"   => $this->getMessage(),
            "data"      => $this->getData(),
        ], $httpCode);
    }

    function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    function getMessage()
    {
        return $this->message;
    }

    function setData(mixed $data)
    {
        $this->data = $data;

        return $this;
    }

    function getData()
    {
        return $this->data;
    }
}
