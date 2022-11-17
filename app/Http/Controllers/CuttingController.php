<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cutting;
use Image;
use File;

class CuttingController extends Controller
{
    public function index()
    {
        return view('cutting.new');
    }

    public function add(Request $request)
    {
        if (count($request->febricId) > 0 ) {

            foreach ($request->febricId as $key => $value) {
              $this->validate($request, [
                'febricId' => 'required',
                'febric_quantity' => 'required',
            ],
            [
                'febricId.required' => 'Please provide a valid febric Id',
                'febric_quantity.required' => 'Please provide febric quantity for cutting',
            ]);

              $cutting = new Cutting;
              $cutting->febricId = $request->febricId[$key];
              $cutting->febric_colour = $request->febric_colour[$key];
              $cutting->febric_quantity = $request->febric_quantity[$key];
              
              // if ($request->hasFile('image')) {
              //     $image = $request->file('image');
              //     $img = time(). '.'. $image[$key]->getClientOriginalExtension();
              //     $location = public_path('images/cutting/'.$img);
              //     Image::make($image)->save($location);
              //     $cutting->image = $img;
              // }
              $cutting->save();
          }
      }
      session()->flash('success', 'A new cutting has been added successfully.');
      return redirect()->route('cutting.new');
  }

}
