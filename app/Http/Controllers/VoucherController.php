<?php

namespace App\Http\Controllers;

use App\Mail\SendVoucherMail;
use App\Models\User;
use App\Models\UserVoucher;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $vouchers = Voucher::query()
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        return view('admin.voucher.index', [
            'title' => 'Danh sách voucher',
            'vouchers' => $vouchers
        ]);
    }


    public function create()
    {
        return view('admin.voucher.create', [
            'title' => 'Thêm Voucher '
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:50|unique:vouchers,code',
            'discount_type' => 'required|in:percent,amount',
            'discount_value' => 'required|numeric|min:1',
            'min_order_value' => 'nullable|numeric|min:0',
            'max_discount' => 'nullable|numeric|min:0',
            'expired_at' => 'required|date|after:today',
            'active' => 'required|boolean',
        ]);

        Voucher::create($validated);

        return redirect()->route('voucher.index')->with('success', 'Voucher đã tạo thành công!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit($id)
    {
        if (!is_numeric($id) || $id < 1) {
            return redirect()->route('voucher.index')->with('error', 'Voucher không tồn tại!');
        }
        $voucher = Voucher::findOrFail($id);
        return view('admin.voucher.edit', [
            'title' => 'Sửa Voucher',
            'voucher' => $voucher
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, $id)
    {
        $voucher = Voucher::findOrFail($id);

        $validated = $request->validate([
            'code' => 'sometimes|string|max:50|unique:vouchers,code,' . $id,
            'discount_type' => 'sometimes|in:percent,amount',
            'discount_value' => 'sometimes|numeric|min:1',
            'min_order_value' => 'sometimes|numeric|min:0',
            'max_discount' => 'sometimes|numeric|min:0',
            'expired_at' => 'sometimes|date|after:today',
            'active' => 'sometimes|boolean',
        ]);

        $voucher->update($validated);

        return redirect()->route('voucher.index')->with('success', 'Voucher cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy($id)
    {
        if (!is_numeric($id) || $id < 1) {
            return redirect()->route('voucher.index')->with('error', 'Voucher không tồn tại!');
        }
        $voucher = Voucher::findOrFail($id);
        $voucher->delete();

        return response()->json(['error' => false, 'message' => 'Voucher đã được xóa.']);
    }
    public function indexUser()
    {
        $userVouchers = UserVoucher::all();
        return view('admin.voucher.listUser', [
            'title' => 'Danh sách dùng voucher',
            'userVouchers' => $userVouchers,
        ]);
    }
    public function showSendForm()
    {
        $vouchers = Voucher::where('expired_at', '>', now())->get();
        $users = User::select('id', 'name', 'email')->get();
        return view('admin.voucher.formSendMail', [
            'title' => 'Gửi voucher',
            'vouchers' => $vouchers,
            'users' => $users
        ]);
    }

    public function sendVoucherByEmail(Request $request)
    {
        $request->validate([
            'emails' => 'required|array',
            'emails.*' => 'email',
            'voucher_id' => 'required|exists:vouchers,id',
        ]);

        $emails = $request->emails;
        $voucherId = $request->voucher_id;

        $voucher = Voucher::find($voucherId);

        if (!$voucher) {
            return redirect()->route('voucher.index')->with('error', 'Voucher không hợp lệ!');
        }
        $successCount = 0;
        $failedCount = 0;
        foreach ($emails as $email) {
            $user = User::where('email', $email)->first();
            if (!$user) {
                $failedCount++;
                continue;
            }
            $userVoucher = UserVoucher::where('user_id', $user->id)
                ->where('voucher_id', $voucherId)
                ->first();

            if ($userVoucher) {
                $failedCount++;
                continue;
            }
            UserVoucher::create([
                'user_id' => $user->id,
                'voucher_id' => $voucher->id,
                'status' => 'unused',
            ]);

            try {
                Mail::to($user->email)->send(new SendVoucherMail($voucher, $user));
                $successCount++;
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
                $failedCount++;
            }
        }

        $message = "Đã gửi thành công $successCount voucher. $failedCount email không gửi được.";
        return redirect()->route('voucher.index')->with('success', $message);
    }




}

