<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Auth;
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
use App\Http\Services\User\UserService;


class UserController extends Controller
{
    protected $user;
    public function __construct(UserService $user){
        $this->user = $user;
    }
   
      public function index (){
        return view('admin.users.list', [
             'title' => 'Danh Sách user Mới Nhất',
             'users' => $this->user->get()
        ]);
    }
  
   
    public function destroy(Request $request){
        $result = $this->user->destroy($request);
        if($result){
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công user'
            ]);

            
        }
        return response()->json(['error' => true]);
    }

    public function toggleRole($id)
    {
        // Tìm kiếm user theo ID
        $user = User::find($id);
        if ($user) {
            // Chuyển đổi role: Nếu role là 1 thì đổi thành 0, ngược lại đổi thành 1
            $user->role = $user->role == 0 ? 1 : 0;
            $user->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }
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

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'like', "%$query%")
                    ->orWhere('email', 'like', "%$query%")
                    ->paginate(10);

        return view('admin.users.list',[
            'title' => 'Kết quả tìm kiếm'
        ], compact('users'))->with('query', $query);
    }
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

    public function editProfile()
    {
        $user = Auth::user();
        return view('admin.users.profile',[
            'title' => 'Thông tin người dùng'
        ], compact('user'));
    }

    public function updateProfile(Request $request)
    {
    
    
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'thumb' => 'nullable|string',
        ]);
    
        $user = Auth::user();
        $user->name = $request->name;
        $user->phone = $request->phone;
        if ($request->thumb) {
            $user->thumb = $request->thumb;
        }
      
        $user->save();
        \Log::info($request->all());  // Kiểm tra dữ liệu gửi lên

    
        return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
    }
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
}
