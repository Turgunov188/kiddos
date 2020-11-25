<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait Indexable
{
    /**
     * The Repository instance.
     *
     * @var \App\Repositories\TeachRepository
     * @var \App\Repositories\AdminRepository     
     */
    protected $repository; //TeachRepository or AdminRepository

    /**
     * The namespace
     *
     * @var string
     */
    protected $namespace; //front or back

    /**
     * Display a listing of the records.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    

}