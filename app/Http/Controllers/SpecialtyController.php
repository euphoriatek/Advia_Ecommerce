<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ini_set('memory_limit', '1G');
        $specialty = Specialty::getAllCategory();
        $specialty = Specialty::paginate(20);
        return view('backend.specialty.index')->with('specialty', $specialty);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_cats = Specialty::orderBy('title', 'ASC')->get();
        $category = Category::all();
        return view('backend.specialty.create')->with('categories', $category)->with('parent_cats', $parent_cats);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'string|required',
            // 'photo' => 'string|nullable',
            'photo'=>'string|required',
            'status' => 'required|in:active,inactive',
            'category_id' => 'required|exists:categories,id',
        ]);
        if ($request->file('file')) {
            $path = $request->file('file')->store('public/files');
            $data['photo'] =  $path;
        }
        $data = $request->all();
        $slug = Str::slug($request->title);
        $count = Specialty::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $status = Specialty::create($data);
        if ($status) {
            request()->session()->flash('success', 'Specialty successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('specialty.index');

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
        $parent_cats = Specialty::get();
        $specialty = Specialty::findOrFail($id);
        return view('backend.specialty.edit')->with('specialty', $specialty)->with('parent_cats', $parent_cats);
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
        // return $request->all();
        $specialty = Specialty::findOrFail($id);
        $this->validate($request, [
            'title' => 'string|required',
            'slig' => 'string|nullable',
            'photo' => 'string|nullable',
            'status' => 'required|in:active,inactive',

        ]);
        $data = $request->all();

        $status = $specialty->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Specialty successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('specialty.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialty = Specialty::findOrFail($id);
        $child_cat_id = Specialty::where('id', $id)->pluck('id');
        // return $child_cat_id;
        $status = $specialty->delete();

        if ($status) {
            if (count($child_cat_id) > 0) {
                Specialty::shiftChild($child_cat_id);
            }
            request()->session()->flash('success', 'Specialty successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Specialty');
        }
        return redirect()->route('specialty.index');
    }

    public function getChildByParent(Request $request)
    {

        // return $request->all();
        $specialty = Specialty::findOrFail($request->id);


        $child_cat = Specialty::getChildByParentID($request->id);
        // return $child_cat;
        if (count($child_cat) <= 0) {
            return response()->json(['status' => false, 'msg' => '', 'data' => null]);
        } else {
            return response()->json(['status' => true, 'msg' => '', 'data' => $child_cat]);
        }
    }


}
