<?php

namespace tyasa81\EzCrmClient\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if(request()->header("Accept-Language")) {
            app()->setLocale(request()->header("Accept-Language"));
        }
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => '__FORMDATA_ERROR__',
            'data' => $validator->errors(),
        ], 422));
    }

}
