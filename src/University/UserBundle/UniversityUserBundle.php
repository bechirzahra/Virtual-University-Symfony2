<?php

namespace University\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UniversityUserBundle extends Bundle
{
    public function getParent()
{
return 'FOSUserBundle';
}
}
