@extends('layouts.dashboard')
@section('title')
    Store Dashboard 
@endsection
@section('content')
<div class="section-content section-dashboard-home mx-4" data-aos="fade-up">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Dashboard</h2>
      <p class="dashboard-subtitle">
        Look what you have made today!
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">
                Customer
              </div>
              <div class="dashboard-card-subtitle">
                15,289
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">
                Revenue
              </div>
              <div class="dashboard-card-subtitle">
                $928,87
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">
                Transaction
              </div>
              <div class="dashboard-card-subtitle">
                22,989,999
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12 mt-2">
          <h5 class="mb-3">
            Recent Transactions
          </h5>
          <a href="/dashboard-transaction-details.html" class="card card-list d-block">
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">

                  <img src="/images/dashboard-icon-product-1.png" alt="">
                </div>
                <div class="col-md-4">
                  Shirup Marzzan
                </div>
                <div class="col-md-3">
                    Diki Setiawan
                </div>
                <div class="col-md-3">
                    12 Januari, 2023
                </div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/dashboard-arrow-right.svg" alt="">
                </div>
            </div>
          </div>
          </a>
          <a href="/dashboard-transaction-details.html" class="card card-list d-block">
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">

                  <img src="/images/dashboard-icon-product-2.png" alt="">
                </div>
                <div class="col-md-4">
                  Lefrone X
                </div>
                <div class="col-md-3">
                    Brian
                </div>
                <div class="col-md-3">
                    12 Januari, 2023
                </div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/dashboard-arrow-right.svg" alt="">
                </div>
            </div>
          </div>
          </a>
            <a href="/dashboard-transaction-details.html" class="card card-list d-block">
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">

                  <img src="/images/dashboard-icon-product-3.png" alt="">
                </div>
                <div class="col-md-4">
                  Shofa Lembute
                </div>
                <div class="col-md-3">
                    Sharukhan
                </div>
                <div class="col-md-3">
                    12 Januari, 2023
                </div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/dashboard-arrow-right.svg" alt="">
                </div>
            </div>
          </div>
          </a>
        </div>
        

      </div>

    </div>
</div>
@endsection