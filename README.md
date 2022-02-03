# Reproduction

1. prime symfony cache: `bin/console cache:warmup`
2. prime psalm cache: `vendor/bin/psalm`
3. enable xdebug and put a breakpoint on `Psalm\Internal\PhpVisitor\Reflector\ClassLikeNodeScanner:270` with condition `$this->codebase->register_stub_files && $fq_classlike_name === 'App\Controller\AceController'`
4. edit `src/Entity/Ace.php` (add some whitespace to trigger a psalm rescan)
5. `vendor/bin/psalm`
6. the breakpoint from 3 should be hit, and you should see `AceController` being updated from `user_defined = true` to `user_defined = false` and `stubbed = false` to `stubbed = true`
7. the stack trace for 6 will be beneath `Config::visitStubFiles()`

to repeat the process, run `vendor/bin/psalm --clear-cache` and go to 2.