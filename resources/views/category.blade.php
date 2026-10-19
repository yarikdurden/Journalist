@include('components.header')

<main class="main-container">
    <h2 class="section-title">Категория: {{ $category->name }}</h2>

    @forelse ($texts as $text)
        <article class="news-article">
            <h3>{{ $text->heading }}</h3>
            <p class="meta-info">Автор: {{ $text->user->login }} | {{ $text->created_at->format('d.m.Y H:i') }}</p>
            <p>{{ $text->text }}</p>
        </article>
    @empty
        <p>В этой категории пока нет статей.</p>
    @endforelse

    <div style="margin-top: 30px;">
        {{ $texts->links() }}
    </div>
</main>

@include('components.footer')