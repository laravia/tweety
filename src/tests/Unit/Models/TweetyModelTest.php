<?php

namespace Laravia\Tweety\Tests\Unit\Models;

use Laravia\Tweety\App\Models\Tweety;
use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;

class TweetyModelTest extends LaraviaTestCase
{

    public function testLaraviaTweetyModelExists()
    {
        $this->assertClassExist(Tweety::class);
    }
}
