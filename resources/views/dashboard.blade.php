@extends('layouts.master_backend')
@section('con')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="margin-top:2cm">Dashboard</h4>

        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card" >
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9" >
                      <div class="d-flex align-items-center align-self-start" >
                        <h3 class="card-title mb-2">{{ $u->count() }}</h3>
                        <p class="text-warning ml-2 mb-0 font-weight-medium">คน</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger ">
                        <span class="mdi mdi-account"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">User</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="card-title mb-2">{{ $c->count() }}</h3>
                        <p class="text-warning ml-2 mb-0 font-weight-medium">ประเภท</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-table-large"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Category</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="card-title mb-2">{{ $p->count() }}</h3>
                        <p class="text-warning ml-2 mb-0 font-weight-medium">เมนู</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-format-list-bulleted-type"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Product</h6>
                </div>
              </div>
            </div>

          </div>

      </div>
    </div>
</div>

@endsection
