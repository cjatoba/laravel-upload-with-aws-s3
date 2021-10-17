@extends('layouts.app')

@section('content')
    <form
        action="{{ route('file.store') }}"
        method="post"
        enctype="multipart/form-data"
        class='mt-5'>
        @csrf
        <div class='d-flex justify-content-center'>
            <input type="file" name="file" id="file">
        </div>
        <div class='d-flex justify-content-center mt-4'>
            <button type="submit" class="btn btn-dark col-4">Salvar</button>
        </div>
        @error('file')
            <section class='alert alert-danger mt-4'>
                <p class='text-center'>{{ $message }}</p>
            </section>
        @enderror
        @if(session('file-status'))
            <section class='alert alert-success mt-4'>
                <p class='text-center'>{{ session('file-status') }} </p>
            </section>
        @endif
    </form>
@endsection
