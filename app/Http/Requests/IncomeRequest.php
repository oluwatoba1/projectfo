<?php

namespace App\Http\Requests;

use App\Income;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class IncomeRequest extends FormRequest
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
            'user_id'       => 'required|integer',
            'amount'        => 'required|integer',
            'description'   => 'required|string'
        ];
    }

    public function persist()
    {
        Income::create([
            'user_id'       => auth()->id(),
            'amount'        => request('amount'),
            'description'   => request('description')
        ]);
    }
}
