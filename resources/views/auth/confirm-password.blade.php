@extends('layouts.app') {{-- Ou remplace par guest.blade.php si besoin --}}

@section('content')
<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center; background: linear-gradient(to right, #0f766e, #0ea5e9); padding: 20px;">
    <div style="max-width: 450px; width: 100%; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
        <h2 style="text-align: center; color: #0f766e; font-size: 1.6rem; margin-bottom: 15px;">Confirmation requise</h2>

        <p style="font-size: 0.95rem; color: #444; text-align: center; margin-bottom: 20px;">
            Ceci est une section sécurisée de l'application. Veuillez confirmer votre mot de passe avant de continuer.
        </p>

        @if ($errors->any())
            <div style="background: #fee2e2; color: #991b1b; padding: 10px 15px; border-radius: 8px; margin-bottom: 16px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.confirm') }}" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf

            <input type="password" name="password" placeholder="Mot de passe" required
                   style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <button type="submit"
                    style="padding: 12px; background-color: #0f766e; color: white; font-weight: bold; border: none; border-radius: 8px; cursor: pointer;">
                Confirmer
            </button>
        </form>
    </div>
</div>
@endsection
