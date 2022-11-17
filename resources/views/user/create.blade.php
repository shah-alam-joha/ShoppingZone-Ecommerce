@extends('layouts.main')

@section('title')
User | A h o n a T e x t i l e
@endsection
@section('content')

<!--Content Start-->
<div class="body-content">
  <div class="card mb-4">
    <div class="card-body">
      <div class="col-12 pl-0 pr-0">
        <div class="form-group">
          <div class="col-sm-12">
            <h4 class="text-center font-weight-bold font-italic mt-3">New User</h4>
          </div>
        </div>
        <form action="{{URL::to('/user/save')}}" method="post" enctype="multipart/form-data" class="form-inline">
          @csrf
         
          <div class="form-group col-md-6 mb-3">
            <label for="ProductName" class="col-sm-4 col-form-label text-right">User Name</label>
            <input type="text" name="name" class="form-control col-sm-8" placeholder="User Name" value="" id="ProductName" required>
            <span class="text-danger"></span>
          </div>

          <div class="form-group col-md-6 mb-3">
            <label for="Productcode" class="col-sm-4 col-form-label text-right">Phone Number</label>
            <input type="text" name="phone" class="form-control col-sm-8" placeholder="Phone Number" value="" id="Productcode" required>
            <span class="text-danger"></span>
          </div>
          <div class="form-group col-md-6 mb-3">
            <label for="sellingprice" class="col-sm-4 col-form-label text-right">Email </label>
            <input type="email" name="email" class="form-control col-sm-8" id="sellingprice" placeholder="Enter Your Email" value=""  required>
            <span class="text-danger"></span>
          </div> 
          

          <div class="form-group col-md-6 mb-3">
            <label for="discountprice" class="col-sm-4 col-form-label text-right">Password</label>
            <input type="password" name="password" class="form-control col-sm-8" id="discountprice" placeholder="Enter 8 Digit password" value=""  required="">
            <span class="text-danger"></span>
          </div> 
          <div class="form-group col-md-6 mb-3">
            <label for=" " class="col-sm-4 col-form-label text-right">User Type</label>
           <select class="form-control col-sm-8" name="role">
             <option value="2">Normal User</option>
             <option value="3">Shop Admin</option>
             <option value="1">Super Admin</option>
           </select>
            <span class="text-danger"></span>
          </div>


    <div class="form-group col-md-12 mb-3">
      <button type="submit" class="btn btn-success my-btn-submit">Save</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

<!--Content End-->

@endsection