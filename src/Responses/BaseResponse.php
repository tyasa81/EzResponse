<?php

namespace tyasa81\EzResponse\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;

class BaseResponse implements Responsable, \ArrayAccess 
{
    protected $_ts;
    protected bool $_success;
    protected string $_message;
    protected $_data;
    protected int $_status;
    protected array $_headers;

    /**
     * Create a new class instance.
     */
    public function __construct(
        bool $success=true,
        string $message="__SUCCESS__",
        $data=null,
        int $status=200,
        array $headers=[])
    {
        //
        $this->_success = $success;
        $this->_message = $message;
        $this->_data = $data;
        $this->_status = $status;
        $this->_headers = $headers;
        $this->_ts = intval(microtime(true)*1000);
    }

    public function __get($name) {
        switch($name) {
            case 'success':
                return $this->_success;
            case 'data':
                return $this->_data;
            case 'message':
                return $this->_message;
            case 'status':
                return $this->_status;
            case 'headers':
                return $this->_headers;
            default:
                return null;
        }
    }

    public function __set($name,$value) {
        throw new \Exception("trying to set protected property $name => $value",500);
    }

    public function offsetSet($key, $value): void
    {
        throw new \Exception("trying to set protected property $key => $value",500);
    }

    public function offsetExists($key): bool
    {
        switch($key) {
            case 'success':
                return true;
            case 'data':
                return true;
            case 'message':
                return true;
            case 'status':
                return true;
            case 'headers':
                return true;
            default:
                return false;
        }
    }

    public function offsetUnset($key): void
    {
    }

    public function offsetGet($key): mixed
    {
        switch($key) {
            case 'success':
                return $this->_success;
            case 'data':
                return $this->_data;
            case 'message':
                return $this->_message;
            case 'status':
                return $this->_status;
            case 'headers':
                return $this->_headers;
            default:
                return null;
        }
    }

    public function toResponse($request): Response
    {
        return new Response([
            "success" => $this->_success,
            "message" => $this->_message,
            "data" => $this->_data,
            "ts" => $this->_ts,
        ],$this->_status,$this->_headers);
    }

    public function toArray(): array
    {
        return [
            "success" => $this->_success,
            "message" => $this->_message,
            "data" => $this->_data,
            "ts" => $this->_ts,
        ];
    }
}