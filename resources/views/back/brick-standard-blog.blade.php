
@foreach($blogs as $blog)
<tr>
<td class="joined"><img src="{{ asset('public/images/' . $blog->image) }}" ></td>
<td class="joined"> {{ $blog->title }} </td>
<td class="joined"> {{ $blog->day }} </td>
<td class="joined"> {{ $blog->month }} </td>
<td class="joined"> {{ $blog->year }} </td>
<td class="joined content">{{ $blog->information }}</td>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{ $blog->id }}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
<td class="col-md-6 col-sm-6 col-xs-6 center widthbutton"><a class="btn btn-primary listbuttonupdate" href="{{ route('blogs.edit', [$blog->id]) }}"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
</tr>
@endforeach
