@auth
    <h1>user autenticado </h1>
    {{ Auth::user() - id }}

@endauth
@guest

    <h1>nao esta autenticado</h1>
@endguest
