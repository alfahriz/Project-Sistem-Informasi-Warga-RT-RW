<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class rtRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if ($this->method() == 'PATCH') {
            $nokkrules         = 'required|string|size:4|unique:keluarga,nokk,'.$this->get('id');
            $notelefonrules    = 'sometimes|nullable|numeric|digits_between:10,15|unique:telefon,notelefon,'.$this->get('id').',idtelefon';
        } else {
            $nokkrules         = 'required|string|size:4|unique:keluarga,nokk';
            $notelefonrules    = 'sometimes|nullable|numeric|digits_between:10,15|unique:telefon,notelefon';
        }

        return [
            'nokk'       => $nokkrules,
            'foto'       => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=450,height=600',
            'namakpk'    => 'required|string|max:50',
            'tl'         => 'required|date',
            'notelefon'  => $notelefonrules,
            'idstating'  => 'required',
            'idalamat'   => 'required',
        ];
    }
}
