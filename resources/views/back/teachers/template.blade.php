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
            @if (session('teacher-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('teacher-ok') !!}
                @endcomponent
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        <div class="form-group">       <!-- !!!/img/bg-img/ - custom -->    
                          <img class="img_product" src="@if(isset($image)){{asset('public/images/teachers/' . $image)}}@elseif(isset($teacher)){{asset('public/images/' . $teacher->image)}}@else{{asset('public/images/nophoto.jpg')}}@endif" alt="" style="width: 150px; margin-top: 5px;" />

                          <!-- not updating image, only creating -->
                          @if (\Request::is('teachers/create'))
                          <form method="post" action="{{ route('upload') }}" name="form_upload" enctype="multipart/form-data">
                                            {{ csrf_field() }}    
                              <input type="file" name="image" class="upload_field" value="@if(isset($image))@elseif(isset($teacher)){{$teacher->image}}{{$image}}@elseif(old('image')){{old('image')}}@else{{'nophoto.jpg'}}@endif">
                              <button type="submit" class="upload_submit">Go</button>
                              <button type="button" class="btn btn-primary" style="width: 150px; margin-top: 5px;">Select</button>
                          </form> 
                          @endif        
                        </div>
                        @yield('form-open')  
                        <!-- 'bg-img/' . - custom -->
                        <input type="hidden" id="image" name="image" value="@if(isset($image)){{'teachers/' . $image}}@elseif(isset($teacher)){{$teacher->image}}@else{{'teachers/nophoto.jpg'}}@endif">   
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">@lang('Name')</label>
                            <input type="text" class="form-control" id="name" name="name" value="@if(isset($teacher)){{$teacher->name}}@elseif(old('name')){{old('name')}}@endif" placeholder="Name"> 
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('job') ? 'has-error' : '' }}">
                            <label for="name">@lang('Job')</label>
                            <input type="text" class="form-control" id="job" name="job" value="@if(isset($teacher)){{$teacher->job}}@elseif(old('job')){{old('job')}}@endif" placeholder="Job"> 
                            {!! $errors->first('job', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('about') ? 'has-error' : '' }}">
                            <label for="name">@lang('About')</label>
                            <input type="text" class="form-control" id="about" name="about" value="@if(isset($teacher)){{$teacher->about}}@elseif(old('about')){{old('about')}}@endif" placeholder="about"> 
                            {!! $errors->first('about', '<small class="help-block">:message</small>') !!}
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
