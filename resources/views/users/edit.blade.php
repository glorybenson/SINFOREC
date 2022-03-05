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
                                            <label for="pays" class="col-md-2 col-form-label text-md-end">Pays</label>
                                            <div class="col-md-10">
                                                <select multiple id="geographical_zone-pay" data-parsley-errors-container="#invalid-feedback" class="select modifiable" data-name="pays" name="pays[]" required
                                                        aria-label=".form-select-lg">
                                                    @if(isset($pays))
                                                        @foreach($pays as $pay)
                                                            <option value="{{((object)$pay)->id}}">{{((object)$pay)->description}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback" role="alert"></span>
                                                @error('pays')
                                                <span class="invalid-feedback" id="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="description" class="col-md-2 col-form-label text-md-end">Régions</label>
                                            <div class="col-md-10">
                                                <select multiple id="geographical_zone-region" data-parsley-errors-container="#invalid-feedback" class="select modifiable" data-name="regions"  name="regions[]" required
                                                        aria-label=".form-select-lg">
                                                    @if(isset($regions))
                                                        @foreach($regions as $region)
                                                            <option value="{{((object)$region)->id}}">{{((object)$region)->description}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback2" role="alert"></span>
                                                @error('region')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="description" class="col-md-2 col-form-label text-md-end">Départements</label>
                                            <div class="col-md-10">
                                                <select multiple id="geographical_zone-department" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="departments" name="departments[]" required
                                                        aria-label=".form-select-lg">
                                                    @if(isset($departments))
                                                        @foreach($departments as $department)
                                                            <option value="{{((object)$department)->id}}">{{((object)$department)->description}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback3" role="alert"></span>
                                                @error('department')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="description" class="col-md-2 col-form-label text-md-end">Arrondissements</label>
                                            <div class="col-md-10">
                                                <select multiple id="geographical_zone-arrondissement" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="arrondissements" name="arrondissements[]" required
                                                        aria-label=".form-select-lg">
                                                    @if(isset($arrondissements))
                                                        @foreach($arrondissements as $arrondissement)
                                                            <option value="{{((object)$arrondissement)->id }}">{{((object)$arrondissement)->description }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback4" role="alert"></span>
                                                @error('arrondissement')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="commune" class="col-md-2 col-form-label text-md-end">Communes</label>
                                            <div class="col-md-10">
                                                <select multiple id="geographical_zone-commune" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="communes" name="communes[]" required
                                                        aria-label=".form-select-lg">
                                                    @if(isset($communes))
                                                        @foreach($communes as $commune)
                                                            <option value="{{((object)$commune)->id}}" {{ old('communes') == ((object)$commune)->description ? 'selected' : '' }}>{{((object)$commune)->description}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback5" role="alert"></span>
                                                @error('commune')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="description" class="col-md-2 col-form-label text-md-end">Centres</label>
                                            <div class="col-md-10">
                                                <select multiple id="geographical_zone-centre" data-parsley-errors-container="#invalid-feedback" class="select modifiable"  data-name="centre" name="centre[]" required
                                                        aria-label=".form-select-lg">
                                                    @if(isset($centre))
                                                        @foreach($centre as $item)
                                                            <option value="{{((object)$item)->id}}">{{((object)$item)->description}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="feedback-new" id="invalid-feedback6" role="alert"></span>
                                                @error('centre')
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
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
