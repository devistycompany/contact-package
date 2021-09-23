@component('mail::message')
# Introduction
Ini Email dari {{ $name }}
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
