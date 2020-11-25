<?php

namespace App\Repositories;

use App\Models\ {
    Teacher
};

//use Illuminate\Support\Facades\DB;

class AdminRepository
{
   /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Teacher $teacher, Course $course
     */
    public function __construct(Teacher $teacher)
    {
        $this->model = $teacher;

     }

    //Model Teacher
    public function funcSelect($request)
    {
        $query = $this->model
            ->select('id', 'name', 'job', 'about', 'image');
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
       Teacher::create($request->all());
    }

    /**
     * Update product.
     *
     * @param  \App\Models\Product $product
     * @return void
     */
    public function update($request, $teacher)
    {
       $teacher->update($request->all());
    }

////////////////////////////////////////////////////////////////////////////////////

    // //Model Course
    //     public function funcSelectCourse($request)
    // {
    //     $query = $this->cours
    //         ->select('id', 'lesson', 'time', 'title', 'image');
    //     return $query->get();
    // }

///////////////////////////////////////////////////////////////////////////////////


}
