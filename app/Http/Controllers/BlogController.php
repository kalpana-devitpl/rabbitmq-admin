<?php

namespace App\Http\Controllers;

use App\Jobs\BlogCreated;
use App\Jobs\BlogDeleted;
use App\Jobs\BlogUpdated;
use App\Models\Blog;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as Response;
use App\Http\Traits\ApiResponseTrait;

class BlogController extends Controller
{
    use ApiResponseTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return $this->successResponse($blogs, __('Blogs Retrieved Successfully'), 200);
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $blog = Blog::create($request->only('title', 'description', 'image'));

            BlogCreated::dispatch($blog->toArray());

            return response($blog, Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $blog = Blog::find($id);
            return $this->successResponse($blog, __('Blog has been retrieved successfully'), 200);
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        try {

            $blog->update($request->only('title','description', 'image'));
            BlogUpdated::dispatch($blog->toArray());

            return $this->successResponse($blog, __('Blog has been updated successfully'), 200);
        }catch(\Exception $e){
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        try {

            BlogDeleted::dispatch($blog->id);
            $blog->delete();

            return $this->successResponse(null, __('Blog has been deleted successfully !'), 200);
        } catch (\Exception $e) {
            return $this->errorResponse(null, $e->getMessage(), 500);
        }
    }
}
