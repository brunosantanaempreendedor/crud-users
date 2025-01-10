<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Exception;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('app.panel.home');
    }

    public function changeTheme(UserService $usersService)
    {
        try {
            $usersService->update(Auth::user()->uuid, [
                'theme' => Auth::user()->theme == 'dark' ? 'light' : 'dark'
            ]);
            return back();
        } catch (Exception $e) {
            return "Erro ao limpar o cache: " . $e->getMessage();
        }
    }
}
