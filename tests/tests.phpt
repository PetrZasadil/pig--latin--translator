<?php
/* 
 * Test files for Pifg Translator

 */
use Tester\Assert;

require_once  __DIR__ . '/../app/bootstrap.php';

\Tester\Environment::setup();

$validator = new \App\Validator;

Assert::same('string', $validator->validate('string'));
Assert::same('string ', $validator->validate('string'));