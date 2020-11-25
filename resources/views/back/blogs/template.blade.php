@extends('back.layout')

@section('css')
<style>
.upload_field {
opacity:0.0;
z-index:2;
position:absolute;
}
.upload_submit {
z-index:1;
display:none;
}
</style>

@endsection

@section('main')

    <div class="row">
        <!-- left column -->
       <div class="col-md-3">
       </div>
        <!-- center column -->       
        <div class="col-md-6 margin">
            @if (session('blog-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('blog-ok') !!}
                @endcomponent
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->    
                          <img class="img_product" src="@if(isset($image)){{asset('public/images/blogs/' . $image)}}@elseif(isset($blog)){{asset('public/images/' . $blog->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />

                          <!-- not updating image, only creating -->
                          @if (\Request::is('blogs/create'))
                          <form method="post" action="{{ route('uploadblog') }}" name="form_upload" enctype="multipart/form-data">
                                            {{ csrf_field() }}    
                              <input type="file" name="image" class="upload_field" value="@if(isset($image))@elseif(isset($blog)){{$blog->image}}{{$image}}@elseif(old('image')){{old('image')}}@else{{'nophoto.jpg'}}@endif">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Select</button>
                          </form> 
                          @endif        
                        </div>
                        @yield('form-open')  
                        <!-- 'bg-img/' . - custom -->
                        <input type="hidden" id="image" name="image" value="@if(isset($image)){{'blogs/' . $image}}@elseif(isset($blog)){{$blog->image}}@else{{'blogs/nophoto.jpg'}}@endif">   
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="name">@lang('Title')</label>
                            <input type="text" class="form-control" id="title" name="title" value="@if(isset($blog)){{$blog->title}}@elseif(old('title')){{old('title')}}@endif" placeholder="Title"> 
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('day') ? 'has-error' : '' }}">
                            <label for="name">@lang('Day')</label>
                            <input type="text" class="form-control" id="day" name="day" value="@if(isset($blog)){{$blog->day}}@elseif(old('day')){{old('day')}}@endif" placeholder="Day"> 
                            {!! $errors->first('day', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('month') ? 'has-error' : '' }}">
                            <label for="name">@lang('Month')</label>
                            <input type="text" class="form-control" id="month" name="month" value="@if(isset($blog)){{$blog->month}}@elseif(old('month')){{old('month')}}@endif" placeholder="Month"> 
                            {!! $errors->first('month', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
                            <label for="name">@lang('Year')</label>
                            <input type="text" class="form-control" id="year" name="year" value="@if(isset($blog)){{$blog->year}}@elseif(old('year')){{old('year')}}@endif" placeholder="Year"> 
                            {!! $errors->first('year', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('information') ? 'has-error' : '' }}">
                            <label for="name">@lang('Information')</label>
                            <input type="text" class="form-control" id="information" name="information" value="@if(isset($blog)){{$blog->information}}@elseif(old('information')){{old('information')}}@endif" placeholder="information"> 
                            {!! $errors->first('information', '<small class="help-block">:message</small>') !!}
                        </div>
                                           
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- right column -->
       <div class="col-md-3">
       </div> 
    </div>
    <!-- /.row -->
@endsection

@section('js')
<script>
$(document).ready(function(){
  $("body").on("change", ".upload_field", function(){
    //alert('hi');
    $(".upload_submit").click();
  });
});       
</script>
@endsection  
