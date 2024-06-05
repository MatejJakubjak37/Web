@component('mail::message')
# Kontaktný Formulár    
# Obdržali sme novú správu prostredníctvom webového formulára. Detaily sú nasledovné:

**Meno:** {{ $name }}  
**Email:** {{ $email }}  
**Telefón:** {{ $phone }}  
**Predmet Správy:** {{ $subject }}  

---

**Správa:**  
{{ $mess }}

@endcomponent