@extends('main')

@section('content')
<body class="animsition" style="animation-duration: 1500ms; opacity: 1;">
    <section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr flex justify-center" style="display: flex;
    justify-content: center;">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">User Profile</h4>
                    
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    
                    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Avatar upload -->
                        {{-- <div class="text-center mb-4">
                            <div id="image_show">
                                <a href="{{ $user->thumb ? asset($user->thumb) : 'template/images/icons/R.png' }}" target="_blank">
                                    <img src="{{ $user->thumb ? asset($user->thumb) : 'template/images/icons/R.png' }}" height="200px" width="180px">
                                </a>
                            </div>
                            <input type="file" id="upload" style="display: none;">
                            <input type="hidden" name="thumb" id="thumb" value="{{ $user->thumb }}">
                            <button type="button" onclick="document.getElementById('upload').click()" class="btn btn-outline-primary mt-2">
                                Upload Avatar
                            </button>
                        </div> --}}
                        
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                            </div>
                        </div>

                        <!-- Email (readonly) -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                <span class="input-group-text"><i class="fa fa-pencil"></i></span>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="/template/admin/js/main.js"></script>

@endsection