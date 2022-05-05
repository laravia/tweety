<?php

namespace Laravia\Tweety\Tests\Unit\Controllers;

use Laravia\Tweety\App\Http\Controllers\TweetyController;
use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;

class TweetyControllerTest extends LaraviaTestCase
{

    public function testLaraviaTweetyControllerExists()
    {
        $this->assertClassExist(TweetyController::class);
    }
}
