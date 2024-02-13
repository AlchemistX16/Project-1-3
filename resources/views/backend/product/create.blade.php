@extends('layouts.master_backend')
@section('con')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-9">
                    <h5 class="card-header">Product</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/product/insert') }}" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <br>
                                <label for="defaultFormControlInput" class="form-label">Product Name</label>
                                <input style="color:#fff" name="name" type="text" class="form-control"
                                    id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                                    aria-describedby="defaultFormControlHelp" />
                                <div class="mt-3">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="defaultFormControlInput" class="form-label">Price</label>
                                <input style="color:#fff" name="price" type="text" class="form-control"
                                    id="defaultFormControlInput" placeholder="กรุณากรอกราคาสินค้า"
                                    aria-describedby="defaultFormControlHelp" />
                                <div class="mt-3">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="defaultFormControlInput" class="form-label">Description</label>
                                <input style="color:#fff" name="description" type="text" class="form-control"
                                    id="defaultFormControlInput" placeholder="กรุณากรอกรายละเอียดสินค้า"
                                    aria-describedby="defaultFormControlHelp" />
                                <div class="mt-3">
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1" class="form-label" >Category</label>
                                    <select name="category_id" class="form-control" id="exampleFormControlSelect1" style="color:#fff">
                                        <option selected style="color:#fff">กรุณาเลือกประเภทสินค้า</option>

                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->category_id }}" style="color:#fff">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3">
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="defaultFormControlInput" class="form-label">Image</label>
                                <input style="color:#fff" name="image" type="file" class="form-control"
                                    id="inputGroupFile02" />
                            </div>
                            <input type="submit" value="บันทึก" class="btn btn-success mt-3">
                            <a href="{{ route('p.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
