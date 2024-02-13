@extends('layouts.master_backend')
@section('con')
@inject("Carbon", "Carbon\Carbon")
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="margin-top:2cm">Category</h4>
        <div class="table-responsive">
            <a href="{{ route('c.create') }}"class="btn btn-success mx-3"><i class='bx bxs-plus-circle' style="margin-top: 1cm"></i> เพิ่มข้อมูล</a>
          <table class="table table-bordered" style="color: #fff ;margin-top: 0.5cm">
            <thead style="color: #fff" >
              <tr style="background-color: #d90009;">
                <th style="color: #fff;"> ID </th>
                <th style="color: #fff;">Name</th>
                <th style="color: #fff;">Created_at</th>
                <th style="color: #fff;">Updated_at</th>
                <th style="color: #fff;">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $cat)
            <tr>
            <td>{{ $category->firstItem() + $loop->index }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $Carbon->parse($cat->created_at)->thaidate('D j M y เวลา H:i') }}</td>
            <td>{{ $Carbon->parse($cat->updated_at)->thaidate('D j M y เวลา H:i') }}</td>
            <td>
              <a href="{{ url('admin/category/edit/'.$cat->category_id) }}"><i class="mdi mdi-border-color" style="color: #fff ; margin:5px"></i></a>
              <a href="{{ url('admin/category/delete/'.$cat->category_id) }}"><i class="mdi mdi-close " style="color: #fff ; margin:5px"></i></a>
            </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
