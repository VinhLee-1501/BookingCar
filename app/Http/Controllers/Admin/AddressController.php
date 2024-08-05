<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        Address::with('customer')->get();
        return view('address.index', compact('Address'));
    }

    public function create()
    {
        return view('address.create');
    }

    public function store(AddressRequest $request)
    {
        Address::create($request->validated());

        return redirect()->route('addresses.index')->with('success', 'Địa chỉ đã được thêm thành công!');
    }

    public function edit($id)
    {
        $address = Address::findOrFail($id);
        return view('addresses.edit', compact('address'));
    }

    public function update(AddressRequest $request, $id)
    {
        $address = Address::findOrFail($id);
        $address->update($request->validated());

        return redirect()->route('addresses.index')->with('success', 'Địa chỉ đã được cập nhật thành công!');
    }

    // Xóa địa chỉ
    public function destroy($id)
    {
        Address::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'Địa chỉ đã được xóa thành công!');
    }
}
