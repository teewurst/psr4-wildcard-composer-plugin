<?php
declare(strict_types=1);

namespace teewurst\Prs4AdvancedWildcardComposer;

use teewurst\Prs4AdvancedWildcardComposer\Di\InvokableFactory;
use teewurst\Prs4AdvancedWildcardComposer\FileAccessor\ComposerJsonDevelopment;
use teewurst\Prs4AdvancedWildcardComposer\FileAccessor\Factory\ComposerJsonDevelopmentFactory;
use teewurst\Prs4AdvancedWildcardComposer\FileAccessor\Factory\Psr4AutloadFactory;
use teewurst\Prs4AdvancedWildcardComposer\FileAccessor\Psr4Autoload;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Pipeline;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Payload;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\Factory\GenerateComposerDeveplomentJsonTaskFactory;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\Factory\LoadPsr7AutoloadDefinitionsTaskFactory;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\Factory\ReplacePsr4AutoloadFileTaskFactory;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\FilterAndValidateWildcardsTask;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\GenerateComposerDeveplomentJsonTask;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\IterateAndTranslateTask;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\LoadPsr7AutoloadDefinitionsTask;
use teewurst\Prs4AdvancedWildcardComposer\Pipeline\Task\ReplacePsr4AutoloadFileTask;

return [
    Payload::class                             => InvokableFactory::class,
    Pipeline::class                            => Pipeline::class,

    // tasks
    FilterAndValidateWildcardsTask::class      => InvokableFactory::class,
    GenerateComposerDeveplomentJsonTask::class => GenerateComposerDeveplomentJsonTaskFactory::class,
    IterateAndTranslateTask::class             => InvokableFactory::class,
    LoadPsr7AutoloadDefinitionsTask::class     => LoadPsr7AutoloadDefinitionsTaskFactory::class,
    ReplacePsr4AutoloadFileTask::class         => ReplacePsr4AutoloadFileTaskFactory::class,

    // file accessor
    Psr4Autoload::class                        => Psr4AutloadFactory::class,
    ComposerJsonDevelopment::class             => ComposerJsonDevelopmentFactory::class
];
