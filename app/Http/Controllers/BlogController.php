<?php
namespace App\Http\Controllers;
use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCreateRequest;
use Illuminate\Support\Facades\Input;
class BlogController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $blogs = Blog::all()->toArray();
        return view('blog.list', compact('blogs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BlogCreateRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->get('title');
        $blog->content = $request->get('content');
        $blog->save();
        return 'Your blog created successfully. Id is ' . $blog->id;
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.view', $blog->toArray());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}