@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.book.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.books.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.item.fields.id') }}
                        </th>
                        <td>
                            {{ $barang->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.item.fields.productname') }}
                        </th>
                        <td>
                            {{ $barang->productname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.item.fields.producer') }}
                        </th>
                        <td>
                            {{ $barang->producer }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.books.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection