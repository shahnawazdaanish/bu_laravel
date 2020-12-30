<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    protected $course;

    public function __construct(Course $course)
    {
       $this->course = $course;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->course->get();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response | $mix
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response | mixed
     */
    public function store(Request $request)
    {
        # CHECKING VALIDATION
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => 'required',
            'description' => '',
            'price' => 'required',
            'cover' => 'file'
        ]);
        if($validator->fails()) {
            return redirect()->route('course.create')->withErrors($validator->errors());
        }

        # VALIDATION PASSED
        $data = $request->except(['token', 'cover']);
        if($request->hasFile("cover")) {
            $data['cover'] = $request->file('cover')->store('avatars');
        }

        $data['cover'] = str_replace("avatars/", "",$data['cover']);
        // dd($data['cover']);
        $course = $this->course->create($data);
        return redirect()->to('/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $course = $this->course->find($id);
       return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = $this->course->find($id);
        $course->title = $request->title;
        $course->price = $request->price;
        $course->description = $request->description;
        if($request->hasFile('cover')){
        $course->cover = $request->file('cover')->store('avatars');
        }

        $course->save();
        return redirect()->to('course');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->course->where('id', $id)->delete();
       return redirect()->to('course');
    }
}
