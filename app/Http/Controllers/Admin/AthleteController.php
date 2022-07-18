<?php

namespace App\Http\Controllers\Admin;

use App\Athlete;
use App\Category;
use App\Http\Controllers\Controller;
use App\Nationality;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $athletes = Athlete::all();
        // $categories = Category::all();
        return view('admin.athletes.index', compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $nationalities = Nationality::all();
        return view('admin.athletes.create', compact('categories', 'nationalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules());

        $data = $request->all();

        // if (isset($data['image'])) {
        //     $image_path = Storage::put('post_covers', $data['image']);
        //     $data['cover'] = $image_path;
        // }


        $athlete = new Athlete();
        $athlete->fill($data);
        // $athlete->slug = $this->generatePostSlugFromTitle($post->title);
        $athlete->save();

        if ($data['categories']) {
            $athlete->categories()->sync($data['categories']);
        }

        return redirect()->route('admin.athletes.show ', ['athlete' => $athlete->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        {
            $athletes = Athlete::findOrFail($id);
            $categories = $athletes->categories;
            return view('admin.athletes.show', compact('athletes', 'categories'));
        }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    private function getValidationRules()
    {
        return [
            'name' => 'required|max:255',
            'genre' => 'required',
            'nationality' => 'required',
            'categories' => 'required',
        ];
    }
}
