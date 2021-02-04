<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7ea1cc603f48dced9479b9b7e183966
{
    public static $files = array (
        '1dbeeea179df487efaa350dfa4fe1bc3' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'HTML_Forms\\Actions\\Action' => __DIR__ . '/../..' . '/src/actions/class-action.php',
        'HTML_Forms\\Actions\\Email' => __DIR__ . '/../..' . '/src/actions/class-email.php',
        'HTML_Forms\\Actions\\MailChimp' => __DIR__ . '/../..' . '/src/actions/class-mailchimp.php',
        'HTML_Forms\\Admin\\Admin' => __DIR__ . '/../..' . '/src/admin/class-admin.php',
        'HTML_Forms\\Admin\\GDPR' => __DIR__ . '/../..' . '/src/admin/class-gdpr.php',
        'HTML_Forms\\Admin\\Migrations' => __DIR__ . '/../..' . '/src/admin/class-migrations.php',
        'HTML_Forms\\Admin\\Table' => __DIR__ . '/../..' . '/src/admin/class-table.php',
        'HTML_Forms\\Form' => __DIR__ . '/../..' . '/src/class-form.php',
        'HTML_Forms\\Forms' => __DIR__ . '/../..' . '/src/class-forms.php',
        'HTML_Forms\\Submission' => __DIR__ . '/../..' . '/src/class-submission.php',
        'HTML_Forms\\TagReplacers' => __DIR__ . '/../..' . '/src/class-tag-replacers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb7ea1cc603f48dced9479b9b7e183966::$classMap;

        }, null, ClassLoader::class);
    }
}
