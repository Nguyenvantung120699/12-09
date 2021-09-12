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
              <form style="padding: 5% 5% 5% 5%" method="post" action="{{url("admin/products/store")}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 text-center">
                    <h3>Thêm Sản Phẩm</h3>
                </div>
                <div class="col-md-12 row">
                  <div class="col-8">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Tên Loại</label>
                      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Tên sản phẩm...">
                    </div>
                    <div class="form-group col-12 row">
                      <div class="form-group col-6 row">
                          <label for="exampleFormControlSelect1">Thương Hiệu</label>
                          <select class="form-control" name="brands_id" id="exampleFormControlSelect1">
                            @php
                                $brands = \App\Models\Brands::all();
                            @endphp
                                <option selected value=""></option>
                            @foreach($brands as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-6">
                          <label for="exampleFormControlSelect1">Trạng Thái</label>
                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option value="1">Hoạt Động</option>
                            <option value="2">Không Hoạt Động</option>
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Mô Tả</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="col-4">
                      <label for="exampleFormControlInput1">Tải Ảnh</label>
                      <div class="form-group custom-file">
                        <button class="btn btn-danger text-center" style="width: 200px;">
                          <i class="fa fa-cloud-upload" style="font-size: 50px;" aria-hidden="true">
                          <input name="thumbnail" type="file" onchange="readURL(this);" class="custom-file-input" id="validatedCustomFile" required></i>
                        </button>
                      </div>
                      <div style="padding-top: 20%;" class="col-12">
                        <img style="width: 170px;height: 170px;border-radius: 5%;" id="logo" src="https://static.thenounproject.com/png/778835-200.png" alt="your image"/>
                      </div>
                  </div>
                </div>
                <div class="col-md-12 text-center" style="border-top: 1px solid;">
                   <div class="col-12" style="padding: 5% 5% 5% 5%;">
                        <h3>Thêm Thuộc Tính Sản Phẩm</h3>
                   </div>
                </div>
                <div class="col-md-12 row">
                  <div class="col-12">
                    <div class="col-12 row">
                        <div class="col-6">
                            <label for="exampleFormControlInput1"><h5>Kích Cỡ</h5></label>
                            <div class="form-group">
                              @php
                                $productattribute = \App\Models\ProductsAttribute::all();
                                @endphp
                                @foreach($productattribute as $c)
                                    @if($c->name == "size")
                                    <div class="form-check form-check-inline">
                                      <input  name="attribute_id[]" multiple class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$c->id}}">
                                      <label class="form-check-label" for="inlineCheckbox1">{{$c->value}}</label>
                                       <div class="form-group">
                                         <label for="exampleFormControlInput1">Số Lượng</label>
                                            <input type="number" name="quantity[]" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">Giá</label>
                                              <input type="number" name="price[]" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlInput1"><h5>Màu Sắc</h5></label>
                            <div class="form-group">
                              @php
                                $productattribute = \App\Models\ProductsAttribute::all();
                                @endphp
                                @foreach($productattribute as $c)
                                    @if($c->name == "color")
                                    <div class="form-check form-check-inline">
                                      <input  name="attribute_id[]" multiple class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$c->id}}">
                                      <label class="form-check-label" for="inlineCheckbox1">{{$c->value}}</label>
                                       <div class="form-group">
                                         <label for="exampleFormControlInput1">Số Lượng</label>
                                            <input type="number" name="quantity[]" class="form-control" id="exampleFormControlInput1">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">Giá</label>
                                              <input type="number" name="price[]" class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 row">
                        <div class="col-6">
                             <div class="form-group">
                             <label for="exampleFormControlInput1">Số Lượng</label>
                                <input type="number" name="quantity" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Giá</label>
                              <input type="number" name="price" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-12 row">
                    <label for="exampleFormControlInput1">Tải Ảnh</label>
                      <div class="form-group custom-file">
                        <button class="btn btn-danger text-center" style="width: 100%;">
                          <i class="fa fa-cloud-upload" style="font-size: 50px;" aria-hidden="true">
                          <input name="gallery[]" type="file" class="custom-file-input" multiple id="galleryupload" required></i>
                        </button>
                      </div>
                      <div class="col-12 row" id="dvPreview" style="padding-top: 5%;" class="col-12">
                      </div>
                    </div>
                    <div class="form-group col-12 row">
                      <label for="exampleFormControlTextarea1">Mô Tả</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
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

