@extends('layouts.app')
@section('title')
    Kurs Ekle
@endsection

@section('content')
    <div class="layout-px-spacing">

        <div class=" layout-top-spacing">
            <form class="form-vertical" enctype="multipart/form-data" action="{{ url('parts') }}" method="POST">
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
                    <label class=" text-white control-label">Bölüm Seçimi</label>
                    <select class="form-control" name="section_id" id="exampleFormControlSelect1">
                        @foreach ($sections as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('section_id'))
                        <span class="text-danger text-left">{{ $errors->first('section_id') }}</span>
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
