@component('mail::message')
# Rapport de Campagne : {{ $campaign->title }}

**Statut** : {{ ucfirst($campaign->status) }}
**Budget** : {{ $campaign->budget }}€
**Impressions** : {{ $campaign->analytics['impressions'] ?? 0 }}
**Clics** : {{ $campaign->analytics['clicks'] ?? 0 }}
**Conversions** : {{ $campaign->analytics['conversions'] ?? 0 }}

@component('mail::button', ['url' => url('/campaigns/' . $campaign->id)])
Voir le rapport complet
@endcomponent

Merci,
L'équipe de gestion des campagnes.
@endcomponent
