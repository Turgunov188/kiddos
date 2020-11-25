@foreach($teachers as $teacher)
<tr>
<td class="joined"><img src="{{ asset('public/images/' . $teacher->image) }}" ></td>
<td class="joined"> {{ $teacher->name }} </td>
<td class="joined"> {{ $teacher->job }} </td>
<td class="joined content">{{ $teacher->about }}</td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$teacher->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('teachers.edit', [$teacher->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
</tr>
@endforeach
