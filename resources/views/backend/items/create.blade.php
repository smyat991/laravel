@extends('backend_master')

@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Items</h1>
        <p></p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Items</a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <h4>Item Create Form</h4>
            <a href="{{route('items.index')}}" class="btn btn-success float-right">Back</a>
            <br>
            
            <form method="post" action="{{route('items.store')}}" enctype="multipart/form-data" class="mt-3">
              @csrf
              <div class="form-group">
                <label for="codeInput">Codeno:</label>
                <input type="number" name="codeno" class="form-control" id="codeInput" value="{{old('codeno')}}">
              </div>
              <div class="form-group">
                <label for="nameInput">Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameInput" value="{{old('name')}}">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="fileInput">Photo:</label>
                <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" id="fileInput">
                @error('photo')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="priceInput">Price:</label>
                <input type="number" name="price" class="form-control" id="priceInput" value="{{old('price')}}">
              </div>
              <div class="form-group">
                <label for="discountInput">Discount:</label>
                <input type="text" name="discount" class="form-control" id="discountInput" value="{{old('discount')}}">
              </div>
              <div class="form-group">
                <label for="descriptionInput">Description:</label>
                <input type="text" name="description" class="form-control" id="descriptionInput" value="{{old('description')}}">
              </div>
              <div class="form-group">
                <label for="brandidInput">Brand_id:</label>
                <select name="brand_id" class="form-control">
                    @foreach($brands as $brand)
                      <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="subcategoryidInput">Subcategory_id:</label>
                <select name="subcategory_id" class="form-control">
                    @foreach($subcategories as $subcategory)
                      <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                    @endforeach
                </select>
              </div>

              <div class="form-group">
                <input type="submit" name="btn-submit" value="Save" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>   
    </div>    
  </main>
@endsection

@section('script')
  
@endsection
