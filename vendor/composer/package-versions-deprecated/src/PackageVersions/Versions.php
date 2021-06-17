<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'shopware/production';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'aws/aws-sdk-php' => '3.133.6@cd7bd2fdd159146ef6c7eeb90b73fae4fd11da57',
  'cocur/slugify' => 'v4.0.0@3f1ffc300f164f23abe8b64ffb3f92d35cec8307',
  'composer/ca-bundle' => '1.2.8@8a7ecad675253e4654ea05505233285377405215',
  'composer/composer' => '1.10.15@547c9ee73fe26c77af09a0ea16419176b1cdbd12',
  'composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47',
  'composer/semver' => '1.7.1@38276325bd896f90dfcfe30029aa5db40df387a7',
  'composer/spdx-licenses' => '1.5.4@6946f785871e2314c60b4524851f3702ea4f2223',
  'composer/xdebug-handler' => '1.4.4@6e076a124f7ee146f2487554a94b6a19a74887ba',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v0.8.4@8f49b3b01693f51037dd50da81090beba1b5c005',
  'egulias/email-validator' => '2.1.22@68e418ec08fbfc6f58f6fd2eea70ca8efc8cc7d5',
  'elasticsearch/elasticsearch' => 'v7.2.2@eefeaa8decab4056d6457d179147cd885faf6653',
  'enqueue/amqp-tools' => '0.10.0@e41d56966fdd1c7681d342e431e65bccb1962a9e',
  'enqueue/dbal' => '0.10.0@78bc56f49b247cc58cce3eb77cd3be966d0a3eff',
  'enqueue/dsn' => '0.10.4@5c4150eebecafedc00f3c8e9ce84f5ae66abed1a',
  'enqueue/enqueue' => '0.10.6@2d88b010fe24a8f7a8ece2262014be4545c1d371',
  'enqueue/enqueue-bundle' => '0.10.6@38b2ce15825ea05a04fe49bc3f0829629aeffe21',
  'enqueue/null' => '0.10.4@8e17ca9195abdb5e6b2d6f55a4fd7292951ab715',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'google/auth' => 'v1.14.3@c1503299c779af0cbc99b43788f75930988852cf',
  'google/cloud-core' => 'v1.39.0@f9e7421beac89fd7d9006a13a6b39b89dd86c92e',
  'google/cloud-storage' => 'v1.17.0@626e910530f0b9463a15563f697a66f1cfbd6369',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.0.63@8132daec326565036bc8e8d1876f77ec183a7bd6',
  'league/flysystem-aws-s3-v3' => '1.0.23@15b0cdeab7240bf8e8bffa85ae5275bbc3692bf4',
  'league/oauth2-server' => '7.3.3@c7f499849704ebe2c60b45b6d6bb231df5601d4a',
  'marc1706/fast-image-size' => 'v1.1.6@3a3a2b036be20f43fa06ce00dfa754df503e6684',
  'monolog/monolog' => '1.25.5@1817faadd1846cd08be9a49e905dc68823bc38c0',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'nyholm/psr7' => '1.2.1@55ff6b76573f5b242554c9775792bd59fb52e11c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'ongr/elasticsearch-dsl' => 'v7.0.0@b86153ce7a4192ff7caf8d93f59c2e7c151cba1f',
  'padaliyajay/php-autoprefixer' => '1.2@0f36b7cfbd71d25836bcb9f4b58c09252ca4e9ec',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phenx/php-font-lib' => '0.5.2@ca6ad461f032145fff5971b5985e5af9e7fa88d8',
  'phenx/php-svg-lib' => 'v0.3.3@5fa61b65e612ce1ae15f69b3d223cb14ecc60e32',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'queue-interop/amqp-interop' => '0.8.1@2029c3b3b9f10cc1c0a219650f66ab68fcfe656d',
  'queue-interop/queue-interop' => '0.8.0@b43af85f635439fa2c9a6d8fd486489da4869741',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'rize/uri-template' => '0.3.2@9e5fdd5c47147aa5adf7f760002ee591ed37b9ca',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'scssphp/scssphp' => '1.0.6@5b3c9d704950d8f9637f5110c36c281ec47dc13c',
  'seld/jsonlint' => '1.8.2@590cfec960b77fd55e39b7d9246659e95dd6d337',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'shopware/administration' => '6.3.3.0@c25b580c3d99d827fd9689673f5b81cb63754474',
  'shopware/core' => '6.3.3.0@1203a2dbc5273fe240eb7896d68dc6099030ddbd',
  'shopware/elasticsearch' => '6.3.3.0@0217d8767fad746da34e3a4b775a84990f0369d2',
  'shopware/recovery' => '6.3.3.0@570e4a7b91cf6c9c297539404ac902f48cc1c05a',
  'shopware/storefront' => '6.3.3.0@255849a343f793b1755d1c54de68d026a958f7b3',
  'sroze/messenger-enqueue-transport' => '0.4.0@a698418e702ecb29aa51ee2e40e40c90798057f0',
  'superbalist/flysystem-google-storage' => '7.2.2@87e2f450c0e4b5200fef9ffe6863068cc873d734',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.16@627761b47f94affdd8405e65245a8e1bbb810399',
  'symfony/cache' => 'v4.4.16@7ab1528cac0328566895ad303e2a5111aef2b440',
  'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1',
  'symfony/config' => 'v4.4.16@e85481cf359a7b28a44ac91f7d83441b70d76192',
  'symfony/console' => 'v4.4.16@20f73dd143a5815d475e0838ff867bce1eebd9d5',
  'symfony/debug' => 'v4.4.16@c87adf3fc1cd0bf4758316a3a150d50a8f957ef4',
  'symfony/debug-bundle' => 'v4.4.16@d11df24e90f07b49b1b1b170b28d8396edff4d8d',
  'symfony/dependency-injection' => 'v4.4.16@4c41ad68924fd8f9e55e1cd77fd6bc28daa3fe89',
  'symfony/dotenv' => 'v4.4.16@450e2dad0b42431ad9558bc8adf07e8c4b55d1cd',
  'symfony/error-handler' => 'v4.4.16@363cca01cabf98e4f1c447b14d0a68617f003613',
  'symfony/event-dispatcher' => 'v4.4.16@4204f13d2d0b7ad09454f221bb2195fccdf1fe98',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v4.4.16@e74b873395b7213d44d1397bd4a605cd1632a68a',
  'symfony/finder' => 'v4.4.16@26f63b8d4e92f2eecd90f6791a563ebb001abe31',
  'symfony/framework-bundle' => 'v4.4.16@0067e02d6ca55e284617777ed90cd086d3836457',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.16@827a00811ef699e809a201ceafac0b2b246bf38a',
  'symfony/http-kernel' => 'v4.4.16@109b2a46e470a487ec8b0ffea4b0bb993aaf42ed',
  'symfony/inflector' => 'v4.4.16@a2ca868d7fc02800db67d1e1b6e5c83882d2aaa6',
  'symfony/intl' => 'v5.1.8@e353c6c37afa1ff90739b3941f60ff9fa650eec3',
  'symfony/messenger' => 'v4.4.16@56676069f979835c06eb1b30c51deb4255cf6fcf',
  'symfony/mime' => 'v4.4.16@360f9963b6d4db6c3454d58548fb2b085f97d3e2',
  'symfony/monolog-bridge' => 'v4.4.16@a4f03546300a269c8512476ce9865a2ec94a5675',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.16@157a252222251310fe50c71012b4e72f01325850',
  'symfony/polyfill-ctype' => 'v1.20.0@f4ba089a5b6366e453971d3aad5fe8e897b37f41',
  'symfony/polyfill-iconv' => 'v1.20.0@c536646fdb4f29104dd26effc2fdcb9a5b085024',
  'symfony/polyfill-intl-grapheme' => 'v1.20.0@c7cf3f858ec7d70b89559d6e6eb1f7c2517d479c',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php72' => 'v1.20.0@cede45fcdfabdd6043b3592e83678e42ec69e930',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/process' => 'v4.4.16@2f4b049fb80ca5e9874615a2a85dc2a502090f05',
  'symfony/property-access' => 'v4.4.16@3d97341e820c248f8dc0b6b5bf991964bda5a3ac',
  'symfony/property-info' => 'v4.4.16@f2063afce47039653b4c6754d35aeb647f837926',
  'symfony/proxy-manager-bridge' => 'v4.4.16@aeaa539f696f77accbd3b99ba283406db1170ee6',
  'symfony/psr-http-message-bridge' => 'v2.0.0@ce709cd9c90872c08c2427b45739d5f3c781ab4f',
  'symfony/routing' => 'v4.4.16@826794f2e9305fe73cba859c60d2a336851bd202',
  'symfony/security-core' => 'v4.4.16@fa1310e3fb2768f7f4cb6d3385faa24259a20604',
  'symfony/security-csrf' => 'v4.4.16@3ca1576bc8d92cb0a8c990954704d2789a72cb57',
  'symfony/serializer' => 'v4.4.16@2af7e86db04ee65fdf1991b17ee0b3e955c93de9',
  'symfony/service-contracts' => 'v1.1.8@ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
  'symfony/string' => 'v5.1.8@a97573e960303db71be0dd8fda9be3bca5e0feea',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.4.16@73095716af79f610f3b6338b911357393fdd10ab',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/twig-bridge' => 'v4.4.16@841c46c963891122429cfa1b56f06aeef9c1c010',
  'symfony/twig-bundle' => 'v4.4.16@9acacb72d30ee1ea0331762906a129a66a9d9883',
  'symfony/validator' => 'v4.4.16@1d214a3aaa0753b19f94cf0479d8c315d957a10d',
  'symfony/var-dumper' => 'v4.4.16@3718e18b68d955348ad860e505991802c09f5f73',
  'symfony/var-exporter' => 'v4.4.16@a07f9c350ebe30dadd30505d2b05d7c9bbcef2b1',
  'symfony/yaml' => 'v4.4.16@543cb4dbd45ed803f08a9a65f27fb149b5dd20c2',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'twig/intl-extra' => 'v2.12.3@e1b768be4847bc0cf748ac1651b043faf7454a71',
  'twig/string-extra' => 'v2.12.3@54fb5511c4a0189de1d48d0f7c98843c270084e8',
  'twig/twig' => 'v2.12.3@97b6311585cae66a26833b14b33785f5797f7d39',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'zircote/swagger-php' => '3.0.3@c86386bd623ffad6f7e6f9269bf51d42d2797012',
  'bheller/images-generator' => '1.0.1@50b61fe1dcf1b72b6a830debec4db22afd1e8ee1',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'johnkary/phpunit-speedtrap' => 'v3.1.0@dac11b8640d4be7a70f336616947fa84f169835a',
  'league/flysystem-memory' => '1.0.2@d0e87477c32e29f999b4de05e64c1adcddb51757',
  'mbezhanov/faker-provider-collection' => '1.2.1@076c00f0d438f12ec7da0fdaadbfb7940913763e',
  'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'opis/json-schema' => '1.0.19@1bcb3582881d0692d002537a4472964280f71313',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.1@8ce87516be71aae9b956f81906aaf0338e0d8a2d',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.8@34c18baa6a44f1d1fbf0338907139e9dce95b997',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'smalot/pdfparser' => 'v0.14.0@ec72a99028ba5e21a0acad92047b85e128cbf81f',
  'symfony/browser-kit' => 'v4.4.16@99b640fd5d06877e3242ba0393b40a7877dfe534',
  'symfony/dom-crawler' => 'v4.4.16@30ad9ac96a01913195bf0328d48e29d54fa53e6e',
  'symfony/phpunit-bridge' => 'v4.4.16@d53f4e6b5ac7beb6c1e95d8f30a3cdf5b592fa03',
  'symfony/stopwatch' => 'v4.4.16@7c1d1461330e86e901dbb587a10397d15a02cbad',
  'symfony/web-profiler-bundle' => 'v4.4.16@951540a04bd7ba2bb6b052c573a1450cd7eb2ea8',
  'tecnickcom/tcpdf' => '6.3.5@19a535eaa7fb1c1cac499109deeb1a7a201b4549',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'shopware/production' => 'dev-46f606cd1e715abf3ae92fa9469f05a3348c8f35@46f606cd1e715abf3ae92fa9469f05a3348c8f35',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
