<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Custom\OTP\OTPConstants;
use App\Services\TwoFactorAuthenticator;

class TwoFactorAuthStateless
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $parameter = null)
    {
        // procesar peticion inicial a login
        $response = $parameter == 'after' ? $next($request) : null;

        // Iniciar el autenticador
        $authenticator = app(TwoFactorAuthenticator::class)->bootStateless(
            $request,
        );

        // Verificar si está autenticado
        if ($authenticator->isAuthenticated()) {
            return $response ?? $next($request);
        }

        if (
            $request->has(OTPConstants::RECOVERY_CODE_INPUT_FIELD) &&
            !$request->filled(OTPConstants::OTP_INPUT_FIELD)
        ) {
            return $authenticator->makeFailedLoginRecoveryCodeResponse();
        }

        return $authenticator->makeFailedLoginOneTimePasswordResponse();
    }
}
