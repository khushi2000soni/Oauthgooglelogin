<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class StripeSubscriptionController extends Controller
{
    public function index()
    {
        $plans = Plan::get();
        return view("plans", compact("plans"));
    }

    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
        return view("subscription", compact("plan", "intent"));
    }

    public function subscription(Request $request)
    {
       //dd($request->all());
       try{
        $plan = Plan::find($request->plan);
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)->create($request->token);
        return view("subscription_success");
       }catch(\Exception $e)
       {
            dd($e->getMessage());
       }

    }
}
