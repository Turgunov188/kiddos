@extends('back.courses.template')

@section('form-open')
    <form method="post" action="{{ route('courses.update', [$course->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}   
@endsection
