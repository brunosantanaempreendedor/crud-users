<?php

namespace App\Http\Controllers;

use App\Services\LogsService;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        try {
            $data = [
                'users' => UserService::findAll()
            ];

            return view('app.user.index', compact('data'));
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ]);

            $validatedData['password'] = bcrypt($validatedData['password']);

            UserService::store($validatedData);

            return back()->with('flash_success', 'Operação realizada com sucesso');
        } catch (Exception $ex) {
            return back()->with('flash_error', 'Operação não permitida');
        }
    }


    public function update(Request $request, $uuid)
    {
        try {
            $user = UserService::findById($uuid);

            $validatedData = $request->validate([
                'email' => 'required|email|unique:users,email,' . $user->uuid,
                'password' => 'nullable|min:6',
            ]);

            if (!empty($validatedData['password'])) {
                $validatedData['password'] = bcrypt($validatedData['password']);
            } else {
                unset($validatedData['password']); // Remover senha se não for enviada
            }

            UserService::update($uuid, $validatedData);

            return back()->with('flash_success', 'Operação realizada com sucesso');
        } catch (Exception $ex) {
            return back()->with('flash_error', 'Operação não permitida');
        }
    }

    public function destroy($uuid)
    {
        try {
            UserService::delete($uuid);

            return back()->with('flash_success', 'Operação realizada com sucesso');
        } catch (Exception $ex) {
            return back()->with('flash_error', 'Operação não permitida');
            dd($ex->getMessage());
        }
    }
}
