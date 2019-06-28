<?php $o = array();

// ** THIS IS AN AUTO GENERATED FILE. DO NOT EDIT MANUALLY ** 

//==================== v1 ====================

$o['v1'] = array();

//==== v1 tool ====

$o['v1']['tool'] = array (
    'GET' => 
    array (
        'url' => 'tool',
        'className' => 'Bossabox\\Api\\Tool',
        'path' => 'tool',
        'methodName' => 'index',
        'arguments' => 
        array (
            'tag' => 0,
        ),
        'defaults' => 
        array (
            0 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Lista de ferramentas',
            'longDescription' => 'Retorna lista de ferramentas disponíveis podendo ser filtrada por tag',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'tag',
                    'description' => 'Opcionalmente, uma ou mais tag(s) separado por vírgula',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Tag',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Lista de ferramentas',
            ),
            'scope' => 
            array (
                '*' => 'Bossabox\\Api\\',
            ),
            'resourcePath' => 'tool/',
        ),
        'accessLevel' => 0,
    ),
    'POST' => 
    array (
        'url' => 'tool',
        'className' => 'Bossabox\\Api\\Tool',
        'path' => 'tool',
        'methodName' => 'post',
        'arguments' => 
        array (
            'title' => 0,
            'link' => 1,
            'description' => 2,
            'tags' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Cadastra ferramenta',
            'longDescription' => 'Cadastra uma nova ferramenta, em caso de sucesso retorna a ferramenta com seu identificador',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'title',
                    'description' => 'Título da ferramenta',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                        'max' => '255',
                    ),
                    'label' => 'Title',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'link',
                    'description' => 'Link da ferramenta',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                        'max' => '255',
                    ),
                    'label' => 'Link',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'description',
                    'description' => 'Descrição da ferramenta',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'min' => '1',
                        'max' => '255',
                    ),
                    'label' => 'Description',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'array',
                    'name' => 'tags',
                    'description' => 'Uma ou mais Tag da ferramenta',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'indexed',
                    ),
                    'label' => 'Tags',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Ferrammenta cadastrada',
            ),
            'scope' => 
            array (
                '*' => 'Bossabox\\Api\\',
            ),
            'resourcePath' => 'tool/',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 tool/index ====

$o['v1']['tool/index'] = array (
    'GET' => 
    array (
        'url' => 'tool',
        'className' => 'Bossabox\\Api\\Tool',
        'path' => 'tool',
        'methodName' => 'index',
        'arguments' => 
        array (
            'tag' => 0,
        ),
        'defaults' => 
        array (
            0 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Lista de ferramentas',
            'longDescription' => 'Retorna lista de ferramentas disponíveis podendo ser filtrada por tag',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'tag',
                    'description' => 'Opcionalmente, uma ou mais tag(s) separado por vírgula',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Tag',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Lista de ferramentas',
            ),
            'scope' => 
            array (
                '*' => 'Bossabox\\Api\\',
            ),
            'resourcePath' => 'tool/',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 tool/{n0} ====

$o['v1']['tool/{n0}'] = array (
    'DELETE' => 
    array (
        'url' => 'tool/{id}',
        'className' => 'Bossabox\\Api\\Tool',
        'path' => 'tool',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Apaga uma ferramenta',
            'longDescription' => 'Apaga uma ferramenta de acordo com o id informado',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Identificador da ferramenta',
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'scope' => 
            array (
                '*' => 'Bossabox\\Api\\',
            ),
            'resourcePath' => 'tool/',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 resources/{s0} ====

$o['v1']['resources/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'resources/{id}',
        'className' => 'Luracast\\Restler\\Resources',
        'path' => 'resources',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => '',
        ),
        'metadata' => 
        array (
            'description' => '',
            'longDescription' => '',
            'access' => 'hybrid',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'id',
                    'label' => 'Id',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'reason' => 'RestException',
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'null',
                    1 => 'stdClass',
                ),
                'description' => '',
            ),
            'url' => 'GET {id}',
            'category' => 'Framework',
            'package' => 'Restler',
            'author' => 
            array (
                0 => 
                array (
                    'email' => 'arul@luracast.com',
                    'name' => 'R.Arul Kumaran',
                ),
            ),
            'copyright' => '2010 Luracast',
            'license' => 'http://www.opensource.org/licenses/lgpl-license.php LGPL',
            'link' => 
            array (
                0 => 'http://luracast.com/products/restler/',
            ),
            'version' => '3.0.0rc5',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'Scope' => 'Luracast\\Restler\\Scope',
                'stdClass' => 'stdClass',
            ),
            'resourcePath' => 'resources/',
            'classDescription' => 'API Class to create Swagger Spec 1.1 compatible id and operation listing',
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 resources ====

$o['v1']['resources'] = array (
    'GET' => 
    array (
        'url' => 'resources',
        'className' => 'Luracast\\Restler\\Resources',
        'path' => 'resources',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => '',
            'longDescription' => '',
            'access' => 'hybrid',
            'return' => 
            array (
                'type' => 'stdClass',
                'description' => '',
                'children' => 
                array (
                ),
            ),
            'category' => 'Framework',
            'package' => 'Restler',
            'author' => 
            array (
                0 => 
                array (
                    'email' => 'arul@luracast.com',
                    'name' => 'R.Arul Kumaran',
                ),
            ),
            'copyright' => '2010 Luracast',
            'license' => 'http://www.opensource.org/licenses/lgpl-license.php LGPL',
            'link' => 
            array (
                0 => 'http://luracast.com/products/restler/',
            ),
            'version' => '3.0.0rc5',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'Scope' => 'Luracast\\Restler\\Scope',
                'stdClass' => 'stdClass',
            ),
            'resourcePath' => 'resources/',
            'classDescription' => 'API Class to create Swagger Spec 1.1 compatible id and operation listing',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 resources/index ====

$o['v1']['resources/index'] = array (
    'GET' => 
    array (
        'url' => 'resources',
        'className' => 'Luracast\\Restler\\Resources',
        'path' => 'resources',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => '',
            'longDescription' => '',
            'access' => 'hybrid',
            'return' => 
            array (
                'type' => 'stdClass',
                'description' => '',
                'children' => 
                array (
                ),
            ),
            'category' => 'Framework',
            'package' => 'Restler',
            'author' => 
            array (
                0 => 
                array (
                    'email' => 'arul@luracast.com',
                    'name' => 'R.Arul Kumaran',
                ),
            ),
            'copyright' => '2010 Luracast',
            'license' => 'http://www.opensource.org/licenses/lgpl-license.php LGPL',
            'link' => 
            array (
                0 => 'http://luracast.com/products/restler/',
            ),
            'version' => '3.0.0rc5',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'Scope' => 'Luracast\\Restler\\Scope',
                'stdClass' => 'stdClass',
            ),
            'resourcePath' => 'resources/',
            'classDescription' => 'API Class to create Swagger Spec 1.1 compatible id and operation listing',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 resources/verifyaccess ====

$o['v1']['resources/verifyaccess'] = array (
    'GET' => 
    array (
        'url' => 'resources/verifyaccess',
        'className' => 'Luracast\\Restler\\Resources',
        'path' => 'resources',
        'methodName' => 'verifyAccess',
        'arguments' => 
        array (
            'route' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Verifies that the requesting user is allowed to view the docs for this API',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'route',
                    'type' => 'mixed',
                    'label' => 'Route',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'boolean',
                'description' => 'True if the user should be able to view this API\'s docs',
            ),
            'category' => 'Framework',
            'package' => 'Restler',
            'author' => 
            array (
                0 => 
                array (
                    'email' => 'arul@luracast.com',
                    'name' => 'R.Arul Kumaran',
                ),
            ),
            'copyright' => '2010 Luracast',
            'license' => 'http://www.opensource.org/licenses/lgpl-license.php LGPL',
            'link' => 
            array (
                0 => 'http://luracast.com/products/restler/',
            ),
            'version' => '3.0.0rc5',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'Scope' => 'Luracast\\Restler\\Scope',
                'stdClass' => 'stdClass',
            ),
            'resourcePath' => 'resources/',
            'classDescription' => 'API Class to create Swagger Spec 1.1 compatible id and operation listing',
        ),
        'accessLevel' => 3,
    ),
);

//==================== apiVersionMap ====================

$o['apiVersionMap'] = array();

//==== apiVersionMap Bossabox\Api\Tool ====

$o['apiVersionMap']['Bossabox\Api\Tool'] = array (
    1 => 'Bossabox\\Api\\Tool',
);

//==== apiVersionMap Luracast\Restler\Resources ====

$o['apiVersionMap']['Luracast\Restler\Resources'] = array (
    1 => 'Luracast\\Restler\\Resources',
);
return $o;