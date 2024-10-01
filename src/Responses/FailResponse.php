<?php

namespace tyasa81\EzResponse\Responses;

class FailResponse extends BaseResponse
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        $message="__INVALID_DATA__",
        $data=null,
        array $headers=[])
    {
        //
        $this->_success = false;
        $this->_message = $message;
        $this->_data = $data;
        $this->_status = 422;
        $this->_headers = $headers;
        $this->_ts = intval(microtime(true)*1000);
    }
}
