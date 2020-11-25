@extends('back.blogs.template')

@section('form-open')
    <form method="post" action="{{ route('blogs.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}   
@endsection