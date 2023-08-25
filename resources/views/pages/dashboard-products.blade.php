@extends('layouts.dashboard')
@section('title')
    Store Dashboard Product
@endsection
@section('content')
<div class="section-content section-dashboard-home mx-4" data-aos="fade-up">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">My Products</h2>
    <p class="dashboard-subtitle">
      Manage it well and get money
    </p>
  </div>
  <div class="dashboard-content">
    <div class="row">
      <div class="col-12">
        <a href="/dashboard-products-create.html" class="btn btn-success">
          Add New Products
        </a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="/dashboard-products-details.html" class="card card-dashboard-products d-block" >
            <div class="card-body">
              <img src="/images/product-card-1.png" class="w-100 mb-2" alt="card-1">
              <div class="product-title">
                Shirup Marzzan
              </div>
              <div class="product-subtitle">
                Foods
              </div>
            </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="/dashboard-products-details.html" class="card card-dashboard-products d-block" >
            <div class="card-body">
              <img src="/images/product-card-2.png" class="w-100 mb-2" alt="card-1">
              <div class="product-title">
                Shirup Marzzan
              </div>
              <div class="product-subtitle">
                Foods
              </div>
            </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="/dashboard-products-details.html" class="card card-dashboard-products d-block" >
            <div class="card-body">
              <img src="/images/product-card-3.png" class="w-100 mb-2" alt="card-1">
              <div class="product-title">
                Shirup Marzzan
              </div>
              <div class="product-subtitle">
                Foods
              </div>
            </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="/dashboard-products-details.html" class="card card-dashboard-products d-block" >
            <div class="card-body">
              <img src="/images/product-card-4.png" class="w-100 mb-2" alt="card-1">
              <div class="product-title">
                Shirup Marzzan
              </div>
              <div class="product-subtitle">
                Foods
              </div>
            </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="/dashboard-products-details.html" class="card card-dashboard-products d-block" >
            <div class="card-body">
              <img src="/images/product-card-5.png" class="w-100 mb-2" alt="card-1">
              <div class="product-title">
                Shirup Marzzan
              </div>
              <div class="product-subtitle">
                Foods
              </div>
            </div>
        </a>
      </div>
    </div>
  </div>
</div>
@endsection