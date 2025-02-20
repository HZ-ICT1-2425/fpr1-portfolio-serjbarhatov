<?php
if (!function_exists('menu')) {
    function menu(string $route): array
    {
        return [
            ['url' => route('home'), 'title' => 'Home', 'isActive' => $route == 'welcome', 'iconClass' => 'fa fa-home'],
            ['url' => route('profile'), 'title' => 'Profile', 'isActive' => $route == 'profile', 'iconClass' => 'fa fa-user'],
            ['url' => route('dashboard'), 'title' => 'Dashboard', 'isActive' => $route == 'dashboard', 'iconClass' => 'fa fa-dashboard'],
            ['url' => route('faq'), 'title' => 'FAQ', 'isActive' => $route == 'faq', 'iconClass' => 'fa fa-question-circle'],
            ['url' => route('blog'), 'title' => 'Blog', 'isActive' => $route == 'blog', 'iconClass' => 'fa fa-comment'],
            ['url' => 'https://github.com/serjbarhatov/serjbarhatov.github.io', 'title' => 'GitHub',
                'iconClass' => 'fa fa-github', 'isExternal' => true],
        ];
    }
}
