<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Febric;
use Image;
use File;

class FebricsController extends Controller
{
        public function index()
    {
        $febrics = Febric::orderBy('id','desc')->get();
        return view('febric.index',compact('febrics'));
    }

    public function create()
    {

        return view ('febric.create');
    }

    public function edit($id)
    {
        $febric = Febric::find($id);
        return view ('febric.edit', compact('febric'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'image' => 'nullable|image',
            'total_yards' => 'required',
            'per_yard_price' => 'required',
            
        ],
        [
            'code.required' => 'Please provide unique febric code',
            'image.required' => 'Please provide a febric Image',
            'image.image' => 'Please provide a valid febric Image',
            'total_yards.required' => 'Please provide a febric total yards',
            'per_yard_price.required' => 'Please provide a febric per yard price',
           
        ]);

        $febric = new Febric();
        $febric->code = $request->code;
        $febric->total_yards = $request->total_yards;
        $febric->per_yard_price = $request->per_yard_price;
        $febric->stock_yards = $request->stock_yards;
      
        

    if ($request->hasFile('image')) {
        $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/febrics/'.$img);
            Image::make($image)->save($location);
            $febric->image = $img;
        }

        $febric->save();

        session()->flash('success', 'A new febric has added successfully !!');
        return redirect()->route('febrics');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required',
            'image' => 'nullable|image',
            'total_yards' => 'required',
            'per_yard_price' => 'required',
           
        ],
        [
            'code.required' => 'Please provide unique febric code',
            // 'image.required' => 'Please provide a febric Image',
            'image.image' => 'Please provide a valid febric Image',
            'total_yards.required' => 'Please provide a febric total yards',
            'per_yard_price.required' => 'Please provide a febric per yard price',
           
        ]);

        $febric = Febric::find($id);
        $febric->code = $request->code;
        $febric->total_yards = $request->total_yards;
        $febric->per_yard_price = $request->per_yard_price;
        $febric->stock_yards = $request->stock_yards;
       

         if ($request->hasFile('image')) {
            //delete the old febric image
            if (File::exists('images/febrics/'.$febric->image)) {
                File::delete('images/febrics/'.$febric->image);
            }

            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = 'images/febrics/'.$img;
            Image::make($image)->save($location);
            $febric->image = $img;
            
        }
        $febric->save();

        session()->flash('success', 'febric has updated successfully !!');
        return redirect()->route('febrics');

    } 
    public function delete($id)
    {
        $febric = Febric::find($id);
        if(!is_null($febric)){
            if (File::exists('images/febrics/'.$febric->image)) {
                File::delete('images/febrics/'.$febric->image);
            }
            $febric->delete();
        }
        session()->flash('success', 'febric has deleted successfully !!');
        return back();
    }
}
