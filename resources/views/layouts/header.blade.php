<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/estilos.css?v=6">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="/js/nav.js?v=6" defer></script>
        <script src="/js/grupo-medico.js?v=6"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <link rel="apple-touch-icon" sizes="180x180" href="/imgs/fav-icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/imgs/fav-icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/imgs/fav-icon/favicon-16x16.png">
        @livewireStyles
        <title>Breyna</title>
    </head>
    <body class="relative">
        @livewire('contact-form', ['ensayos' => $ensayos])