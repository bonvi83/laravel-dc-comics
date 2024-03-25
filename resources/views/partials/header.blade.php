<header>
    <!-- riga azzurra -->
    <div class="riga d-flex justify-content-end">
        <div>DC POWER VISA</div>
        <div class="ms-5 me-2">ADDITIONAL DC SITES</div>
    </div>

    <div class="d-flex justify-content-center navbar">
        <!-- logo -->
        <img class="logoheader" src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="immagine icona">

        <!-- link alle pagine -->
        <ul>
            <!-- utilizzo il route('nome') per indicare il nome della rotta, in modo che se cambio gli url non devo sostituirli in tutte le pagine -->
            <!-- utilizzo Route::currentRouteName perchè mi dice su quale rotta sono ed è utile per evidenziare la pagina su cui sono -->
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='characters']) 
                    href="{{ route('characters') }}">characters</a>
            </li>
            <li>
                {{-- il comics è la mia home --}}
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='home']) 
                    href="{{ route('home') }}">comics</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='movie']) 
                    href="{{ route('movie') }}">movie</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='tv']) 
                    href="{{ route('tv') }}">tv</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='games']) 
                    href="{{ route('games') }}">games</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='collectibles']) 
                    href="{{ route('collectibles') }}">collectibles</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='videos']) 
                    href="{{ route('videos') }}">videos</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='fans']) 
                    href="{{ route('fans') }}">fans</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='news']) 
                    href="{{ route('news') }}">news</a>
            </li>
            <li>
                <a @class([
                    'link', 
                    'active' => Route::currentRouteName()=='shop']) 
                    href="{{ route('shop') }}">shop</a>
            </li>
        </ul>

        <!-- searchbar -->
        <form class="d-flex searchbar" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> 
    </div>

    <!-- disegno colorato cartoni -->
    <div>
        <img class="imgcartoon" src="{{ Vite::asset('/resources/images/jumbotron.jpg') }}" alt="immagine jumbotron">
    </div>
</header>