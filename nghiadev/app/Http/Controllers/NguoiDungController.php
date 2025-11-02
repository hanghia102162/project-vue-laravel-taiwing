<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use App\Http\Requests\StoreNguoiDungRequest;
use App\Http\Requests\UpdateNguoiDungRequest;
use Illuminate\Http\Request;
class NguoiDungController extends Controller
{
    //  public function login(Request $request)
    // {
    //     $user = NguoiDung::where('email', $request->email)->first();

    //     if (!$user || !Hash::check($request->password, $user->password)) {
    //         return response()->json(['message' => 'Email hoặc mật khẩu không đúng'], 401);
    //     }

    //     return response()->json([
    //         'message' => 'Đăng nhập thành công',
    //         'user' => $user
    //     ]);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNguoiDungRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNguoiDungRequest $request, NguoiDung $nguoiDung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NguoiDung $nguoiDung)
    {
        //
    }
}
