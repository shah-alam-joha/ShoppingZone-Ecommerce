@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Edit Febric



      </div>
      <div class="card-body">

        <form action="{{ route('febric.update', $febric->id) }}" method="post" enctype="multipart/form-data">

          @csrf

        @include('layouts.messages')
          

          <div class="form-group">
            <label for="code">Code</label>
            <input type="number" class="form-control" id="code" name="code" value="{{ $febric->code }}">
          </div>

            <div class="form-group">
            <label for="total_yards">Total Yards</label>
            <input type="number" class="form-control" id="total_yards" name="total_yards" value="{{ $febric->total_yards }}">
          </div>

          <div class="form-group">
            <label for="per_yard_price">Per yard price</label>
            <input type="number" class="form-control" id="per_yard_price" name="per_yard_price" value="{{ $febric->per_yard_price }}">
          </div>

        <div class="form-group">
          <label for="oldimage">febric Old Image</label> <br>

          <img src="{{ asset('images/febrics/' .$febric->image) }}" width="100"> <br>

           <label for="image">febric New Image (optional)</label>

          <input type="file" class="form-control" name="image" id="image">
        </div>              

        
        
        <button type="submit" class="btn btn-success">Update febric</button>

      </form>

    </div>
  </div>
</div>

</div>
</div>
<!-- main-panel ends -->
@endsection()