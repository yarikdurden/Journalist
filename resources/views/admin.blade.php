@include('components.header')

<main class="main-container">
    <h2 class="section-title">Панель администратора</h2>

    <h3 class="sub-title">Статьи</h3>
    <table class="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Открытие нового космического телескопа</td>
                <td>Опубликовано</td>
                <td>
                    <button class="btn-action btn-edit">Редактировать</button>
                    <button class="btn-action btn-block">Заблокировать</button>
                    <button class="btn-action btn-delete">Удалить</button>
                </td>
            </tr>
        </tbody>
    </table>

    <h3 class="sub-title">Пользователи</h3>
    <form class="news-form" style="max-width: 500px;">
        <div class="form-group">
            <label>Пользователь:</label>
            <select>
                <option>Иван Иванов</option>
                <option>Пётр Петров</option>
            </select>
        </div>

        <div class="form-group">
            <label>Новая роль:</label>
            <select>
                <option>Читатель</option>
                <option>Журналист</option>
                <option>Администратор</option>
            </select>
        </div>

        <button type="button" class="btn-submit">Изменить роль</button>
    </form>
</main>

@include('components.footer')