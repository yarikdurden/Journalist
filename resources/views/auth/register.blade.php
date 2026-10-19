@include('components.header')

<main class="main-container">
    <h2 class="section-title">Регистрация</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="news-form" method="POST" action="/register">
        @csrf
        <div class="form-group">
            <label>Логин:</label>
            <input type="text" name="login" value="{{ old('login') }}">
        </div>
        <div class="form-group">
            <label>Пароль:</label>
            <input type="password" name="password">
        </div>
        <div class="form-group">
            <label>Подтверждение пароля:</label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit" class="btn-submit">Зарегистрироваться</button>
    </form>
</main>

@include('components.footer')