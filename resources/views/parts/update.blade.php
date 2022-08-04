@extends('layouts.app')
@section('content')

    <div class="layout-px-spacing">
        <div class=" layout-top-spacing">

            <form class="form-vertical" enctype="multipart/form-data" action="{{ url('parts/' . $part->id) }}"
                method="POST">
                <input type="hidden" name="_method" value="PUT">

                {{ csrf_field() }}
                @if ($errors->any())
                    @foreach ($errors->all as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif

                <div class="form-group mb-4">
                    <label class=" text-white control-label">Başlık:</label>
                    <input type="text" name="name" value="{{ $part->name }}" class="form-control">
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Bölüm Seçimi</label>
                    <select class="form-control" name="section_id" id="exampleFormControlSelect1">
                        @foreach ($sections as $item)
                            <option value="{{ $item->id }}" @if ($part->section_id == $item->id) selected @endif>
                                {{ $item->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('section_id'))
                        <span class="text-danger text-left">{{ $errors->first('section_id') }}</span>
                    @endif
                </div>
                <div class="form-group mb-4">
                    <label class=" text-white control-label">Dosya:</label>
                    <div class="card component-card_2 mb-3" style="width:150px">
                        <img src="{{ asset('public/' . $part->upload) }}" class="card-img-top" alt="widget-card-2">
                    </div>
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
