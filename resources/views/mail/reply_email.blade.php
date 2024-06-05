@component('mail::message')
# Kontaktný Formulár

{{ $name }}
, {{ $senderMessage }}  

@component('mail::button', ['url' => $url])
Navštív Náš Web
@endcomponent

S pozdravom,<br>
{{ config('app.company_name') }}
@endcomponent