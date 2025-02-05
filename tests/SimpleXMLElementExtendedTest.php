<?php
/**
 * Author: Ivo Toman
 */

namespace Pyromn\Pohoda\Tests;

use PHPUnit\Framework\TestCase;
use Pyromn\Pohoda\SimpleXMLElementExtended;


class SimpleXMLElementExtendedTest extends TestCase
{
	public function testAddChild()
	{
		$xml = new SimpleXMLElementExtended('<data/>');
		$xml->addChild('test', 'A & B');
		$this->assertSame("<?xml version=\"1.0\"?>\n<data><test><![CDATA[A & B]]></test></data>\n", $xml->asXML());
	}
}
