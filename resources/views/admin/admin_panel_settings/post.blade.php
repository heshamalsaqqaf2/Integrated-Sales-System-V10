@extends('layouts.admin')
@section('title')
Post
@endsection
@section('content-header-title')
Post
@endsection
@section('content-header-breadcrumb-item-link')
  <a href="{{ route('admin.adminPanelSetting.index') }}">Post</a>
@endsection
@section('content-header-breadcrumb-item-link-active')
Post
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

            <form method="post" action="{{ route('admin.adminPanelSetting.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="col-lg-5 d-flex justify-content-center align-items-center flex-column">
                <input class="w-100" type="file" id="photo" name="photo" />
              </div>
              <button type="submit" class="btn btn-primary mb-3">Save</button>
            </form>





          <script src="{{ asset('assets/dist/js/libraryFilePond/filePond.min.js') }}"></script>
          <script src="{{ asset('assets/dist/js/libraryFilePond/filePondPluginImagePreview.min.js') }}"></script>
          <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            const inputElement = document.querySelector('input[type="file"]');
            const pond = FilePond.create(inputElement);
            FilePond.setOptions({
              server: {
                process: '/adminpanelsetting/tmp-upload',
                revert: '/adminpanelsetting/tmp-delete',
                headers: {
                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
              },
            });
          </script>

        </div>
      </div>
    </div>
  @endsection
