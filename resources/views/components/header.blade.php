<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Научный прогресс — Новости</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="page-wrapper">

<header class="top-header">
    <div class="header-container">
        <div class="logo">SCI-NEWS</div>
        
        <nav class="main-nav">
            <a href="/">Главная</a>
            <a href="/category">Категория</a>
            
            @auth
                {{-- Журналист и Админ видят Журналиста --}}
                @if(in_array(auth()->user()->role->name ?? '', ['Журналист', 'Администратор']))
                    <a href="/journalist">Журналист</a>
                @endif

                {{-- Только Админ видит Админку --}}
                @if((auth()->user()->role->name ?? '') === 'Администратор')
                    <a href="/admin">Админ</a>
                @endif

                <form method="POST" action="/logout" style="display:inline; margin-left: 20px;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: #555; font-family: Arial, sans-serif; font-size: 14px; cursor: pointer; text-transform: uppercase; font-weight: bold;">
                        Выйти ({{ auth()->user()->login }})
                    </button>
                </form>
            @else
                <a href="/login">Вход</a>
                <a href="/register">Регистрация</a>
            @endauth
        </nav>
    </div>
</header>