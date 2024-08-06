@extends('layouts.admin')
@section('title')
  الرئيسية
@endsection
@section('content-header-title')
  الرئيسية
@endsection
@section('content-header-breadcrumb-item-link')
  <a href="{{ route('admin.dashboard') }}"> الرئيسية </a>
@endsection
@section('content-header-breadcrumb-item-link-active')
  لوحة التحكم
@endsection
@section('content-body')
  <div class="row">
    <div class="col-12">
      <style>
        .image-banar {
          width: 100%;
          height: 450px;
          object-fit: fill;
          border-radius: 6px;
        }
      </style>
      <img class="image-banar" src="{{ asset('assets/dist/img/banars/06-banar.jpg') }}" alt="Banars">
    </div>
  </div>
@endsection
