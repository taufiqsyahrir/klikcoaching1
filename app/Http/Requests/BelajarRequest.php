<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BelajarRequest extends FormRequest
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
            'tentor' => 'required|between:2,255',
            'negara' => 'required|between:2,255',
            'deskripsi' => 'required|between:2,255',
            'tanggal' => 'required|between:2,255',
            'jam' => 'required|between:2,255'
        ];
    }

    public function messages()
    {
        return [
            'tentor.required' => 'Tentor tidak boleh kosong',
            'tentor.between' => 'Tentor harus antara :min sampai :max karakter',
            'negara.required' => 'Negara tidak boleh kosong',
            'negara.between' => 'Negara harus antara :min sampai :max karakter',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'deskripsi.between' => 'Deskripsi harus antara :min sampai :max karakter',
            'tanggal.required' => 'Tanggal tidak boleh kosong',
            'tanggal.between' => 'Tanggal harus antara :min sampai :max karakter',
            'jam.required' => 'Jam tidak boleh kosong',
            'jam.between' => 'Jam harus antara :min sampai :max karakter',
        ];
    }
}
