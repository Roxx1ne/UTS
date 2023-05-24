@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.item.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.books.update", [$book->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="productname">{{ trans('cruds.item.fields.productname') }}</label>
                <input class="form-control {{ $errors->has('productname') ? 'is-invalid' : '' }}" type="text" name="bookname" id="bookname" value="{{ old('bookname', $book->bookname) }}" required>
                @if($errors->has('productname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('productname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.producer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="author">{{ trans('cruds.item.fields.producer') }}</label>
                <input class="form-control {{ $errors->has('producer') ? 'is-invalid' : '' }}" type="text" name="author" id="author" value="{{ old('author', $book->author) }}" required>
                @if($errors->has('producer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('producer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.item.fields.product_helper') }}</span>
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