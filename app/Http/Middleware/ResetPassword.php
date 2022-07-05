<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \DateTime;

class ResetPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $date1 = new DateTime(date("M j, Y H:i:s", strtotime(Auth::user()->updated_at)));
        $date2 = new DateTime(date("M j, Y H:i:s"));
        $nNumDays = $date1->diff($date2)->format("%a");
        $nCurrTime = time();
        if($nCurrTime<1661972400)
        {
            $nNumDays = 0;
        }


        if(Auth::user()->updated_at==null || Auth::user()->updated_at==Auth::user()->created_at)
        {
            return redirect()->route('change-password')
                ->with('success','Welcome to Innri. Please change your password before proceeding to the system' )
                ->with('bForce', true);
        }
        else if($nNumDays>120)
        {
            return redirect()->route('change-password')
                ->with('success','You haven\'t changed your password in a while. Please change it now to access the system!' )
                ->with('bForce', true);
        }
        return $next($request);


    }
}
