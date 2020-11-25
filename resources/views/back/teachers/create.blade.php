@extends('back.teachers.template')

@section('form-open')
    <form method="post" action="{{ route('teachers.store') }}">
                    {{ csrf_field() }}
                {{ method_field('POST') }}   
@endsection