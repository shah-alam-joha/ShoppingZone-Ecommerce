@extends('layouts.main')

@section('title')
User Edit| A h o n a T e x t i l e
@endsection
@section('content')

 <!--Content Start-->
    <section class="container-fluid">
        <div class="row content">
            <div class="col-12 pl-0 pr-0">
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">New User</h4>
                    </div>
                </div>
                <form action="{{URL::to('user/update/'.$data->id)}}" method="post" enctype="multipart/form-data" class="form-inline">
                    @csrf
                    
                    <div class="form-group col-md-6 mb-3">
                        <label for="ProductName" class="col-sm-4 col-form-label text-right">User Name</label>
                        <input type="text" name="name" class="form-control col-sm-8" placeholder="Product Name" value="{{$data->name}}" id="ProductName" required>
                        <span class="text-danger"></span>
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="Productcode" class="col-sm-4 col-form-label text-right">Phone Number</label>
                        <input type="text" name="phone" class="form-control col-sm-8" placeholder="Product code" value="{{$data->phone}}" id="Productcode" required>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="sellingprice" class="col-sm-4 col-form-label text-right">Email </label>
                        <input type="email" name="email" class="form-control col-sm-8" id="sellingprice" placeholder="Enter Your Email" value="{{$data->email}}"  required>
                        <span class="text-danger"></span>
                    </div> 
                     <div class="form-group col-md-6 mb-3">
                    <label for=" " class="col-sm-4 col-form-label text-right">User Type</label>
                   <select class="form-control col-sm-8" name="role">
                     <option @if($data->role==2) selected="" @else @endif value="2">Normal User</option>
                     <option @if($data->role==3) selected="" @else @endif value="3">Shop Admin</option>
                     <option @if($data->role==1) selected="" @else @endif value="1">Super Admin</option>
                   </select>
                    <span class="text-danger"></span>
                  </div>   
                   
            
                    <div class="form-group col-md-12 mb-3">
                        <button type="submit" class="btn btn-success my-btn-submit">Save </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Content End-->
  
@endsection