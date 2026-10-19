@include('components.header')

<main class="main-container">
    <h2 class="section-title">Написать новую статью</h2>

    <form class="news-form">
        <div class="form-group">
            <label>Заголовок:</label>
            <input type="text" placeholder="Введите заголовок">
        </div>

        <div class="form-group">
            <label>Категория:</label>
            <select>
                <option>Наука</option>
                <option>Медицина</option>
                <option>Космос</option>
                <option>IT</option>
            </select>
        </div>

        <div class="form-group">
            <label>Текст статьи:</label>
            <textarea rows="10" placeholder="Введите текст статьи"></textarea>
        </div>

        <button type="button" class="btn-submit">Отправить</button>
    </form>
</main>

@include('components.footer')