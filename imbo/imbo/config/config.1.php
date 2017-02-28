<?php
use Imbo\Auth\AccessControl\Adapter\ArrayAdapter,  
    Imbo\Resource;  
return [  
'eventListeners' => [  
        'imageTrasformationCache' => [  
                'listener' => 'Imbo\EventListener\ImageTransformationCache',  
                'params' => [  
                                'path' => '/data/imbo_data/images_cache'  
                            ],  
                  ],  
        'authenticate'=>false,   
        'accessToken'=>false,  
        'test'=>false,  
        'statsAccess' => [  
            'listener' => 'Imbo\EventListener\StatsAccess',  
            'params' => [  
                [  
                    'allow' => ['*'],  
                ]  
            ],  
        ],  
], 
    'database' => new Imbo\Database\MongoDB([
        'databaseName' => 'imbo',
    ]),

 'storage' => function() {  
        return new Imbo\Storage\Filesystem([  
            'dataDir' => '/data/image_data/images_cache',  
        ]);  
},  
'accessControl' => function() {  
        return new Imbo\Auth\AccessControl\Adapter\ArrayAdapter (  
                [  
                        [  
                                'publicKey' => 'xtpu1',  
                                'privateKey' => 'xtpi',  
                                'acl' => [[  
                                        'resources' => Imbo\Resource::getReadOnlyResources(),  
                                        'users' => ['xtpu']  
                                ]]  
                        ], 
                        [ 
                                'publicKey' => 'review', 
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadOnlyResources(), 
                                        'users' => ['review'], 
                                ]] 
                        ], 
                        [ 
                                'publicKey' => 'root_product', 
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadOnlyResources(), 
                                        'users' => ['root_product'], 
                                ]] 
                        ], 
                        [ 
                                'publicKey' => 'logo', 
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadOnlyResources(), 
                                        'users' => ['logo'], 
 
                                    ]] 
                        ], 
                         [ 
                                'publicKey' => 'wss', 
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadWriteResources(), 
                                        'users' => ['wss'], 
				]]
                        ], 
                        [ 
                                'publicKey' => 'financial', 
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadWriteResources(), 
                                        'users' => ['financial'], 
 
                                    ]] 
                        ], 
                        [ 
                                'publicKey' => 'adsbanner',  
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadWriteResources(), 
                                        'users' => ['adsbanner'], 
 
                                    ]] 
                        ], 
 
                         [ 
                                'publicKey' => 'wss_write', 
                                'privateKey' => '123websosanh@195', 
                                'acl' => [[ 
                                        'resources' => Imbo\Resource::getReadWriteResources(), 
					 'users' => ['adsbanner', 'landingpage', 'wss', 'logo', 'root_product', 'review', 'cms', 'financial']
                                   ]]
                        ],
                         [
                                'publicKey' => 'landingpage',
                                'privateKey' => '123websosanh@195',
                                'acl' => [[
                                        'resources' => Imbo\Resource::getReadOnlyResources(),
                                        'users' => ['landingpage'],

                                    ]]
                        ],
        ]
        );
},]
?>

