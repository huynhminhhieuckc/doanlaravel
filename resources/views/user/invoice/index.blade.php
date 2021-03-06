@extends('user.layouts')
@section('title') Home | E-Shopper @endsection

@section('content')
<section id="cart_items">
<div style="margin:100px">
   <form action="{{ route('addInvoice') }}" method="post" enctype="multipart/form">
    @csrf
    Địa chỉ giao hàng:<br><input style="width:300px" type="text" name="DChi"><br><br>
    Số điện thoại:<br><input style="width:300px" type="tel" name="SDT"><br><br>
    @if($errors->first('DChi')!=null || $errors->first('SDT')!=null)
    <span style="color:red">Bạn phải nhập đầy đủ tất cả thông tin</span>
    @endif
    <br>
    <button type="submit" class="btn btn-primary">Thanh toán</button>
   </form>
</div>

</section>
@endsection
