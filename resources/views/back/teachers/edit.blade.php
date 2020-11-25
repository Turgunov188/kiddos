@extends('back.teachers.template')

@section('form-open')
    <form method="post" action="{{ route('teachers.update', [$teacher->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}   
@endsection
