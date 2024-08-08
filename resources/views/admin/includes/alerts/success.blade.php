@if (Session::has('success'))
  <div class="alert alert-success" role="alert" id="success-alert">
    {{ Session::get('success') }}
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
          successAlert.style.transition = 'opacity 0.5s ease';
          successAlert.style.opacity = '0';
          setTimeout(function() {
            successAlert.remove();
          }, 500);
        }
      }, 5000);
    });
  </script>
@endif
