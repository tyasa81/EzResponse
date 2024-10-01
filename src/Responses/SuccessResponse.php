<?php

namespace tyasa81\EzResponse\Responses;

class SuccessResponse extends BaseResponse
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        $data=null,
        array $headers=[])
    {
        //
        $this->_success = true;
        $this->_message = "__SUCCESS__";
        $this->_data = $data;
        $this->_status = 200;
        $this->_headers = $headers;
        $this->_ts = intval(microtime(true)*1000);
    }
}
