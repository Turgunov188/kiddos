@foreach($courses as $course)
<tr>
<td class="joined"><img src="{{ asset('public/images/' . $course->image) }}" ></td>
<td class="joined"> {{ $course->lesson }} </td>
<td class="joined"> {{ $course->time }} </td>
<td class="joined content">{{ $course->title }}</td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$course->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('courses.edit', [$course->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
</tr>
@endforeach
