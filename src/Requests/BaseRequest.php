<?php

namespace tyasa81\EzResponse\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        if(request()->header("Accept-Language")) {
            $supportedLocales = config('ezresponse.supportedLocales');
            $rawLocales = explode(',', request()->header("Accept-Language"));

            foreach($rawLocales as $rawLocale) {
                if (strpos($rawLocale, ';') !== false) {
                    $rawLocale = substr($rawLocale, 0, strpos($rawLocale, ';'));
                }
                if(in_array($rawLocale, $supportedLocales)) {
                    app()->setLocale($rawLocale);
                    break;
                }
            }
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
