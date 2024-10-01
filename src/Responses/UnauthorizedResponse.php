<?php

namespace tyasa81\EzResponse\Responses;

class UnauthorizedResponse extends BaseResponse
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
        $this->_message = "__UNAUTHORIZED__";
        $this->_data = $data;
        $this->_status = 401;
        $this->_headers = $headers;
        $this->_ts = intval(microtime(true)*1000);
    }
}
