<?php

namespace App\Mcp\Tools\Traits;

use Illuminate\Support\Facades\Validator;
use Illuminate\Translation\Translator;
use Laravel\Mcp\Request;

trait ValidatesRequests
{
    /**
     * Validate the request data against the given rules.
     *
     * @param  array<string, mixed>  $rules
     * @param  array<int, string>  $nonBlankable
     * @param  array<string, string>  $messages
     * @return array<string, mixed>
     */
    protected function validated(Request $request, array $rules, array $nonBlankable = [], array $messages = []): array
    {
        $data = $request->all();

        foreach ($nonBlankable as $field) {
            if (($data[$field] ?? null) === '') {
                $data[$field] = null;
            }
        }

        $validator = Validator::make($data, $rules, $messages);
        $validator->setTranslator(new Translator(app('translation.loader'), 'en'));

        return $validator->validate();
    }
}
