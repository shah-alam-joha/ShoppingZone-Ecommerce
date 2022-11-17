@extends('layouts.main')

@section('title')
User List | A h o n a T e x t i l e
@endsection
@section('content')
<!--Content Start-->
<div class="body-content">
    <div class="card mb-4">
        <div class="card-body">
            <div class="col-12 pl-0 pr-0">
                <div class="form-group">
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold font-italic mt-3">User List </h4>
                    </div>
                </div>

                <div class="table-responsive p-1">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap text-center" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Phone</th>

                                <th style="width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @php $i=0; 
                           @endphp
                           @foreach($data as $row)
                           <tr>
                            <td>{{++$i}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                           
                           <td>
                             <a href="{{URL::to('/user/edit/'.$row->id)}}" class="btn btn-sm btn-info" ><span class="fa fa-edit" ></span></a>
                             <a href="{{URL::to('/user/delete/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete"><span class="fa fa-trash"></span></a>
                             
                         </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>
</div>
</div>
<!--Content End-->

@endsection