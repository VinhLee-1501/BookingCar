<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->back()->with('success', 'Thêm mới khách hàng thành công');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->validated());
        return redirect()->back()->with('success', 'Cập nhật khách hàng thành công.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Khách hàng đã được xóa thành công!');
    }
}
