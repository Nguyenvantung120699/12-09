@extends('theme_admin.layout_admin.layout_admin')

@section('content')
<div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div style="margin-top: 4%;" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                This week
              </button>
            </div>
          </div>
          <div class="table-responsive">
            <div class="col-8 offset-2" style="background-color: #E6E6E6;border-radius:20px">
              <form style="padding: 5% 5% 5% 5%" method="post" action="{{url("admin/brand/update",['id'=>$brands->id])}}" enctype="multipart/form-data">
                 <div class="col-md-12 text-center">
                    <h3>Sửa Thương Hiệu : {{$brands->name}}</h3>
                </div>
                @csrf
                <div class="col-md-12 row">
                  <div class="col-8">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tên Loại</label>
                       <input type="text" name="name" value="{{$brands->name}}" class="form-control" id="exampleFormControlInput1" placeholder="name...">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Trạng Thái</label>
                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                            @if($brands->status == 1)
                              <option value="1" active="true">Hoạt Động</option>
                              <option value="2">Không Hoạt Động</option>
                            @else
                              <option value="2">Không Hoạt Động</option>
                              <option value="1" active="true">Hoạt Động</option>
                            @endif
                          </select>
                        </div>
                       <div class="form-group">
                          <label for="exampleFormControlTextarea1">Mô Tả</label>
                          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$brands->description}}</textarea>
                        </div>
                    </div>
                  <div class="col-4">
                      <label for="exampleFormControlInput1">Tải Logo</label>
                      <div class="form-group custom-file">
                        <button class="btn btn-danger text-center" style="width: 200px;">
                          <i class="fa fa-cloud-upload" style="font-size: 50px;" aria-hidden="true">
                          <input name="logo" type="file" value="{{$brands->logo}}" onchange="readURL(this);" class="custom-file-input" id="validatedCustomFile"></i>
                        </button>
                      </div>
                      <div style="padding-top: 20%;" class="col-12">
                        <img style="width: 170px;height: 170px;border-radius: 5%;" id="logo" src="{{asset("$brands->logo")}}" alt="your image"/>
                      </div>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <button type="submit" class="btn btn-lg btn-success">Hoàn Tất</button>
                  <button class="btn btn-lg btn-light">Hủy</button>
                </div>
              </form>
            </div>
          </div>
  @endsection
