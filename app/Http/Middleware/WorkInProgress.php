<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;
use Closure;
use App\Models\Application;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkInProgress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     $applicationId = $request->route('application');
    //     $application = Application::find($applicationId);

    //     if ($request->is('it/certificate/' . $applicationId . '/*/add')) {
    //         if ($application) {
    //             $application->is_in_progress = 1;
    //             $application->save();
    //             Log::info('is_in_progress set to 1');
    //         }
    //     } else {
    //         if ($application && $application->is_in_progress === 1) {
    //             $application->is_in_progress = 0;
    //             $application->save();
    //             Log::info('is_in_progress set to 0');
    //         }
    //         // return $next($request);
    //     }
    //     return $next($request);
    // }

    // private $applicationId = null;

    // public function handle($request, Closure $next)
    // {
    //     $this->applicationId = $request->route('application');

    //     return $next($request);
    // }

    // public function terminate($request, $response)
    // {
    //     if ($this->applicationId) {
    //         $application = Application::find($this->applicationId);

    //         if ($request->route()->getName() === 'certificate.add') {
    //             // Set the flag to 0 when leaving the 'finish' route
    //             $application->is_in_progress = 0;
    //             $application->save();
    //         }
    //     }

    //     return $response;
    // }
}
