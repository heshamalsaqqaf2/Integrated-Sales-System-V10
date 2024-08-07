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
            <form class="needs-validation" novalidate>
              <div class="row">
                <div class="col-lg-7">
                  <div class="form-row">
                    <div class="col-lg-8 col-md-12 mb-3">
                      <label for="validationCustom01">إسم الشركة التجاري</label>
                      <input type="text" class="form-control" id="validationCustom01" required value="{{ $data['system_name'] }}">
                      <div class="invalid-feedback">
                        الرجاء إدخال إسم الشركة في الحقل
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-3">
                      <label for="validationCustom02">هاتف الشركة</label>
                      <input type="number" class="form-control" id="validationCustom02" required value="{{ $data['phone'] }}">
                      <div class="invalid-feedback">
                        الرجاء إدخال رقم الشركة في الحقل
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-lg-12 mb-3">
                      <label for="validationCustom03">موقع الشركة</label>
                      <input type="text" class="form-control" id="validationCustom03" required value="{{ $data['address'] }}">
                      <div class="invalid-feedback">
                        الرجاء إدخال موقع الشركة في الحقل
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom04">رسالة الشركة التنبيه</label>
                      <input type="text" class="form-control" id="validationCustom04" required value="{{ $data['general_alert'] }}">
                      <div class="invalid-feedback">
                        الرجاء إدخال رسالة الشركة في الحقل
                      </div>
                    </div>
                  </div>
                </div>
                {{-- ! Start Upload Images With FilePond --}}
                <div class="col-lg-5 d-flex justify-content-center align-items-center flex-column">
                  <div class="logoCompany mb-3 image-width-medium">
                    <img src="{{ asset('assets/uploads') . '/' . $data['photo'] }}" alt="شعار العميل">
                  </div>
                  <input class="w-100" type="file" hidden required />
                </div>
                {{-- ! End Upload Images --}}
                <button class="btn btn-primary mb-3" type="submit">تعديل البيانات</button>
            </form>
        </div>
        {{-- TODO: Start Stop Propagation Custom Bootstrap Validation --}}
        <script>
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              var forms = document.getElementsByClassName('needs-validation');
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
        {{-- TODO: End Stop Propagation Custom Bootstrap Validation --}}
      @else
        <div class="alert alert-danger">عذرا لا يوجد بيانات لعرضها</div>
        @endif
      </div>
    </div>
  </div>
  </div>
@endsection
