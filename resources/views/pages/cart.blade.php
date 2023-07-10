@extends('layouts.app')
@section('title')
    Store Cart Page
@endsection
@section('content')
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                 Cart
                </li>
              </ol>
            </nav>
  
          </div>
        </div>
      </div>
  
    </section>
  </div>
    </section>
    <!-- section cart -->
  
    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
                <thead>
                  <tr>
  
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="/images/product-card-5.png" alt="" class="cart-image"></td>
                    <td>
                      <div class="product-title">
                        Sofa Ternyaman
                      </div>
                      <div class="product-subtitle">
                        By Diki Setiawan
                      </div>
                    </td>
                    <td>
                      <div class="product-title">
                        $29,112
                      </div>
                      <div class="product-subtitle">
                        USD
                      </div>
                    </td>
                    <td><a href="#" class="btn btn-remove-cart">Removed</a></td>
                  </tr>
                  <tr>
                    <td><img src="/images/product-card-4.png" alt="" class="cart-image"></td>
                    <td>
                      <div class="product-title">
                        Sneaker
                      </div>
                      <div class="product-subtitle">
                        By Diki Setiawan
                      </div>
                    </td>
                    <td>
                      <div class="product-title">
                        $80,309
                      </div>
                      <div class="product-subtitle">
                        USD
                      </div>
                    </td>
                    <td><a href="#" class="btn btn-remove-cart">Removed</a></td>
                  </tr>
                  <tr>
                    <td><img src="/images/product-card-3.png" alt="" class="cart-image"></td>
                    <td>
                      <div class="product-title">
                        Coffee Holder
                      </div>
                      <div class="product-subtitle">
                        By Diki Setiawan
                      </div>
                    </td>
                    <td>
                      <div class="product-title">
                        $13,492
                      </div>
                      <div class="product-subtitle">
                        USD
                      </div>
                    </td>
                    <td><a href="#" class="btn btn-remove-cart">Removed</a></td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12 col-md-12"><hr /></div>
          <div class="col-12">
            <h2 class="mb-4">Shiping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-down" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input 
              type="text" 
              class="form-control" 
              id="addressOne" 
              name="addressOne"
              value="setra duta cemara">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 2</label>
              <input 
              type="text" 
              class="form-control" 
              id="addressTwo" 
              name="addressTwo"
              value="Blok B2 No. 34">
            </div>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-down" data-aos-delay="250">
          <div class="col-md-4">
          <div class="form-group">
            <label for="province">Province</label>
            <select 
            name="province" 
            id="province" 
            class="form-control">
              <option value="West Java">West Java</option>
              <option value="DKI Jakarta">DKI Jakarta</option>
              <option value="West Sumatra">West Sumatra</option>
          </select>
          </div>
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <label for="city">City</label>
         <select 
            name="city" 
            id="city"
            class="form-control"> 
            <option value="Bekasi">Bekasi</option>
            <option value="Bogor">Bogor</option>
            <option value="Bandung">Bandung</option>
        </select>
          </div>
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <label for="postalCode">Postal Code</label>
            <input 
            type="text" 
            name="postalCode"
            class="form-control" 
            id="postalCode" 
            value="123999">
          </div>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-down" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
                    <label for="country">Country</label>
                   <select 
                   name="country" 
                   id="country"
                   class="form-control">
                  <option value="Indonesia">Indonesia</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Singapore">Singapore</option>
                  </select>
                </div>
              </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" id="mobile"
                class="form-control" 
                value="+628 2020 11111">
                </div>
              </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12"><hr /></div>
          <div class="col-12">
            <h2 class="mb-1">Payment Informations</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">$10</div>
            <div class="product-subtitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$280</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$580</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">$392,409</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
          
              <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">Checkout Now</a>
          </div>
        </div>
        </div>
        </div>
      </div>
    </section>
  
   </div>

@endsection