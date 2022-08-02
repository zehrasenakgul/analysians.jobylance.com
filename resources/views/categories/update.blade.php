@extends('layouts.app')
@section('content')

    <div class="layout-px-spacing">
        <div class=" layout-top-spacing">

            <form class="form-vertical" enctype="multipart/form-data" action="{{ url('categories/' . $courseCategory->id) }}"
                method="POST">
                <input type="hidden" name="_method" value="PUT">

                {{ csrf_field() }}
                @if ($errors->any())
                    @foreach ($errors->all as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif

                <div class="form-group mb-4">
                    <label class="control-label">Başlık:</label>
                    <input type="text" name="name" value="{{ $courseCategory->name }}" class="form-control" required>
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
