<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;


class SuppliersController extends Controller
{
     public function index()
    {
        $suppliers = Supplier::orderBy('id','desc')->get();
        return view('supplier.index',compact('suppliers'));
    }

     public function profile()
    {
        // $supplier = Supplier::find($id);
        return view('supplier.profile');
    }

    public function create()
    {

        return view ('supplier.create');
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view ('supplier.edit', compact('supplier'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'supplier_name' => 'required',
            
        ],
        [
            'supplier_name.required' => 'Please provide unique supplier name',
           
        ]);

        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->save();

        session()->flash('success', 'A new supplier has added successfully !!');
        return redirect()->route('suppliers');
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
              'supplier_name' => 'required',
           
        ],
        [
            'supplier_name.required' => 'Please provide unique supplier name',
           
        ]);

        $supplier = Supplier::find($id);
        $supplier->supplier_name = $request->supplier_name;
       
        $supplier->save();

        session()->flash('success', 'supplier has updated successfully !!');
        return redirect()->route('suppliers');

    } 
    public function delete($id)
    {
        $supplier = Supplier::find($id);
        if(!is_null($supplier)){
            $supplier->delete();
        }
        session()->flash('success', 'supplier has deleted successfully !!');
        return back();
    }
}
