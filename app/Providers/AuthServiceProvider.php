<?php

namespace App\Providers;

use App\Models\category;
use App\Policies\CategoryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
 

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // category::class => CategoryPolicy::class,
        // CategoryPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        try {
        
        $this->registerPolicies();

        // Gate::define('add-category', function($user,$category){
        //     return $user->role === 1 || $user->rawurlencode === 0;
        // });
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('التحقق من الايميل')
                ->line('مرحبا بك في مزادي كار لمزادات السيارات')
                ->line('اضغط على الرابط في الاسفل للتحقق من الايميل')
                ->action('التحقق من الايميل', $url);
        });
            //code...
        } catch (\Throwable $th) {
        return view('error.error');
        }
    }

}
