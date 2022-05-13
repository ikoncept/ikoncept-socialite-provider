<?php

namespace Ikoncept\IkonceptSocialiteProvider;

use SocialiteProviders\Manager\SocialiteWasCalled;

class IkonceptExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('ikoncept', __NAMESPACE__.'\Provider');
    }
}
