<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $users = User::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('phone', 'like', "%{$query}%")
                ->orWhere('cccd', 'like', "%{$query}%");
        })->get();
        $html = view('admin.user.search', compact('users'))->render();
        return response()->json(['html' => $html]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->validated());
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
