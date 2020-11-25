
@foreach($blogs as $blog)
<div class="col-md-6 col-lg-4 ftco-animate">
  <div class="blog-entry">
    <a class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('public/images/' . $blog->image) }}');">
        <div class="meta-date text-center p-2">
        <span class="day">{{ $blog->day }}</span>
        <span class="mos">{{ $blog->month }}</span>
        <span class="yr">{{ $blog->year }}</span>
      </div>
    </a>
    <div class="text bg-white p-4">
      <h3 class="heading"><a >{{ $blog->title }}</a></h3>
      <p>{{ $blog->information }}</p>
    </div>
  </div>
</div>
@endforeach
