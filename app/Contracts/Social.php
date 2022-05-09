<?php

declare(strict_types=1);

namespace App\Contracts;

use Laravel\Socialite\Contracts\User as SocialContract;

interface SocialController
{
  public function authUser(SocialContract $socialUser): string;

}