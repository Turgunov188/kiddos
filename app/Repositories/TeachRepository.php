<?php

namespace App\Repositories;

use App\Models\ {
    Teacher,
    Course,
    Blog
};
use Illuminate\Support\Facades\DB;

class TeachRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;
    protected $cours;
    protected $about;
    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Teacher $teacher, Course $course, Blog $blog)
    {
        $this->model = $teacher;
        $this->cours = $course;
        $this->about = $blog;
    }

    public function funcSelect($request)
    {
        $query = $this->model
            ->select('id', 'name', 'job', 'about', 'image');
        return $query->get();
    }

    public function funcSelectCourse($request)
    {
        $query = $this->cours
            ->select('id', 'lesson', 'time', 'title', 'image');
        return $query->get();
    }

    public function funcSelectBlog($request)
    {
        $query = $this->about
            ->select('id', 'title', 'image', 'day', 'month', 'year', 'information');
        return $query->get();
    }

}
