<?php

namespace App\Http\Controllers;

use App\Services\UserService as DefaultService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    protected $defaultService;
    protected $path;

    public function __construct(DefaultService $defaultService)
    {
        $this->defaultService = $defaultService;
        $this->path = 'profile';
    }

    public function index()
    {
        try {
            $data = $this->defaultService->findById(Auth::user()->uuid);

            return view('app.' . $this->path . '.show', compact('data'));
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }
}
