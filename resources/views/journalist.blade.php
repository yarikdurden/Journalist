@include('components.header')

<main class="main-container">
    <h2 class="section-title">Написать новую статью</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="news-form" method="POST" action="/journalist">
        @csrf
        <div class="form-group">
            <label>Заголовок:</label>
            <input type="text" name="heading" value="{{ old('heading') }}">
        </div>

        <div class="form-group">
            <label>Категория:</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Текст статьи:</label>
            <textarea rows="10" name="text">{{ old('text') }}</textarea>
        </div>

        <button type="submit" class="btn-submit">Отправить</button>
    </form>
</main>

@include('components.footer')