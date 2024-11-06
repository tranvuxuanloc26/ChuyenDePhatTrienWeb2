<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
}
