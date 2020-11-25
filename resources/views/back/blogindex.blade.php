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
                    	@if (session('blog-updated'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('blog-updated') !!}
                          @endcomponent
                       @endif
                      <table>
                         <thead>
                          <tr>
                            <td>Image</td>
                            <td>Title</td>
                            <td>Day</td>
                            <td>Moth</td>
                            <td>Year</td>
                            <td>Information</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                          </tr>
                          </thead>
                          <tbody id="pannel" class="back-pannel">
                            @include('back.brick-standard-blog')
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
<script src="{{ asset('public/js/blog.js') }}"></script>
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
