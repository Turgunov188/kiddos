<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\ {
    Http\Controllers\Controller,
    Repositories\TeachRepository,
    Http\Controllers\Traits\Indexable
};

class KindergartenController extends Controller
{
    use Indexable;
    /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TeachRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'front';

    }

    /**
     * Show front home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $teachers = $this->repository->funcSelect($request);
        $courses = $this->repository->funcSelectCourse($request);
        $blogs = $this->repository->funcSelectBlog($request);
        return view('front.index', ['teachers' => $teachers, 'courses' => $courses, 'blogs' => $blogs]);
    }

    /**
     * Show front teacher-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function teacher(Request $request)
    {
        $teachers = $this->repository->funcSelect($request);
        return view('front.teacher', ['teachers' => $teachers]);

    }

     /**
     * Show front About-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('front.about');
    }

    /**
     * Show front Courses-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function course(Request $request)
    {
        $courses = $this->repository->funcSelectCourse($request);
        return view('front.courses', ['courses' => $courses]);

    }

    /**
     * Show front Blog-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog(Request $request)
    {
        $blogs = $this->repository->funcSelectBlog($request);
        return view('front.blog', ['blogs' => $blogs]);
    }

    /**
     * Show front Contact-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('front.contact');
    }
}
