@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit supplier



      </div>
      <div class="card-body">

        <form action="{{ route('supplier.update', $supplier->id) }}" method="post" enctype="multipart/form-data">

          @csrf

        @include('layouts.messages')
          

          <div class="form-group">
            <label for="supplier_name">Supplier Name</label>
            <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{ $supplier->supplier_name }}">
          </div>    

        <button type="submit" class="btn btn-success">Update supplier</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()