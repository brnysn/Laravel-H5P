<?php

namespace brnysn\LaravelH5P\Http\Requests;

use brnysn\LaravelH5P\Models\H5PLibrary;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class FilesStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('upload', H5PLibrary::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => ['required', 'max:100000'],
            'field' => ['required', 'string'],
            'contentId' => ['required', 'string'],
        ];
    }
}
