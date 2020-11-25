@extends('back.blogs.template')

@section('form-open')
    <form method="post" action="{{ route('blogs.update', [$blog->id]) }}">
                     {{ csrf_field() }}
                  {{ method_field('PUT') }}   
@endsection
