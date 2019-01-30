@extends('layouts.master')

@section('content')
    <h1>Link form</h1>

    <form action="{{ route('link-opslaan') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">titel</label>
            <input type="text" value="{{ old('title') }}" name="title" placeholder="titel invullen" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">titel</label>
            <textarea name="description" placeholder="omschrijving invullen" class="form-control">{{ old('title') }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="url">titel</label>
            <textarea name="url" placeholder="URL invoeren" class="form-control">
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">klik!</button>
        </div>
    </form>
@endsection