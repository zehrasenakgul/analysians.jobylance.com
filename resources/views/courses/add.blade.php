@extends('layouts.app')
@section('title')
    Kurs Ekle
@endsection

@section('content')
    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" enctype="multipart/form-data" action="{{ url('courses') }}" method="POST">
                {{ csrf_field() }}
                @if ($errors->any())
                    @foreach ($errors->all as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif

                <div class="form-group mb-4">
                    <label class=" text-white control-label">Başlık:</label>
                    <input type="text" name="name" class="form-control">
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Açıklama:</label>
                    <textarea name="desc" id="" cols="30" rows="10"></textarea>
                    @if ($errors->has('desc'))
                        <span class="text-danger text-left">{{ $errors->first('desc') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Kategori Seçimi</label>
                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('category_id'))
                        <span class="text-danger text-left">{{ $errors->first('category_id') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Fiyat:</label>
                    <input type="number" name="price" class="form-control">
                    @if ($errors->has('price'))
                        <span class="text-danger text-left">{{ $errors->first('price') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Url:</label>
                    <input type="url" name="url" class="form-control">
                    @if ($errors->has('url'))
                        <span class="text-danger text-left">{{ $errors->first('url') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Dosya:</label>
                    <input type="file" name="upload" class="form-control">
                    @if ($errors->has('upload'))
                        <span class="text-danger text-left">{{ $errors->first('upload') }}</span>
                    @endif
                </div>
                <input type="submit" name="submit" value="Ekle" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection

@push('customJs')
@endpush

@push('customCss')
@endpush
