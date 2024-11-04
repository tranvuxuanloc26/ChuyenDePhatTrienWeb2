<<<<<<< HEAD


 @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
</div>

@endif

@if(Session::has('success'))
    <div class="alert alert-success">
=======
@if ($errors->any())
    <div class="alert alert-danger" id="session-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger" id="session-alert">
        {{ Session::get('error') }}
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success" id="session-alert">
>>>>>>> register
        {{ Session::get('success') }}
    </div>
@endif

<<<<<<< HEAD
=======
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Tìm tất cả các thông báo có class .alert
        let alerts = document.querySelectorAll('.alert');
        
        // Ẩn sau 5 giây 
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.style.display = 'none';
            }, 5000);
        });
    });
</script>
>>>>>>> register
