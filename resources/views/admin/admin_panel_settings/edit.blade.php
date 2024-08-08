@extends('layouts.admin')
@section('title')
  تعديل بيانات الضبط العام
@endsection
@section('content-header-title')
  تعديل بيانات الضبط العام
@endsection
@section('content-header-breadcrumb-item-link')
  <a href="{{ route('admin.adminPanelSetting.index') }}">بيانات الضبط العام</a>
@endsection
@section('content-header-breadcrumb-item-link-active')
  تعديل بيانات الضبط العام
@endsection
@section('content-body')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header p-3">
          <h2 class="card-title">
            بيانات شركة
            <p class="text-bold d-inline text-primary"></p>
          </h2>
        </div>
        <div class="card-body">
          @if (@isset($data) && @!empty($data))
            <form method="post" action="{{ route('admin.adminPanelSetting.update') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-7">
                  <div class="form-row">
                    <div class="col-lg-8 col-md-12 mb-3">
                      <label for="system_name">إسم الشركة التجاري</label>
                      <input type="text" class="form-control" id="system_name" name="system_name" value="{{ $data['system_name'] }}">
                      @error('system_name')
                        <span class="text-danger d-block mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="col-lg-4 col-md-12 mb-3">
                      <label for="phone">هاتف الشركة</label>
                      <input type="number" class="form-control" id="phone" name="phone" value="{{ $data['phone'] }}">
                      @error('phone')
                        <span class="text-danger d-block mt-1">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-12 mb-3">
                      <label for="address">عنوان موقع الشركة</label>
                      <input type="text" class="form-control" id="address" name="address" value="{{ $data['address'] }}">
                    </div>
                    @error('address')
                      <span class="text-danger d-block mt-1">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="general_alert">رسالة تنبية أعلى الشاشة</label>
                      <input type="text" class="form-control" id="general_alert" name="general_alert" value="{{ $data['general_alert'] }}">
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 d-flex justify-content-center align-items-center flex-column">
                  {{-- <input class="w-100" type="file" id="photo" name="photo" /> --}}
                </div>
              </div>
              <button type="submit" class="btn btn-primary mb-3">تعديل البيانات</button>
            </form>
          @else
            <div class="alert alert-danger">عذرا لا يوجد بيانات لعرضها</div>
          @endif

        </div>
      </div>
    </div>
  @endsection
