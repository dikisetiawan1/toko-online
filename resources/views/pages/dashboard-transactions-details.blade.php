@extends('layouts.dashboard')
@section('title')
    Store Dashboard Transactions Details
@endsection
@section('content')
<div class="section-content section-dashboard-home mx-4" data-aos="fade-up">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">#STORE0839</h2>
    <p class="dashboard-subtitle">
      Transactions Details
    </p>
  </div>
 <div class="dashboard-content" id="transactionDetails">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-12 col-md-4">
  <img src="/images/product-details-1.jpg" class="w-100 mb-3" alt="">
</div>
<div class="col-12 col-md-8">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="product-title">
        Customer Name
      </div>

      <div class="product-subtitle">
        Angga Riski
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Product Name
      </div>
      <div class="product-subtitle">
        Shirup Marzzan
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Date of transaction
      </div>
      <div class="product-subtitle">
        12 Januari, 2020
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Status
      </div>
      <div class="product-subtitle text-danger">
        Pending
      </div>
    </div>
     <div class="col-12 col-md-6">
      <div class="product-title">
        Total amount
      </div>

      <div class="product-subtitle">
        $280,409
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Mobile
      </div>
      <div class="product-subtitle">
        +628 2020 11111
      </div>
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-12 mt-4">
  <h5>Shipping Information</h5>
</div>
<div class="col-12">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="product-title">
        Addres 1
      </div>

      <div class="product-subtitle">
       Setra Duta cemara
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
       Adddress 2
      </div>

      <div class="product-subtitle">
        Blok 98 no. 23
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Province
      </div>
      <div class="product-subtitle">
        West Java
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        City 
      </div>
      <div class="product-subtitle">
        Bandung
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Postal Code
      </div>
      <div class="product-subtitle">
        09797868
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="product-title">
        Country
      </div>
      <div class="product-subtitle">
        Indonesia
      </div>
    </div>
    <div class="col-12 col-md-2">
      <div class="product-title">
        Status
      </div>
      <select name="status" id="status" class="form-control" v-model="status">
        <option value="UNPAID">Unpaid</option>
        <option value="PENDING">Pending</option>
        <option value="SHIPPING">Shipping</option>
        <option value="SUCCESS">success</option>
      </select>
    </div>
    <template v-if="status == 'SHIPPING'">
      <div class="col-md-3">
        <div class="product-title">Input Resi</div>
        <input 
        type="text" 
        class="form-control"
        name="resi" 
        v-model="resi">
      </div>
      <div class="col-md-4">
        <button type="submit" class="btn btn-success btn-block mt-4">Update Now</button>
      </div>
    </template>
  </div>
</div>
</div>
<div class="row mt-4">
    <div class="col-12 text-right">
          <button type="submit" class="btn btn-success btn-lg mt-4">Save now</button>
        </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
  var transactionDetails = new Vue({
    el: '#transactionDetails',
    data:{
      status: "SHIPPING",
      resi: "BDD0986686252777"
    }
  });
</script>
@endpush