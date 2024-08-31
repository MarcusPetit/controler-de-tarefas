@component('mail::message')
    # introdução

    Corpo da msg.

    @component('mail::button', ['url' => ''])
        Botão
    @endcomponent

    Obrigado,<br>
    {{ config('app.name') }}
@endcomponent
