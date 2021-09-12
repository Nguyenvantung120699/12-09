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
            <div class="col-md-12 text-center">
                <h3>Thông Tin Thương Hiệu : {{$brands->name}}</h3>
            </div>
            <div class="col-6 offset-3">
              <div class="list-group">
                <div style="background-color: #E6E6E6;" class="list-group-item">
                  <div class="d-flex w-100 justify-content-between">
                    <p class="mb-1"><h1>{{$brands->name}}</h1></p>
                    @if($brands->status == 1)
                     <small><p>Mã : {{$brands->id}}</p>Trạng Thái : Hoạt Động</small>
                     @else
                     <small><p>Mã : {{$brands->id}}</p>Trạng Thái :Không Hoạt Động</small>
                     @endif
                  </div>
                  <p class="mb-1"><b>Logo :</b> <img style="width: 150px;height: 150px;border-radius: 5%" src="{{asset("$brands->logo")}}"></p>
                  <p class="mb-1"><b>Chú Thích :</b> {{$brands->description}}</p>
                  <p class="mb-1"><b>Ngày Thêm :</b> {{$brands->created_at}}</p>
                </div>
              </div>
              <div class="btn row">
                <button class="btn btn-lg btn-light">Thoát</button>
              </div>
            </div>
          </div>
  @endsection
