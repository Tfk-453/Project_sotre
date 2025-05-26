<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">
    input[type='text']
    {
        width: 400px;
        height: 50px;
    }
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- أضف SweetAlert2 في الـ head -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <!-- Sidebar Navigation end-->
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <h1 style="color: aliceblue">add category</h1>
          <div class="div_deg">
            <form action="{{url('add_category')}}" method="POST">
              @csrf
              <div>
                <input type="text" name="category" id="">
                <input class="btn btn-primary" type="submit" value="add category">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <!-- تصحيح مسار الملف -->
    <script src="{{asset('admincss/js/front.js')}}"></script>

    <!-- نقل كود SweetAlert إلى هنا بعد تحميل جميع المكتبات -->
    @if(session('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const Toast = Swal.mixin({
          toast: true,
          position: "top-end",
          showConfirmButton: false,
          timer: 30000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener = ('mouseenter',swal.stopTimer);
            toast.addEventListener = ('mouseenter',swal.resumeTimer) ;
          }
        });
        Toast.fire({
          icon: "success",
          title: "{{ session('success') }}"
        });
      });
    </script>
    @endif
  </body>
</html>