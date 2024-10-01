<?php

namespace tyasa81\EzResponse\Responses;

class TooManyRequestResponse extends BaseResponse
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        $data=null,
        array $headers=[])
    {
        //
        $this->_success = false;
        $this->_message = "__TOO_MANY_ATTEMPTS__";
        $this->_data = $data;
        $this->_status = 429;
        $this->_headers = $headers;
        $this->_ts = intval(microtime(true)*1000);
    }
}
