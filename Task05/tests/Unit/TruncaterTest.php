<?php

namespace Gorlienko\Tests;
use \PHPUnit\Framework\TestCase;
use Gorlienko\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Горлиенко Николай Витальевич...', $truncater->truncate('Рязин Виталий Александрович'));
        $this->assertSame('Горлиенко ...', $truncater->truncate('Горлиенко Николай Витальевич', ['length' => 10]));
        $this->assertSame('Горлиенко Николай Витальевич...', $truncater->truncate('Горлиенко Николай Витальевич', ['length' => 50]));
        $this->assertSame('Горлиенко Николай Витальевич...', $truncater->truncate('Горлиенко Николай Витальевич', ['length' => -10]));
        $this->assertSame('Горлиенко *', $truncater->truncate('Горлиенко Николай Витальевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Горлиенко Николай Витальевич*', $truncater->truncate('Горлиенко Николай Витальевич', ['separator' => '*']));
    }
}
