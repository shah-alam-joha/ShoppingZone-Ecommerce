@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add supplier



      </div>
      <div class="card-body">

        <form action="{{ route('supplier.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('layouts.messages')
          

          <div class="form-group">
            <label for="supplier_name">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Enter supplier_name">
          </div> 


          <button type="submit" class="btn btn-primary">Add supplier</button>

        </form>

      </div>
    </div>
  </div>

</div>
</div>

<!-- main-panel ends -->
@endsection()