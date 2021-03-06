@extends('admin.app')
@section('title') Chỉnh sửa nhân viên @endsection
@section('content')
<div class="container mt-3">
  @if($errors->first('MaKH')!=null || $errors->first('TenKH')!=null ||$errors->first('Dchi')!=null || $errors->first('SDT')!=null || $errors->first('MatKhau')!=null)
  <span style="color:red">Bạn phải nhập đầy đủ tất cả thông tin</span>
  @endif
    <div class="row">
      <div class="col-12 ">
        <form action="{{route('admin.khachhang.update',$khachhang->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="MaKH">Mã khách hàng :</label>
            <input type="text" class="form-control rounded-0" id="MaKH" placeholder="MaKH" name="MaKH"
              value="{{$khachhang->MaKH}}">
          </div>
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="TenKH">Tên nhân viên :</label>
            <input type="text" class="form-control rounded-0" id="TenKH" placeholder="TenKH" name="TenKH"
              value="{{$khachhang->TenKH}}">
          </div>
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="Dchi">địa chỉ :</label>
            <input type="email" class="form-control rounded-0" id="Dchi" placeholder="Dchi" name="Dchi"
              value="{{$khachhang->Dchi}}">
          </div>
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="SDT">Số điện thoại :</label>
            <input type="text" class="form-control rounded-0" id="SDT" placeholder="SDT" name="SDT"
              value="{{$khachhang->SDT}}">
          </div>
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="MatKhau">Password:</label>
            <input type="password" class="form-control rounded-0" id="MatKhau" placeholder="MatKhau" name="MatKhau"
              value="">
          </div>
          
          <div class="form-group ">
            <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
              Lưu khách hàng
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
