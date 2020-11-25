
@foreach($courses as $course)
<div class="col-md-6 course d-lg-flex ftco-animate">
	<div class="img" style="background-image: url({{ asset('public/images/' . $course->image) }});"></div>
	<div class="text bg-light p-4">
	  <h3><a href="#">{{ $course->lesson }} </a></h3>
	  <p class="subheading"><span>Class time:</span> {{ $course->time }} </p>
	  <p>{{ $course->title }}</p>
	</div>
</div>
@endforeach
