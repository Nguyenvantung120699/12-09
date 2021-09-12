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
          <div class="table-responsive" style="background-color: #E6E6E6;border-radius: 10px;">
            <div class="text-center" style="padding: 1% 1% 1% 1%;">
              <h3>Danh Mục Kinh Doanh</h3>
            </div>
            <table class="table" style="margin: 2% 2% 2% 2%;">
            <thead>
              <tr>
                <th scope="col">mã</th>
                <th scope="col">tên</th>
                <th scope="col">trạng thái</th>
                <th scope="col">mô tả</th>
                <th scope="col">ngày thêm</th>
                <th scope="col">
                    <a href="{{url('admin/category/create')}}">
                        <button type="button" class="btn btn-success">Thêm Mới</button>
                    </a>
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($category as $c)
              <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->name}}</td>
                <td>
                   @if($c->status == 1)
                     Hoạt Động
                   @else
                     Không Hoạt Động
                   @endif
                </td>
                <td>{{$c->description}}</td>
                <td>{{$c->created_at}}</td>
                <td>
                  <div class="btn-group">
                    <a href="{{url('admin/category/detail',['id'=>$c->id])}}"><button type="button" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> Xem</button></a>
                    <a href="{{url('admin/category/edit',['id'=>$c->id])}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>
                    <a id="deletebtn" href="{{url('admin/category/delete',['id'=>$c->id])}}"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button></a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
  @endsection
