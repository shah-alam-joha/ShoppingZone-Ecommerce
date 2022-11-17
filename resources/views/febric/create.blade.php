@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content-wrapper">

    <div class="card">
      <div class="card-header">
        Add febric



      </div>
      <div class="card-body">

        <form action="{{ route('febric.store') }}" method="post" enctype="multipart/form-data">

          @csrf

          @include('layouts.messages')
          

          <div class="form-group">
            <label for="code">Code</label>
            <input type="number" class="form-control" id="code" name="code" placeholder="Enter febric code">
          </div> 

          <div class="form-group">
            <label for="total_yards">Total Yards</label>
            <input type="number" class="form-control" id="total_yards" name="total_yards" placeholder="Enter febric total yards">
          </div> 

          <div class="form-group">
            <label for="per_yard_price">Per yard price</label>
            <input type="number" class="form-control" id="per_yard_price" name="per_yard_price" placeholder="Enter febric per yard price">
          </div>

          <div class="form-group">
            <label for="image">Febric Image</label>

            <input type="file" class="form-control" name="image" id="image">
          </div>              



          <button type="submit" class="btn btn-primary">Add febric</button>

        </form>

      </div>
    </div>
  </div>

</div>
</div>

<!-- main-panel ends -->
@endsection()