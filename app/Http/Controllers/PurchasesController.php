<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use Image;
use File;

class PurchasesController extends Controller
{
 public function index()
 {
     return view('purchase.new');
 }

 public function save(Request $request)
 {


    // return $request->all();

    if(count($request->purchaseId)>0){

        foreach($request->purchaseId as $key=>$value){

            $this->validate($request, [
                'code' => 'required',
                'purchaseId' => 'required',
                'image' => 'nullable|image',
                'total_yards' => 'required',
                'per_yard_price' => 'required',
            ],
            [
               'code.required' => 'Please provide a febric code',
               'image.mimes' => 'Please provide a valid febric Image ',
               'purchaseId.required' => 'Please provide a febric purchase id',
               'total_yards.required' => 'Please provide a total yards of this fabric purchase',
               'per_yard_price.required' => 'Please provide per yards price',
           ]);

            $purchase = new Purchase;



            $purchase->code = $request->code[$key];
            $purchase->purchaseId = $request->purchaseId[$key];
            $purchase->total_yards = $request->total_yards[$key];
            $purchase->per_yard_price = $request->per_yard_price[$key];
            $purchase->subtotal = ($request->total_yards[$key]) * ($request->per_yard_price[$key]);

            if ($request->hasFile('image')) {
                $images = $request->file('image');

                foreach ($images as $image) {
                    $img = time().'.'.$image->getClientOriginalExtension();
                    $location = public_path('images/purchases/'.$img);
                    Image::make($image)->save($location);
                    $purchase->image = $img;
                }
                
            }

            $purchase->save();

            
        }

    }
    session()->flash('success', 'A new purchase has added successfully !!');
    return redirect()->route('purchase.new');



}
}
