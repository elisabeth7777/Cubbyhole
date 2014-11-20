<?php

namespace CubbyHole\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CubbyHoleUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
