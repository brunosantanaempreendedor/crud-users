@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li>
                <h5 class="bc-title">Administração</h5>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('app.index') }}">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                            stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Painel </a>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('user.index') }}">Gerenciar usuários</a></li>
        </ol>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 bst-seller">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="heading mb-0">Usuários</h4>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#createUser">
                        Cadastrar
                    </button>
                </div>
                <div class="card h-auto">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects style-1 dt-filter exports">
                            <div class="tbl-caption"></div>
                            <!-- Tabela de Pessoas -->
                            <table id="customer-tbl" class="table shorting">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ações</th> <!-- Nova coluna de Ações -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data['users'] as $d)
                                        <tr>
                                            <td><span>{{ $d->name }}</span></td>
                                            <td><span>{{ $d->email }}</span></td>
                                            <td>
                                                <!-- Botão de Editar -->
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editUser{{ $d->uuid }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                <!-- Botão de Excluir -->
                                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUser{{ $d->uuid }}">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- Modal de Edição -->
                                        @include('app.user.edit', ['d' => $d])

                                        <!-- Modal de Exclusão -->
                                        @include('app.user.delete', ['d' => $d])

                                    @empty
                                        <tr>
                                            <td colspan="5">Nenhum usuário encontrado.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.user.create')
@endsection
