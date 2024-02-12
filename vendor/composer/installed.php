<?php return array(
    'root' => array(
        'name' => 'gc/zipdealerservice',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '57025b5c4e240e39c2f07ed3dff05a931401cb29',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'gc/zipdealerservice' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '57025b5c4e240e39c2f07ed3dff05a931401cb29',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '2.x-dev',
            'version' => '2.9999999.9999999.9999999-dev',
            'reference' => '437cb3628f4cf6042cc10ae97fc2b8472e48ca1f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/log' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(
                0 => '3.x-dev',
            ),
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0 || 2.0.0 || 3.0.0',
            ),
        ),
        'videlalvaro/azserverless' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '2b75c8fdeb99e60567ca99c7b797f219f60ca818',
            'type' => 'library',
            'install_path' => __DIR__ . '/../videlalvaro/azserverless',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
