<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Détails de l'événement : {{ $evenement->id }}</h1>
        
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>Informations Générales</h3>
            </div>
            <div class="card-body">
                <p><strong>Titre :</strong> {{ $evenement->titre }}</p>
                <p><strong>Description :</strong> {{ $evenement->description }}</p>
                <p><strong>Date Début :</strong> {{ $evenement->date_debut }}</p>
                <p><strong>Date Fin :</strong> {{ $evenement->date_fin }}</p>
                <p><strong>Lieu :</strong> {{ $evenement->lieu }}</p>
                <p><strong>Expert :</strong> {{ $evenement->expert->prenom }} {{ $evenement->expert->nom }} ({{ $evenement->expert->specialite }})</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="text-center">Liste des ateliers assurés :</h3>
            </div>
            <div class="card-body">
                @if($evenement->ateliers->count() > 0)
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Heure Début</th>
                                <th>Heure Fin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($evenement->ateliers as $atelier)
                            <tr>
                                <td>{{ $atelier->nom }}</td>
                                <td>{{ $atelier->description }}</td>
                                <td>{{ $atelier->heure_debut }}</td>
                                <td>{{ $atelier->heure_fin }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p class="text-center">Aucun atelier pour cet événement.</p>
                @endif
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('evenements.index') }}" class="btn btn-secondary">Retour à la liste</a>
        </div>
    </div>
</body>
</html>