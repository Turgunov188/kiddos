<?php

namespace App\Repositories;

use App\Models\ {
    Course
};

//use Illuminate\Support\Facades\DB;

class CourseRepository
{
   /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $cours;

    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\ Course $course
     */
    public function __construct(Course $course)
    {
        $this->cours = $course;
     }


        public function funcSelectCourse($request)
    {
        $query = $this->cours
            ->select('id', 'lesson', 'time', 'title', 'image');
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
       Course::create($request->all());
    }

    /**
     * Update product.
     *
     * @param  \App\Models\Product $product
     * @return void
     */
    public function update($request, $course)
    {
       $course->update($request->all());
    }



}
