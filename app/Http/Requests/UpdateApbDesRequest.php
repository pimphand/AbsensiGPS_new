<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateApbDesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'tahun' => 'required|numeric',
            'pendapatan' => 'required|numeric',
            'belanja' => 'required|numeric',
            'penerimaan' => 'required|numeric',
            'pengeluaran' => 'required|numeric',
            'surplus_defisit' => 'required|numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'tahun.required' => 'Tahun wajib diisi',
            'tahun.numeric' => 'Tahun harus berupa angka',
            'pendapatan.required' => 'Pendapatan wajib diisi',
            'pendapatan.numeric' => 'Pendapatan harus berupa angka',
            'belanja.required' => 'Belanja wajib diisi',
            'belanja.numeric' => 'Belanja harus berupa angka',
            'penerimaan.required' => 'Penerimaan wajib diisi',
            'penerimaan.numeric' => 'Penerimaan harus berupa angka',
            'pengeluaran.required' => 'Pengeluaran wajib diisi',
            'pengeluaran.numeric' => 'Pengeluaran harus berupa angka',
            'surplus_defisit.required' => 'Surplus/Defisit wajib diisi',
            'surplus_defisit.numeric' => 'Surplus/Defisit harus berupa angka',
        ];
    }
}
