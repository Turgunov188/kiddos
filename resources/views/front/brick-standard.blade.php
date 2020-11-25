@php
//print_r($teachers);
@endphp

@foreach($teachers as $teacher)
<div class="col-md-6 col-lg-3 ftco-animate">
  <div class="staff">
    <div class="img-wrap d-flex align-items-stretch">
      <div class="img align-self-stretch" style="background-image: url({{ asset('public/images/' . $teacher->image) }});"></div>
    </div>
    <div class="text pt-3 text-center">
      <h3>{{ $teacher->name }}</h3>
      <span class="position mb-2">{{ $teacher->job }}</span>
      <div class="faded">
        <p>{{ $teacher->about }}</p>
        <!-- <ul class="ftco-social text-center">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul> -->
      </div>
    </div>
  </div>
</div>
@endforeach
