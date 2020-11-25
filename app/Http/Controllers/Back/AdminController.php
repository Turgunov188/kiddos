<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Http\Controllers\Traits\Indexable,
    Http\Requests\TeacherRequest,
    Models\Teacher
};

class AdminController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;

    public function __construct(AdminRepository $adminrepository)
    {
        //$this->middleware('auth');
        $this->repository = $adminrepository;
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
       $teachers = $this->repository->funcSelect($request);

      if ($request->ajax()) {
        return response()->json([
          'table' => view('back.brick-standard', compact('teachers'))->render(),
        ]);
      }

       return view('back.index', ['teachers' => $teachers]);


    }




    /**
     * Create a new view for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.teachers.create');
    }


        /**
     * Upload a new image for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/images/teachers/', $filename);      //!!!/img/bg-img/ - custom
        return view('back.teachers.create', ['image' => $filename]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
       $this->repository->store($request);

       return redirect(route('teachers.create'))->with('teacher-ok', 'New teacher has been successfully created...');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher) //!!!$teacher - RESTful-Controllers
    {
       return view('back.teachers.edit', compact('teacher')); //!!!$teacher - RESTful-Controllers
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest $request
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, Teacher $teacher) //!!!$teacher - RESTful-Controllers
    {
       $this->repository->update($request, $teacher); //!!!$teacher - RESTful-Controllers

       return redirect(route('dashboard'))->with('teacher-updated', 'Teacher has been successfully updated...');
    }

    public function destroy(Request $request, Teacher $teacher)
    {
        $teacher->delete();

        return $this->index($request);
    }



}

?>
