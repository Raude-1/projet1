@extends('layouts.app')

@section('content')

<style>
    /* Style simple et doux pour les cartes */
    .card {
        border-radius: 12px;
        box-shadow: 0 4px 8px rgb(0 0 0 / 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        background: #fff;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgb(0 0 0 / 0.15);
    }

    .card-title {
        color: #4f46e5; /* Indigo-600 */
        font-weight: 700;
    }

    .card-text {
        color: #6b7280; /* Gray-500 */
        font-size: 0.9rem;
    }

    .btn-primary {
        background-color: #4f46e5;
        border-color: #4f46e5;
    }

    .btn-primary:hover {
        background-color: #4338ca;
        border-color: #4338ca;
    }

    .btn-secondary {
        background-color: #6366f1;
        border-color: #6366f1;
        color: white;
    }

    .btn-secondary:hover {
        background-color: #4f46e5;
        border-color: #4f46e5;
    }

    .btn-success {
        background-color: #10b981;
        border-color: #10b981;
    }

    .btn-success:hover {
        background-color: #059669;
        border-color: #059669;
    }

</style>

<div class="container py-4">

    <div class="alert alert-success">
        Bonjour <strong>{{ Auth::user()->name }}</strong> !
    </div>

    @php $role = Auth::user()->role; @endphp

    @if($role === 'admin')
        <h3 class="mb-4">Tableau de bord Administrateur</h3>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Gérer les Matières</h5>
                        <p class="card-text text-muted">Ajoutez, modifiez ou supprimez les matières disponibles.</p>
                        <a href="{{ route('matieres.index') }}" class="btn btn-primary w-100">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Voir les Cours</h5>
                        <p class="card-text text-muted">Consultez la liste des cours disponibles.</p>
                        <a href="{{ route('cours.index') }}" class="btn btn-primary w-100">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Articles</h5>
                        <p class="card-text text-muted">Gérez les articles publiés sur la plateforme.</p>
                        <a href="{{ route('articles.index') }}" class="btn btn-primary w-100">Accéder</a>
                    </div>
                </div>
            </div>
        </div>

    @elseif($role === 'formateur')
        <h3 class="mb-4">Espace Formateur</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Mes Cours</h5>
                        <p class="card-text text-muted">Consultez et gérez vos cours.</p>
                        <a href="{{ route('cours.index') }}" class="btn btn-secondary w-100">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Publier un article</h5>
                        <p class="card-text text-muted">Partagez des informations avec les étudiants.</p>
                        <a href="{{ route('articles.create') }}" class="btn btn-secondary w-100">Accéder</a>
                    </div>
                </div>
            </div>
        </div>

    @elseif($role === 'etudiant')
        <h3 class="mb-4">Espace Étudiant</h3>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Voir mes Notes</h5>
                        <p class="card-text text-muted">Consultez vos résultats scolaires.</p>
                        <a href="{{ route('notes.index') }}" class="btn btn-success w-100">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Voir les Articles</h5>
                        <p class="card-text text-muted">Accédez aux articles publiés.</p>
                        <a href="{{ route('articles.index') }}" class="btn btn-success w-100">Accéder</a>
                    </div>
                </div>
            </div>
        </div>

    @elseif($role === 'parent')
        <h3 class="mb-4">Bienvenue cher parent !</h3>
        <p class="text-muted">Merci de suivre la progression de vos enfants sur notre plateforme.</p>
    @else
        <p class="text-danger">Rôle non reconnu.</p>
    @endif

</div>
@endsection
