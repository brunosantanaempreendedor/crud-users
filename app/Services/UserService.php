<?php

namespace App\Services;

use App\Models\User as Model;
use Exception;
use Illuminate\Support\Facades\Auth;

class UserService
{

    public static function findAll()
    {
        try {
            return  Model::get();
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public static function findById($uuid)
    {
        try {
            return  Model::whereUuid($uuid)->first();
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public static function store($request)
    {
        try {
            return  Model::create($request);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public static function update($uuid, $request)
    {
        try {
            Model::whereUuid($uuid)->update($request);
            return response()->json(['success' => 'Operação realizada com sucesso!'], 200);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public static function delete($uuid)
    {
        try {
            Model::whereUuid($uuid)->delete();
            return response()->json(['success' => 'Operação realizada com sucesso!'], 200);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }
}
