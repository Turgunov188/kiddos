<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Repositories\BlogRepository,
    Http\Controllers\Traits\Indexable,
    Http\Requests\BlogRequest,
    Models\Blog
};

class BlogController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    public function __construct(BlogRepository $blogrepository)
    {
        //$this->middleware('auth');
        $this->repository = $blogrepository;
        $this->namespace = 'back';
    }

    /**
     * Create a new view for creating a new blog in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $blogs = $this->repository->funcSelectBlog($request);

       if ($request->ajax()) { // delete destroy
         return response()->json([
           'table' => view('back.brick-standard-blog', compact('blogs'))->render(),
         ]);
       }

       return view('back.blogindex', ['blogs' => $blogs]);
    }

    /**
     * Create a new view for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.blogs.create');
    }


        /**
     * Upload a new image for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function uploadblog(Request $request)
    {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/blogs/', $filename);      //!!!/img/bg-img/ - custom
        return view('back.blogs.create', ['image' => $filename]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
       $this->repository->store($request);

       return redirect(route('blogs.create'))->with('blog-ok', 'New blog has been successfully created...');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog) //!!!$blog - RESTful-Controllers
    {
       return view('back.blogs.edit', compact('blog')); //!!!$teacher - RESTful-Controllers
    }

      /**
      * Update the specified resource in storage.
      *
      * @param  \App\Http\Requests\ProductRequest $request
      * @param  \App\Models\Product $product
      * @return \Illuminate\Http\Response
      */
     public function update(BlogRequest $request, Blog $blog) //!!!$teacher - RESTful-Controllers
    {
        $this->repository->update($request, $blog); //!!!$blog - RESTful-Controllers

       return redirect(route('blogsdashboard'))->with('blog-updated', 'Blog has been successfully updated...');
     }

    public function destroy(Request $request, Blog $blog)
    {
        $blog->delete();

        return $this->index($request);
    }



}

?>
