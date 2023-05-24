@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.item.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.item.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="namabarang">{{ trans('cruds.item.fields.namabarang') }}</label>
                <input class="form-control {{ $errors->has('namabarang') ? 'is-invalid' : '' }}" type="text" name="namabarang" id="namabarang" value="{{ old('namabarang', '') }}" required>
                @if($errors->has('namapbarang'))
                    <div class="invalid-feedback">
                        {{ $errors->first('namabarang') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.namabarang_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ID_barang">{{ trans('cruds.item.fields.ID_barang') }}</label>
                <input class="form-control {{ $errors->has('ID_barang') ? 'is-invalid' : '' }}" type="text" name="ID_barang" id="ID_barang" value="{{ old('ID_barang', '') }}" required>
                @if($errors->has('ID_barang'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ID_barang') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.ID_barang_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="hargabarang">{{ trans('cruds.item.hargabarang') }}</label>
                <input class="form-control {{ $errors->has('hagabarang') ? 'is-invalid' : '' }}" type="text" name="hargabarang" id="hargabarang" value="{{ old('hargabarang', '') }}" required>
                @if($errors->has('hargabarang'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hargabarang') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.hargabarang_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="SKU">{{ trans('cruds.item.SKU') }}</label>
                <input class="form-control {{ $errors->has('SKU') ? 'is-invalid' : '' }}" type="text" name="SKU" id="SKU" value="{{ old('SKU', '') }}" required>
                @if($errors->has('SKU'))
                    <div class="invalid-feedback">
                        {{ $errors->first('SKU') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.SKU_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="'TanggalKadarluasa">{{ trans('cruds.item.TanggalKadarluasa') }}</label>
                <input class="form-control {{ $errors->has('TanggalKadarluasa') ? 'is-invalid' : '' }}" type="text" name="TanggalKadarluasa" id="TanggalKadarluasa" value="{{ old('TanggalKadarluasa', '') }}" required>
                @if($errors->has('TanggalKadarluasa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('TanggalKadarluasa') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.TanggalKadarluasa_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="SKU">{{ trans('cruds.item.Riwayat') }}</label>
                <input class="form-control {{ $errors->has('Riwayat') ? 'is-invalid' : '' }}" type="text" name="Riwayat" id="Riwayat" value="{{ old('Riwayat', '') }}" required>
                @if($errors->has('Riwayat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('Riwayat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.Riwayat_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection