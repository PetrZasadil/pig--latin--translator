<?php
/* 
 * Test files for Pig Latin Translator

 */
use Tester\Assert;

require_once  __DIR__ . '/../app/bootstrap.php';

\Tester\Environment::setup();

$validator = new App\Validator;

/* testing validation */
Assert::same('string', $validator->validate('string'));
Assert::same('string', $validator->validate(' string  '));
Assert::same('any words', $validator->validate(' any   words   '));
Assert::same('', $validator->validate(' '));
Assert::same('', $validator->validate('<script>'));
Assert::same('&#34;&#34;', $validator->validate('"<script>"'));
Assert::same('hi peoples', $validator->validate('Hi Peoples'));


$translator = new \App\Translator;

/* testing hasVowels */
Assert::same(1, $translator->hasVowels('a'));
Assert::same(0, $translator->hasVowels('b'));
Assert::same(1, $translator->hasVowels('beast'));
Assert::same(1, $translator->hasVowels('question'));

/* testing  strTranslate */

Assert::same('east-bay', $translator->strTranslate('beast'));
Assert::same('bbb', $translator->strTranslate('bbb'));
Assert::same('123', $translator->strTranslate(' 123 '));
Assert::same('estion-quay', $translator->strTranslate('question'));
Assert::same('estion-quay ough-day', $translator->strTranslate('question dough'));
Assert::same('ar-stay', $translator->strTranslate('ar-stay'));
Assert::same('ar-stay appy-hay', $translator->strTranslate('ar-stay happy '));
