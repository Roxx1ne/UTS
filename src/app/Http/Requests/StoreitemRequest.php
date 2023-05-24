<?php

namespace App\Http\Requests;

use App\Models\Book;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreitemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('item_create');
    }

    public function rules()
    {
        return [
            'namabarang' => [
                'string',
                'required',
            ],
            'ID_barang' => [
                'string',
                'required',
            ],
            'hargabarang' => [
                'integer',
                'required',
            ],
            'SKU' => [
                'string',
                'required',
            ],
            'TanggalKadarluasa' => [
                'string',
                'required',
            ],
            'Riwayat' => [
                'string',
                'required',
            ],

        ];
    }
}
