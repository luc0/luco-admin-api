<?php

namespace App\Http\Controllers;

use App\Http\Request\UserCreateRequest;
use App\Http\Request\UserEditRequest;
use App\User;

class UserController extends Controller
{

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function list() {
        return User::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show(int $id) {
        return User::findOrFail($id);
    }

    /**
     * @param UserCreateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserCreateRequest $request) {
        /** @var User $user */
        $user = User::create($request->all());
        $user->save();
        return response()->json($user, 201);
    }

    /**
     * @param UserEditRequest $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(UserEditRequest $request, int $id) {
        /** @var User $user */
        $user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();
        return response()->json($user, 202);
    }

    public function delete(int $id) {
        User::destroy($id);
        return response()->json(true, 202);
    }
}