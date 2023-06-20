<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class CheckDataService
{
    public static function check_store(array $data, string $directory)
    {
        $data['gambar1'] = request()->file('gambar1') ? request()->file('gambar1')->store("$directory") : null;
        $data['gambar2'] = request()->file('gambar2') ? request()->file('gambar2')->store("$directory") : null;
        $data['gambar3'] = request()->file('gambar3') ? request()->file('gambar3')->store("$directory") : null;

        return $data;
    }

    public static function check_edit(array $data, Model $model, string $directory)
    {
        if (request()->hasFile('gambar1')) {
            if ($model->gambar1) {
                Storage::delete($model->gambar1);
            }

            $data['gambar1'] = request()->file('gambar1')->store("$directory");
        } else if (request()->hasFile('gambar2')) {
            if ($model->gambar2) {
                Storage::delete($model->gambar2);
            }

            $data['gambar2'] = request()->file('gambar2')->store("$directory");
        } else if (request()->hasFile('gambar3')) {
            if ($model->gambar3) {
                Storage::delete($model->gambar3);
            }

            $data['gambar3'] = request()->file('gambar3')->store("$directory");
        }

        return $data;
    }

    public static function check_delete(Model $data)
    {
        if ($data->gambar1) {
            return Storage::delete($data->gambar1);
        } else if ($data->gambar2) {
            return Storage::delete($data->gambar2);
        } else if ($data->gambar3) {
            return Storage::delete($data->gambar3);
        }
    }
}
