@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('familia') }}</label>

                            <div class="col-md-6">
                                <input id="familia" type="text" class="form-control @error('familia') is-invalid @enderror" name="familia" value="{{ old('familia') }}" required autocomplete="familia" autofocus>

                                @error('familia')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_rogdenie" class="col-md-4 col-form-label text-md-right">{{ __('data_rogdenie') }}</label>

                            <div class="col-md-6">
                                <input id="data_rogdenie" type="text" class="form-control @error('data_rogdenie') is-invalid @enderror" name="data_rogdenie" value="{{ old('data_rogdenie') }}" required autocomplete="data_rogdenie" autofocus>

                                @error('data_rogdenie')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="yliza" class="col-md-4 col-form-label text-md-right">{{ __('yliza') }}</label>

                            <div class="col-md-6">
                                <input id="yliza" type="text" class="form-control @error('yliza') is-invalid @enderror" name="yliza" value="{{ old('yliza') }}" required autocomplete="yliza" autofocus>

                                @error('yliza')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="nomer_doma" class="col-md-4 col-form-label text-md-right">{{ __('nomer_doma') }}</label>

                            <div class="col-md-6">
                                <input id="nomer_doma" type="text" class="form-control @error('nomer_doma') is-invalid @enderror" name="nomer_doma" value="{{ old('nomer_doma') }}" required autocomplete="nomer_doma" autofocus>

                                @error('nomer_doma')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="kvartira" class="col-md-4 col-form-label text-md-right">{{ __('kvartira') }}</label>

                            <div class="col-md-6">
                                <input id="kvartira" type="text" class="form-control @error('kvartira') is-invalid @enderror" name="kvartira" value="{{ old('kvartira') }}" required autocomplete="kvartira" autofocus>

                                @error('kvartira')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="indeks" class="col-md-4 col-form-label text-md-right">{{ __('indeks') }}</label>

                            <div class="col-md-6">
                                <input id="indeks" type="text" class="form-control @error('indeks') is-invalid @enderror" name="indeks" value="{{ old('indeks') }}" required autocomplete="indeks" autofocus>

                                @error('indeks')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="gorod" class="col-md-4 col-form-label text-md-right">{{ __('gorod') }}</label>

                            <div class="col-md-6">
                                <input id="gorod" type="text" class="form-control @error('gorod') is-invalid @enderror" name="gorod" value="{{ old('gorod') }}" required autocomplete="gorod" autofocus>

                                @error('gorod')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telefon" class="col-md-4 col-form-label text-md-right">{{ __('telefon') }}</label>

                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control @error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') }}" required autocomplete="telefon" autofocus>

                                @error('telefon')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="nomer_karti" class="col-md-4 col-form-label text-md-right">{{ __('nomer_karti') }}</label>

                            <div class="col-md-6">
                                <input id="nomer_karti" type="text" class="form-control @error('nomer_karti') is-invalid @enderror" name="nomer_karti" value="{{ old('nomer_karti') }}" required autocomplete="nomer_karti" autofocus>

                                @error('nomer_karti')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Повторите пароль') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="soglasie_na_rassilku" type="checkbox" class="form-control @error('soglasie_na_rassilku') is-invalid @enderror" name="soglasie_na_rassilku" autocomplete="soglasie_na_rassilku" autofocus>
                                <label for="soglasie_na_rassilku" class="col-md-4 col-form-label text-md-right">{{ __('Я даю согласие на получение информации о специальных акциях, текущих и эксклюзивных предложениях от  ОБИ Россия. Вы всегда сможете отписаться от рассылки  здесь  или по электронной почте ') }}</label>
                                @error('soglasie_na_rassilku')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="sogl" type="checkbox" class="form-control @error('sogl') is-invalid @enderror" name="sogl"   required autocomplete="sogl" autofocus>
                                <label for="sogl" class="col-md-4 col-form-label text-md-right">{{ __('Настоящим я принимаю Правила оказания услуг и даю согласие на обработку своих Персональных данных') }}</label>

                                @error('soglasie_na_rassilku')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
