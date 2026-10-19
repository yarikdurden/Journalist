<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect('/login');
        }

        // Проверяем, есть ли у пользователя одна из разрешенных ролей
        if (!$user->role || !in_array($user->role->name, $roles)) {
            abort(403, 'Доступ запрещён. У вас нет прав на этот раздел.');
        }

        return $next($request);
    }
}