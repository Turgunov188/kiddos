<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Repositories\CourseRepository,
    Http\Controllers\Traits\Indexable,
    Http\Requests\CourseRequest,
    Models\Course
};

class CourseController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    public function __construct(CourseRepository $courserepository)
    {
        //$this->middleware('auth');
        $this->repository = $courserepository;
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
       $courses = $this->repository->funcSelectCourse($request);

       if ($request->ajax()) {
         return response()->json([
           'table' => view('back.brick-standard-course', compact('courses'))->render(),
         ]);
       }


       return view('back.indexcourse', ['courses' => $courses]);

    }


    /**
     * Create a new view for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.courses.create');
    }


        /**
     * Upload a new image for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function uploadcourse(Request $request)
    {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/courses/', $filename);      //!!!/img/bg-img/ - custom
        return view('back.courses.create', ['image' => $filename]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
       $this->repository->store($request);

       return redirect(route('courses.create'))->with('course-ok', 'New course has been successfully created...');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course) //!!!$teacher - RESTful-Controllers
    {
       return view('back.courses.edit', compact('course')); //!!!$teacher - RESTful-Controllers
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest $request
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, Course $course) //!!!$teacher - RESTful-Controllers
    {
       $this->repository->update($request, $course); //!!!$teacher - RESTful-Controllers

       return redirect(route('coursedashboard'))->with('course-updated', 'Course has been successfully updated...');
    }

    public function destroy(Request $request, Course $course)
    {
        $course->delete();

        return $this->index($request);
    }



}

?>
