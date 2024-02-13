@extends('layouts.master_backend')
@section('con')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="margin-top:2cm">User</h4>
        <div class="table-responsive">
            <table class="table table-bordered" style="color: #fff ;margin-top: 0.5cm">
            <thead class="table-dark" style="color: #d90009">
              <tr style="background-color: #d90009;">
                <th style="color:#fff;">No</th>
                <th style="color:#fff;">Name</th>
                <th style="color:#fff;">Email</th>
                <th style="color:#fff;">Phone</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($user as $u )
              <tr>
              <td>{{ $u->id }}</td>
              <td>{{ $u->name }}</td>
              <td>{{ $u->email }}</td>
              <td>{{ $u->phone }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

</div>
<!-- / Content -->
@endsection
