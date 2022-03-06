<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repository\UserRepository;
use App\Service\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService(new UserRepository);
    }

    public function create()
    {
        if (Auth::user()->isAdmin == 'n') {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }
        return view('user.create');
    }

    public function edit($id)
    {
        if (Auth::user()->isAdmin == 'n') {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }
        $user = $this->userService->findById($id);
        if (!isset($user)) {
            return redirect()->back()->with(['error' => 'Erro ao localizar usuário']);
        }
        return view('user.edit', compact('user'));
    }

    public function store(UserRequest $request)
    {
        if (Auth::user()->isAdmin == 'n') {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }
        if (!$this->userService->store($request->validated())) {
            return redirect()->back()->with(['error' => 'Ocorreu um erro ao cadastrar o usuário']);
        }
        return redirect()->route('user.index')->with(['error' => 'Usuário cadastrado com sucesso']);
    }

    public function index()
    {
        if (Auth::user()->isAdmin == 'n') {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }
        $users = $this->userService->getAll();
        if (count($users) <= 0) {
            return redirect()->back()->with(['error' => 'Ocorreu um erro ao listar os usuários']);
        }
        return view('user.index', compact('users'));
    }

    public function findById($id)
    {
        return $this->userService->findById($id);
    }

    public function update(UserRequest $request)
    {   
        if (Auth::user()->isAdmin == 'n') {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }
        $request->validated(); 
        $this->userService->update($request->all());

        return redirect()->back()->with(['success'=>'usuário atualizado com sucesso']);
    }

    public function delete($id)
    {
        if (Auth::user()->isAdmin == 'n') {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }

        $response = $this->userService->delete($id);

        if (!isset($response)) {
            return redirect()->back()->with(['error' => 'Erro ao excluir usuário']);
        }
        return redirect()->back()->with(['success' => 'Usuário excluído com sucesso']);
    }

    public function meusDados()
    {
        $user = User::find(Auth::user()->id);
        if (Auth::user()->id != $user->id) {
            return redirect()->back()->with(['error' => 'você não possui permissão para este recurso.']);
        }

        if (!isset($user)) {
            return redirect()->back()->with(['error' => 'Erro ao localizar usuário']);
        }

        return view('user.edit', compact('user'));
    }
}
