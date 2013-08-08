<?php

namespace CRM\BackBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CRMBackBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
