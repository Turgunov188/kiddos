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
            @if (session('course-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('course-ok') !!}
                @endcomponent
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->    
                          <img class="img_product" src="@if(isset($image)){{asset('public/images/courses/' . $image)}}@elseif(isset($course)){{asset('public/images/' . $course->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />

                          <!-- not updating image, only creating -->
                          @if (\Request::is('courses/create'))
                          <form method="post" action="{{ route('uploadcourse') }}" name="form_upload" enctype="multipart/form-data">
                                            {{ csrf_field() }}    
                              <input type="file" name="image" class="upload_field" value="@if(isset($image))@elseif(isset($course)){{$course->image}}{{$image}}@elseif(old('image')){{old('image')}}@else{{'nophoto.jpg'}}@endif">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Select</button>
                          </form> 
                          @endif        
                        </div>
                        @yield('form-open')  
                        <!-- 'bg-img/' . - custom -->
                        <input type="hidden" id="image" name="image" value="@if(isset($image)){{'courses/' . $image}}@elseif(isset($course)){{$course->image}}@else{{'courses/nophoto.jpg'}}@endif">   
                        <div class="form-group {{ $errors->has('lesson') ? 'has-error' : '' }}">
                            <label for="name">@lang('Lesson')</label>
                            <input type="text" class="form-control" id="lesson" name="lesson" value="@if(isset($course)){{$course->lesson}}@elseif(old('lesson')){{old('lesson')}}@endif" placeholder="Lesson"> 
                            {!! $errors->first('lesson', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                            <label for="name">@lang('Time')</label>
                            <input type="text" class="form-control" id="time" name="time" value="@if(isset($course)){{$course->time}}@elseif(old('time')){{old('time')}}@endif" placeholder="Time"> 
                            {!! $errors->first('time', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="name">@lang('Title')</label>
                            <input type="text" class="form-control" id="title" name="title" value="@if(isset($course)){{$course->title}}@elseif(old('title')){{old('title')}}@endif" placeholder="Title"> 
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
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
