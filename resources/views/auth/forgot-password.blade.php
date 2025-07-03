@extends('layouts.app') {{-- ou guest.blade.php selon ton projet --}}

@section('content')
<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center; background: linear-gradient(to right, #0f766e, #0ea5e9); padding: 20px;">
    <div style="max-width: 450px; width: 100%; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
        <h2 style="text-align: center; color: #0f766e; font-size: 1.6rem; margin-bottom: 20px;">Réinitialisation du mot de passe</h2>

        <p style="font-size: 0.95rem; color: #444; text-align: center; margin-bottom: 20px;">
            Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.
        </p>

        {{-- Message de succès --}}
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

        <form method="POST" action="{{ route('password.email') }}" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf

            <input type="email" name="email" placeholder="Votre adresse e-mail" value="{{ old('email') }}" required autofocus
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <button type="submit"
                style="padding: 12px; background-color: #0f766e; color: white; font-weight: bold; border: none; border-radius: 8px; cursor: pointer;">
                Envoyer le lien
            </button>
        </form>

        <div style="text-align: center; margin-top: 16px;">
            <a href="{{ route('login') }}" style="color: #0ea5e9;">Retour à la connexion</a>
        </div>
    </div>
</div>
@endsection
