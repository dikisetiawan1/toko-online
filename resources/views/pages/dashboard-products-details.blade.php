@extends('layouts.dashboard')
@section('title')
    Store Dashboard Product Details
@endsection
@section('content')

<div class="section-content section-dashboard-home mx-4" data-aos="fade-up">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">Shirup Marzzan</h2>
    <p class="dashboard-subtitle">
      Products Details
    </p>
  </div>
 <div class="dashboard-content">
  <div class="row">
    <div class="col-12">
      <form action="">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group" >
                  <label for="">Product Name</label>
                  <input type="text" class="form-control " >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" >
                  <label for="">Price</label>
                  <input type="number" class="form-control " >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group" >
                  <label for="">Kategori</label>
                  <select name="category" id="" class="form-control">
                    <option value="" disabled>Select Category</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group" >
                  <label for="">Description</label>
                  <textarea name="editor" ></textarea>
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col text-right">
                <button type="submit " class="btn btn-success px-5 btn-block">
                  Save Now!

                </button>
      </div>
    </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
        <div class="col-md-4">
          <div class="gallery-container">
            <img src="/images/product-card-1.png" alt="" class="w-100">
            <a href="#" class="delete-gallery">
              <img src="/images/icon-delete.svg" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-container">
            <img src="/images/product-card-2.png" alt="" class="w-100">
            <a href="#" class="delete-gallery">
              <img src="/images/icon-delete.svg" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-container">
            <img src="/images/product-card-3.png" alt="" class="w-100">
            <a href="#" class="delete-gallery">
              <img src="/images/icon-delete.svg" alt="">
            </a>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-secondary btn-block mt-4">
            Add Photo
          </button>
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
<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'editor' );
</script>
@endpush