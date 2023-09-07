@extends('layouts.dashboard')
@section('title')
    Account Settings 
@endsection
@section('content')
<div class="section-content section-dashboard-home mx-4" data-aos="fade-up">
  <div class="dashboard-heading">
    <h2 class="dashboard-title">My Account</h2>
    <p class="dashboard-subtitle">
      Update your current ptofile
    </p>
  </div>
 <div class="dashboard-content">
  <div class="row">
    <div class="col-12">
      <form action="">
        <div class="card">
          <div class="card-body">
    <div class="row mb-2" data-aos="fade-down" data-aos-delay="200">
<div class="col-md-6">
<div class="form-group">
  <label for="name">Your Name</label>
  <input 
  type="text" 
  class="form-control" 
  id="name" 
  name="name"
  value="dikset..">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label for="email">Your Email </label>
  <input 
  type="email" 
  class="form-control" 
  id="email" 
  name="email"
  value="dikset101@gmail.com">
</div>
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

    <div class="row">
      <div class="col text-right">
        <button type="submit " class="btn btn-success px-5">
          Save Now!

        </button>
      </div>
    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection