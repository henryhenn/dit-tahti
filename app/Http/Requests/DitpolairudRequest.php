<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DitpolairudRequest extends FormRequest
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
            'nama_barang_bukti' => 'required|string',
            'jumlah' => 'required|string',
            'no_laporan_polisi' => 'required|string',
            'penetapan_pengadilan' => 'required|string',
            'tempat_penyimpanan' => 'required|string',
            'penyidik' => 'required|string',
            'kondisi' => 'required|string',
            'nama_pemilik' => 'required|string',
            'keterangan' => 'required|string',
            'gambar1' => [request()->routeIs('ditpolairud.store') ? 'required' : 'nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'gambar2' => [request()->routeIs('ditpolairud.store') ? 'required' : 'nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'gambar3' => [request()->routeIs('ditpolairud.store') ? 'required' : 'nullable', 'file', 'mimes:jpg,jpeg,png', 'max:2048'],
            'identitas_barang_bukti' => 'nullable|string',
            'no_sp_sita' => 'required|string'
        ];
    }
}
