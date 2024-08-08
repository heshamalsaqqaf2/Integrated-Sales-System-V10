@if (Session::has('error'))
  <div class="alert alert-danger" role="alert" id="error-alert">
    {{ Session::get('error') }}
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        var errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
          errorAlert.style.transition = 'opacity 0.5s ease';
          errorAlert.style.opacity = '0';
          setTimeout(function() {
            errorAlert.remove();
          }, 500); // نفس مدة الانتقال (0.5 ثانية)
        }
      }, 5000); // 5 ثواني
    });
  </script>
@endif
