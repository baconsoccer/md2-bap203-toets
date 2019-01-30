@extends('layouts.master')

@section('content')
    @foreach($links as $link)
        <p>This is link {{ $link->title }}</p>
    @endforeach
    @endsection