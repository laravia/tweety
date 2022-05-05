<?php

namespace Laravia\Tweety\Tests\Unit;

use Laravia\Core\App\Classes\TestCase as LaraviaTestCase;
use Laravia\Core\App\Laravia;

class TweetyTest extends LaraviaTestCase
{

    public function testRouteFile()
    {
        $this->assertFileExists(Laravia::path()->get('tweety')."/routes/web.php");
    }
}
