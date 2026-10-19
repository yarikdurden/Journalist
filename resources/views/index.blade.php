@include('components.header')

<main class="main-container">
    <h2 class="section-title">Все новости</h2>

    @if (session('ok'))
        <p style="color: green; margin-bottom: 20px;">{{ session('ok') }}</p>
    @endif

    @forelse ($texts as $text)
        <article class="news-article">
            <h3>{{ $text->heading }}</h3>
            <p class="meta-info">Категория: {{ $text->category->name }} | Автор: {{ $text->user->login }} | {{ $text->created_at->format('d.m.Y H:i') }}</p>
            <p>{{ $text->text }}</p>
        </article>
    @empty
        <p>Пока нет статей.</p>
    @endforelse

    <div style="margin-top: 30px;">
        {{ $texts->links() }}
    </div>
</main>

@include('components.footer')