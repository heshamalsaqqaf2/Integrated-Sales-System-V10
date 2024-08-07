@extends('layouts.admin')
@section('title')
  الضبط العام
@endsection
@section('content-header-title')
  الظبط العام
@endsection
@section('content-header-breadcrumb-item-link')
  <a href="{{ route('admin.dashboard') }}"> الرئيسية </a>
@endsection
@section('content-header-breadcrumb-item-link-active')
  الضبط العام
@endsection
@section('content-body')
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header p-3">
          <h2 class="card-title">
            بيانات شركة
            <p class="text-bold d-inline text-primary"> {{ $data['system_name'] }} </p>
          </h2>
        </div>
        <div class="card-body">
          @if (@isset($data) && @!empty($data))
            <div class="row media-small-screen">
              <div class="col-12 col-lg-9">
                <table class="table table-bordered table-hover">
                  <tbody>
                    <tr>
                      <td class="custom-width-table-cell">إسم الشركة التجاري</td>
                      <td> {{ $data['system_name'] }} </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">رقم الشركة</td>
                      <td> COM-{{ $data['com_code'] }} </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">حالة الشركة</td>
                      <td>
                        @if ($data['active'] == 1)
                          <span class="badge badge-success">الشركة مفعلة</span>
                        @else
                          <span class="badge badge-danger">الشركة مغلقة</span>
                        @endif
                      </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">هاتف الشركة</td>
                      <td> {{ $data['phone'] }} </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">موقع الشركة</td>
                      <td> {{ $data['address'] }} </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">معلومات الشركة</td>
                      <td> {{ $data['general_alert'] }} </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">تاريخ إنشاء الشركة</td>
                      <td> {{ $data['created_at'] }} </td>
                    </tr>
                    <tr>
                      <td class="custom-width-table-cell">تاريخ أخر تحديث</td>
                      <td>
                        @if ($data['updated_by'] > 0 and $data['updated_by'] != null)
                          {{-- TODO: Start PHP Code Get Date Time  --}}
                          @php
                            $dateTime = new DateTime($data['updated_at']);
                            $date = $dateTime->format('Y-m-d');
                            $time = $dateTime->format('H:i');
                            $newDateTime = date('A', strtotime($time));
                            $newDateTimeType = $newDateTime == 'AM' ? 'صباحا' : 'مساء';
                          @endphp
                          {{-- TODO: End PHP Code Get Date Time  --}}
                          {{ $date }}
                          <span> {{ $time }}</span>
                          <span>{{ $newDateTimeType }}</span>
                          <span>- بواسطة |</span>
                          <span class="badge badge-warning text-bold">{{ $data['updated_by_admin'] }}</span>
                        @else
                          <span>لايوجد أي تحديث حصل الى الأن !</span>
                        @endif
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-3 d-flex flex-column justify-content-center align-items-center">
                <div class="logoCompany">
                  <img src="{{ asset('assets/uploads') . '/' . $data['photo'] }}" alt="شعار العميل">
                </div>
                <p class="mt-2 text-bold text-lg-center">شعار الشركة</p>
                <a href="{{ route('admin.adminPanelSetting.edit') }}" class="btn btn-success">
                  تعديل البيانات
                  <i class="fas fa-user-edit fa-1x"></i>
                </a>
              </div>
            </div>
          @else
            <div class="alert alert-danger">عذرا لا يوجد بيانات لعرضها</div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection


{{-- <tr>
            <th>Rendering </th>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
            <th>CSS grade</th>
            </tr> --}}


{{-- <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td>Hesham Zohir</td>
                <td>10002156</td>
              </tr>
              <tr>
                <td>Arident</td>
                <td>Internet Explorer 6.0</td>
                <td>Win 95+</td>
                <td>Zohir Radi</td>
                <td>771728424</td>
              </tr>
            </tbody> --}}
