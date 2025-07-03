@extends('layouts.app') {{-- ou guest.blade.php si tu en as un spécifique --}}

@section('content')
<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center; background: linear-gradient(to right, #0f766e, #0ea5e9); padding: 20px;">
    <div style="max-width: 450px; width: 100%; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
        <h2 style="text-align: center; color: #0f766e; font-size: 1.8rem; margin-bottom: 20px;">Connexion à votre compte</h2>

        {{-- Affichage du statut de session --}}
        @if (session('status'))
            <div style="background-color: #d1fae5; color: #065f46; padding: 10px 15px; border-radius: 8px; margin-bottom: 16px;">
                {{ session('status') }}
            </div>
        @endif

        {{-- Affichage des erreurs --}}
        @if ($errors->any())
            <div style="background: #fee2e2; color: #991b1b; padding: 10px 15px; border-radius: 8px; margin-bottom: 16px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf

            <input type="email" name="email" placeholder="Adresse email" value="{{ old('email') }}" required autofocus
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <input type="password" name="password" placeholder="Mot de passe" required
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <label style="display: flex; align-items: center; font-size: 0.9rem; color: #444;">
                <input type="checkbox" name="remember" style="margin-right: 8px;" />
                Se souvenir de moi
            </label>

            <button type="submit"
                style="padding: 12px; background-color: #0f766e; color: white; font-weight: bold; border: none; border-radius: 8px; cursor: pointer;">
                Connexion
            </button>
        </form>

        <div style="text-align: center; margin-top: 16px;">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color: #0ea5e9;">Mot de passe oublié ?</a>
            @endif
        </div>
    </div>
</div>
@endsection
