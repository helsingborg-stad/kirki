<?php return array(
    'root' => array(
        'name' => 'helsingborg-stad/kirki',
        'pretty_version' => '5.2.0',
        'version' => '5.2.0.0',
        'reference' => null,
        'type' => 'wordpress-muplugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v2.2.0',
            'version' => '2.2.0.0',
            'reference' => 'c29dc4b93137acb82734f672c37e029dfbd95b35',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'dealerdirect/phpcodesniffer-composer-installer' => array(
            'pretty_version' => 'v1.0.0',
            'version' => '1.0.0.0',
            'reference' => '4be43904336affa5c2f70744a348312336afd0da',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../dealerdirect/phpcodesniffer-composer-installer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'helsingborg-stad/kirki' => array(
            'pretty_version' => '5.2.0',
            'version' => '5.2.0.0',
            'reference' => null,
            'type' => 'wordpress-muplugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpcompatibility/php-compatibility' => array(
            'pretty_version' => '9.3.5',
            'version' => '9.3.5.0',
            'reference' => '9fb324479acf6f39452e0655d2429cc0d3914243',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/php-compatibility',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpcompatibility/phpcompatibility-paragonie' => array(
            'pretty_version' => '1.3.2',
            'version' => '1.3.2.0',
            'reference' => 'bba5a9dfec7fcfbd679cfaf611d86b4d3759da26',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/phpcompatibility-paragonie',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'phpcompatibility/phpcompatibility-wp' => array(
            'pretty_version' => '2.1.4',
            'version' => '2.1.4.0',
            'reference' => 'b6c1e3ee1c35de6c41a511d5eb9bd03e447480a5',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../phpcompatibility/phpcompatibility-wp',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.7.2',
            'version' => '3.7.2.0',
            'reference' => 'ed8e00df0a83aa96acf703f8c2979ff33341f879',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'wp-coding-standards/wpcs' => array(
            'pretty_version' => '2.3.0',
            'version' => '2.3.0.0',
            'reference' => '7da1894633f168fe244afc6de00d141f27517b62',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wp-coding-standards/wpcs',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'wptrt/wpthemereview' => array(
            'pretty_version' => 'dev-develop',
            'version' => 'dev-develop',
            'reference' => '15684d0852fe90d807c2ae7746dea1302b74b4bd',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wptrt/wpthemereview',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => true,
        ),
    ),
);
