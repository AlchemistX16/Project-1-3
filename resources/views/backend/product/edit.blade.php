@extends('layouts.master_backend')
@section('con')
    <h1>Product</h1>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-9">
                    <h5 class="card-header">Edit Product</h5>
                    <div class="card-body">
                        <form action="{{ url('admin/product/update/' . $pro->product_id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf




                            <div>
                                <label for="defaultFormControlInput" class="form-label">Product Name</label>
                                <input style="color:#fff" name="name" type="text" class="form-control" type="text"
                                    name="name" value="{{ $pro->name }}" class="form-control"
                                    id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                                    aria-describedby="defaultFormControlHelp" style="color: #fff" />
                                <div class="mt-3">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="defaultFormControlInput" class="form-label">Price</label>
                                <input style="color:#fff" name="price" type="text" class="form-control" type="text"
                                    name="price" value="{{ $pro->price }}" class="form-control"
                                    id="defaultFormControlInput" placeholder="กรุณากรอกราคาสินค้า"
                                    aria-describedby="defaultFormControlHelp" style="color: #fff" />
                                <div class="mt-3">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="defaultFormControlInput" class="form-label">Description</label>
                                <input style="color:#fff" name="description" type="text" class="form-control" type="text"
                                    name="description" value="{{ $pro->description }}" class="form-control"
                                    id="defaultFormControlInput" placeholder="กรุณากรอกรายละเอียดสินค้า"
                                    aria-describedby="defaultFormControlHelp" style="color: #fff" />
                                <div class="mt-3">
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select name="category_id" class="form-control" id="exampleFormControlSelect1"
                                        style="color:#fff">
                                        <option selected style="color:#fff">กรุณาเลือกประเภทสินค้า</option>

                                        @foreach ($cat as $c)
                                            <option value="{{ $c->category_id }}"
                                                @if ($c->category_id == $pro->category_id) selected @endif>{{ $c->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="defaultFormControlInput" class="form-label">Images</label>
                                <div class="input-group">
                                    <input type="file" name="image" value="{{ $pro->image }}" class="form-control"
                                        id="inputGroupFile02" />
                                </div>
                                <div class="mt-4">
                                    <img src="{{ asset('backend/product/resize/' . $pro->image) }}" alt = "">
                                </div>

                                <button type="submit" value="อัพเดท" class="btn btn-success mt-3">Update</button>
                                <a href="{{ route('p.index') }}"class="btn btn-danger mt-3 mx-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
