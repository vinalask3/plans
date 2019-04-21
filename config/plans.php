<?php

return [

    /*
     * The model which handles the plans tables.
     */

    'models' => [

        'plan' => \Vinalask3\Plans\Models\PlanModel::class,
        'subscription' => \Vinalask3\Plans\Models\PlanSubscriptionModel::class,
        'feature' => \Vinalask3\Plans\Models\PlanFeatureModel::class,
        'usage' => \Vinalask3\Plans\Models\PlanSubscriptionUsageModel::class,

        'stripeCustomer' => \Vinalask3\Plans\Models\StripeCustomerModel::class,

    ],

];
