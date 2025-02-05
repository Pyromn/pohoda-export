<?php
/**
 * Author: Ivo Toman
 */

namespace Pyromn\Pohoda\Export;


interface IExport
{
	public function export(\SimpleXMLElement $xml);

}