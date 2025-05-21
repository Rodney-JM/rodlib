<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

// Models e Policies
use App\Models\Produto;
use App\Policies\ProdutoPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * As políticas de autorização para a aplicação.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Aqui registramos a policy do modelo Produto
        Produto::class => ProdutoPolicy::class,
    ];

    /**
     * Registra quaisquer serviços de autenticação/autorização.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Você pode definir GATES aqui também, se necessário
    }
}
