<?php

namespace DG\Dissertation\Admin\Http\Requests;

use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property \Illuminate\Http\UploadedFile $thumbnail
 * @property string $slug
 */
class UpdateArticle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'thumbnail' => ['nullable', 'file', 'image', 'mimes:jpg,png,jpeg,svg'],
            'description' => ['required', 'string']
        ];
    }

}
