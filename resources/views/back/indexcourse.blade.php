@extends('back.layout')

@section('css')
<style>
  .joined{
  text-align: center;
}

.content{
  width: 30%
}
.back-pannel img {
width: 120px;
}

</style>
@php
//print_r($courses);
@endphp

@endsection

@section('main')

       <!-- yield('main') -->
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                    	@if (session('course-updated'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('course-updated') !!}
                          @endcomponent
                       @endif
                      <table>
                         <thead>
                          <tr>
                            <td>Image</td>
                            <td>Lesson</td>
                            <td>Time</td>
                            <td>Title</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                          </tr>
                          </thead>
                          <tbody id="pannel" class="back-pannel">
                            @include('back.brick-standard-course')
                         </tbody>
                       </table>
                     </div>
                     <hr>
                   </div>
                 </div>
              </div>
           </div>

@endsection

@section('js')
<script src="{{ asset('public/js/course.js') }}"></script>
<script>
   $(document).ready(function(){
          $('.listbuttonremove').click(function(){
             BaseRecord.destroy($(this).attr('id'));
             alert('Deleted')
             return false;
          });
   });
</script>
@endsection
