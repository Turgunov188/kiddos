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
//print_r($blogs);
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
                    	@if (session('teacher-updated'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('teacher-updated') !!}
                          @endcomponent
                       @endif
                      <table>
                         <thead>
                          <tr>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Job</td>
                            <td>About</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                          </tr>
                          </thead>
                          <tbody id="pannel" class="back-pannel">
                            @include('back.brick-standard')
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
<script src="{{ asset('public/js/mine.js') }}"></script>
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
