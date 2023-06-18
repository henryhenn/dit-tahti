<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DitlantasRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required',
            'unit' => 'required',
            'nama_kendaraan' => 'required|string',
            'identitas_kendaraan' => 'required|string',
            'no_surat_tilang' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => [request()->routeIs('ditlantas.store') ? 'required' : 'nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'gambar2' => [request()->routeIs('ditlantas.store') ? 'required' : 'nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'gambar3' => [request()->routeIs('ditlantas.store') ? 'required' : 'nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'noka_nosin' => 'required|string|max:255',
            'tempat_penyimpanan' => 'required|string|max:255',
        ];
    }
}
