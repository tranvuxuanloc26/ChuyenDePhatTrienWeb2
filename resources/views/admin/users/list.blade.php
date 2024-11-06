@extends('admin.main')

@section('content')

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/doi_mat_khau
<!-- Form tìm kiếm -->
<form action="{{ route('admin.users.search') }}" method="GET" class="form-inline mb-3">
    <input type="text" name="query" class="form-control" placeholder="Tìm kiếm người dùng..." value="{{ request('query') }}">
    <button type="submit" class="btn btn-primary ml-2">Tìm kiếm</button>
</form>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
=======
>>>>>>> origin/dang_nhap_google
=======
>>>>>>> origin/dang_nhap_facebook

<table>
    <thead>
        <tr>
            <th style="width: 50px; padding-left: 15px;">ID</th>
            <th>Tiêu Đề</th>
            {{-- <th>Ảnh</th> --}}
            <th>Role</th>
            <th>Email</th>
            <th>Cập Nhật</th>
            <th style="width: 100px">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <td style="width: 50px; padding-left: 15px;">{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            {{-- <td>
                <a href="{{ $user->thumb }}" target="_blank"> 
                    <img src="{{ $user->thumb }}" alt="" height="40px">
                </a>
            </td> --}}
            <td>
                <div style="display: flex; align-items: center;">
                    <span id="role-label-{{ $user->id }}" style="width: 100px; text-align: right; margin-right: 10px;">
                        {{ $user->role == 0 ? 'User' : 'Admin' }}
                    </span>
                    <label class="switch">
                        <input type="checkbox" onclick="toggleRole({{ $user->id }})" {{ $user->role == 2 ? 'checked' : '' }}>
                        <span class="slider"></span>
                    </label>
                </div>
            </td>
            
            <td>{{ $user->email }}</td>
            <td>{{ $user->updated_at }}</td>
            <td>
             
                <a class="btn btn-danger btn-sm" href="#" onClick="removeRow({{ $user->id }}, '/admin/users/destroy')">
                    <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
{!! $users->appends(['query' => request('query')])->links('pagination::bootstrap-4') !!}
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/search_product_admin
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/search_product
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/san_pham_noi_bat
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/san_pham_mơi_nhat
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/quan_ly_user
=======
{!! $users->appends(['query' => request('query')])->links('pagination::bootstrap-4') !!}
>>>>>>> origin/profile
=======
{!! $users->appends(['query' => request('query')])->links('pagination::bootstrap-4') !!}
>>>>>>> origin/lien_he_email
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/forgot_password
=======
{!! $users->appends(['query' => request('query')])->links('pagination::bootstrap-4') !!}
>>>>>>> origin/doi_mat_khau
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/dang_nhap_google
=======
{!! $users->links('pagination::bootstrap-4') !!}
>>>>>>> origin/dang_nhap_facebook
@endsection

<script>
    function toggleRole(userId) {
        fetch(`/admin/users/toggle-role/${userId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                alert('Có lỗi xảy ra, vui lòng thử lại.');
            } else {
                // Cập nhật hiển thị vai trò
                let roleLabel = document.getElementById(`role-label-${userId}`);
                let newRole = roleLabel.innerText === 'User' ? 'Admin' : 'User';
                roleLabel.innerText = newRole;

                // Hiển thị alert thông báo vai trò mới
                alert(`Chuyển đổi thành công! Vai trò mới: ${newRole}`);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Có lỗi xảy ra, vui lòng thử lại.');
        });
    }
</script>
