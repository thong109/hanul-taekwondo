@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Thông tin người mua
      </div>

      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>

              <th>Tên người đặt</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>

            <tr>

              <td>{{$order_by_id->customer_name}}</td>
              <td>{{$order_by_id->customer_phone}}</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br><br>
  <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Thông tin vận chuyển
      </div>
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>

              <th>Tên người vận chuyển</th>
              <th>Địa chỉ</th>
              <th>Số điện thoại</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$order_by_id->shipping_name}}</td>
              <td>{{$order_by_id->shipping_address}}</td>
              <td>{{$order_by_id->shipping_phone}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<br><br>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Chi tiết đơn hàng
      </div>

      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>

              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Giá</th>
              <th>Tổng</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>{{$order_by_id->product_name}}</td>
              <td>{{$order_by_id->product_sales_quantity}}</td>
              <td>{{number_format($order_by_id->product_price)}} VND</td>
              <td>{{number_format($order_by_id->product_price*$order_by_id->product_sales_quantity)}} VND</td>
              <td>{{$order_by_id->order_total}}</td>
            </tr>


          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br><br>


  @endsection
