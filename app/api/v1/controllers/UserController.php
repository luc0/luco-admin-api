<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    public function all() {
        return [];
    }

    public function show($id) {
        return User::findOrFail($id);
    }

    public function store() {
        return [];
    }

    public function edit() {
        return [];
    }

    public function delete() {
        return [];
    }
}