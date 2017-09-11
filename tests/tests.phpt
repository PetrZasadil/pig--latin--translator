<?php
/* 
 * Test files for Pifg Translator

 */
use Tester\Assert;

require_once  __DIR__ . '/../app/bootstrap.php';

\Tester\Environment::setup();

$validator = new \App\Validator;

/* testing validation */
Assert::same('string', $validator->validate('string'));
Assert::same('string', $validator->validate(' string  '));
Assert::same('any words', $validator->validate(' any   words   '));
Assert::same('', $validator->validate(' '));
Assert::same('', $validator->validate('<script>'));
Assert::same('&#34;&#34;', $validator->validate('"<script>"'));
