@include('components.header')

<main class="main-container">
    <h2 class="section-title">Вход</h2>

    @if (session('ok'))
        <p style="color: green; margin-bottom: 20px;">{{ session('ok') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="news-form" method="POST" action="/login">
        @csrf
        <div class="form-group">
            <label>Логин:</label>
            <input type="text" name="login" value="{{ old('login') }}">
        </div>
        <div class="form-group">
            <label>Пароль:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" class="btn-submit">Войти</button>
    </form>
</main>

@include('components.footer')