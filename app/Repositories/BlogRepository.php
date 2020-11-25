<?php

namespace App\Repositories;

use App\Models\ {
    Blog
};

//use Illuminate\Support\Facades\DB;

class BlogRepository
{
   /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */

    protected $about;
    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Teacher $teacher, Course $course
     */
    public function __construct(Blog $blog)
    {
        $this->about = $blog;
     }
    
    //Model Blog
        public function funcSelectBlog($request)
    {
        $query = $this->about
            ->select('id', 'title', 'image', 'day', 'month', 'year', 'information');
        return $query->get();
    }

        /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */      
    public function store($request)
    {
       Blog::create($request->all());
    }        

    /**
     * Update product.
     *
     * @param  \App\Models\Product $product
     * @return void
     */            
    public function update($request, $blog)
    {
       $blog->update($request->all());
    }
}
