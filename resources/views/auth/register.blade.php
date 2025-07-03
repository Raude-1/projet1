@extends('layouts.app') {{-- ou guest.blade.php selon ton projet --}}

@section('content')
<div style="min-height: 100vh; display: flex; justify-content: center; align-items: center; background: linear-gradient(to right, #0f766e, #0ea5e9); padding: 20px;">
    <div style="max-width: 500px; width: 100%; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 20px rgba(0,0,0,0.15);">
        <h2 style="text-align: center; color: #0f766e; font-size: 1.8rem; margin-bottom: 20px;">Créer un compte</h2>

        @if ($errors->any())
            <div style="background: #fee2e2; color: #991b1b; padding: 10px 15px; border-radius: 8px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            @csrf

            <input type="text" name="name" value="{{ old('name') }}" placeholder="Nom complet" required
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <input type="email" name="email" value="{{ old('email') }}" placeholder="Adresse email" required
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <input type="password" name="password" placeholder="Mot de passe" required
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required
                style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;" />

            <select name="role" required style="padding: 12px; border-radius: 8px; border: 1px solid #ccc;">
                <option value="">-- Sélectionnez un rôle --</option>
                <option value="etudiant">Étudiant</option>
                <option value="formateur">Formateur</option>
                <option value="parent">Parent</option>
            </select>

            <button type="submit"
                style="padding: 12px; background-color: #0f766e; color: white; font-weight: bold; border: none; border-radius: 8px; cursor: pointer;">
                S'inscrire
            </button>
        </form>

        <p style="text-align: center; margin-top: 16px;">
            Déjà inscrit ?
            <a href="{{ route('login') }}" style="color: #0ea5e9;">Connectez-vous</a>
        </p>
    </div>
</div>
@endsection
