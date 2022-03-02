@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="mt-3">
                <div class="content container-fluid">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <h5 class="page-title">Dashboard</h5>
                                    <ul class="breadcrumb ml-2">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Utilisateur</a>
                                        </li>
                                        <li class="breadcrumb-item active">Edit</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title float-left">Edit User Details</h4>
                                    <div class="text-right">
                                        <a href="{{ route('home') }}" class="btn btn-dark px-3">
                                            Retour aux utilisateurs</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('edit.user.post', ['id' => $user->id]) }}">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="first_name"
                                                   class="col-md-2 col-form-label text-md-end">Prénom</label>

                                            <div class="col-md-10">
                                                <input value="{{ $user->first_name }}" id="first_name" type="text"
                                                       class="form-control " name="first_name" autocomplete="name" required>
                                                @if ($errors->has('first_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="last_name" class="col-md-2 col-form-label text-md-end">
                                                Nom de famille</label>

                                            <div class="col-md-10">
                                                <input id="last_name" type="text" class="form-control " name="last_name"
                                                       value="{{ $user->last_name }}" required autocomplete="name" autofocus>
                                                @if ($errors->has('last_name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-2 col-form-label text-md-end">E-mail</label>

                                            <div class="col-md-10">
                                                <input id="email" type="email" class="form-control " name="email"
                                                       value="{{ $user->email }}" required autocomplete="email">
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="role" class="col-md-2 col-form-label text-md-end">User Role</label>
                                            <div class="col-md-10">
                                                @php
                                                    if( isset( $user))
                                                        $mapping = \App\Models\Role::transform( json_decode( $user->roles));
                                                @endphp
                                                <select multiple class="select" name="role[]" required
                                                        aria-label=".form-select-lg example">
                                                    @foreach( \App\Models\Role::$roles as $role => $value)
                                                        <option value="{{ $role}}" {{ $mapping[ $role]}}>{{ $value }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-2 col-form-label text-md-end">Mot de
                                                passe</label>

                                            <div class="col-md-10">
                                                <input id="password" type="password" class="form-control " name="password"
                                                       required autocomplete="new-password">
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password-confirm"
                                                   class="col-md-2 col-form-label text-md-end">Confirmer
                                                Mot de passe</label>

                                            <div class="col-md-10">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary px-4"
                                                    onclick="return confirm('Are you sure you want to submit this form?')">
                                                Update user details
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
