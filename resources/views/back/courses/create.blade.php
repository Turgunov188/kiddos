@extends('back.courses.template')

@section('form-open')
    <form method="post" action="{{ route('courses.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}   
@endsection