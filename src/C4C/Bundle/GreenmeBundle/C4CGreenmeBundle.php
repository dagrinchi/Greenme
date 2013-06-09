<?php

namespace C4C\Bundle\GreenmeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class C4CGreenmeBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
