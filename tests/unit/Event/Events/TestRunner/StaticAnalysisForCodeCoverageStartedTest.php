<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestRunner;

use PHPUnit\Event\AbstractEventTestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Small;

#[CoversClass(StaticAnalysisForCodeCoverageStarted::class)]
#[Small]
final class StaticAnalysisForCodeCoverageStartedTest extends AbstractEventTestCase
{
    public function testConstructorSetsValues(): void
    {
        $telemetryInfo = $this->telemetryInfo();

        $event = new StaticAnalysisForCodeCoverageStarted(
            $telemetryInfo,
        );

        $this->assertSame($telemetryInfo, $event->telemetryInfo());
    }

    public function testCanBeRepresentedAsString(): void
    {
        $event = new StaticAnalysisForCodeCoverageStarted(
            $this->telemetryInfo(),
        );

        $this->assertSame('Static Analysis for Code Coverage Started', $event->asString());
    }
}
