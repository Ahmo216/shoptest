<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
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
  'composer/ca-bundle' => '1.2.9@78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
  'composer/composer' => '1.10.20@e55d297525f0ecc805c813a0f63a40114fd670f6',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'composer/semver' => '1.7.2@647490bbcaf7fc4891c58f47b825eb99d19c377a',
  'composer/spdx-licenses' => '1.5.5@de30328a7af8680efdc03e396aad24befd513200',
  'composer/xdebug-handler' => '1.4.5@f28d44c286812c714741478d968104c5e604a1d4',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v0.8.4@8f49b3b01693f51037dd50da81090beba1b5c005',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'elasticsearch/elasticsearch' => 'v7.2.2@eefeaa8decab4056d6457d179147cd885faf6653',
  'enqueue/amqp-tools' => '0.10.0@e41d56966fdd1c7681d342e431e65bccb1962a9e',
  'enqueue/dbal' => '0.10.0@78bc56f49b247cc58cce3eb77cd3be966d0a3eff',
  'enqueue/dsn' => '0.10.4@5c4150eebecafedc00f3c8e9ce84f5ae66abed1a',
  'enqueue/enqueue' => '0.10.6@2d88b010fe24a8f7a8ece2262014be4545c1d371',
  'enqueue/enqueue-bundle' => '0.10.6@38b2ce15825ea05a04fe49bc3f0829629aeffe21',
  'enqueue/null' => '0.10.4@8e17ca9195abdb5e6b2d6f55a4fd7292951ab715',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'google/auth' => 'v1.14.3@c1503299c779af0cbc99b43788f75930988852cf',
  'google/cloud-core' => 'v1.41.0@2e58627e1c4f1417631ba4b0a1098b66ac98665c',
  'google/cloud-storage' => 'v1.17.0@626e910530f0b9463a15563f697a66f1cfbd6369',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => '1.4.0@60d379c243457e073cff02bc323a2a86cb355631',
  'guzzlehttp/psr7' => '1.7.0@53330f47520498c0ae1f61f7e2c90f55690c06a3',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/jwt' => '3.3.1@a11ec5f4b4d75d1fcd04e133dede4c317aac9e18',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.0.63@8132daec326565036bc8e8d1876f77ec183a7bd6',
  'league/flysystem-aws-s3-v3' => '1.0.23@15b0cdeab7240bf8e8bffa85ae5275bbc3692bf4',
  'league/oauth2-server' => '7.3.3@c7f499849704ebe2c60b45b6d6bb231df5601d4a',
  'marc1706/fast-image-size' => 'v1.1.6@3a3a2b036be20f43fa06ce00dfa754df503e6684',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'mtdowling/jmespath.php' => '2.6.0@42dae2cbd13154083ca6d70099692fef8ca84bfb',
  'nyholm/psr7' => '1.2.1@55ff6b76573f5b242554c9775792bd59fb52e11c',
  'ongr/elasticsearch-dsl' => 'v7.1.3@286ad9dad3278e7a5c1cd9084b64c72bc31dffb5',
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
  'queue-interop/queue-interop' => '0.8.1@117043fd38490f8b5516622cd4b697b33a89ce2b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'rize/uri-template' => '0.3.2@9e5fdd5c47147aa5adf7f760002ee591ed37b9ca',
  'sabberworm/php-css-parser' => '8.3.1@d217848e1396ef962fb1997cf3e2421acba7f796',
  'scssphp/scssphp' => '1.0.6@5b3c9d704950d8f9637f5110c36c281ec47dc13c',
  'seld/jsonlint' => '1.8.3@9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
  'seld/phar-utils' => '1.1.1@8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
  'sensio/framework-extra-bundle' => 'v5.5.3@98f0807137b13d0acfdf3c255a731516e97015de',
  'shopware/administration' => '6.3.5.0@8a58a3264bfab3f076e86ae702a2962ae0e7d021',
  'shopware/core' => '6.3.5.0@479960a2bec7602acc93942c097588f22496c39b',
  'shopware/elasticsearch' => '6.3.5.0@bf921b0f7f3c64d1d0b7447596cf18c47a82e30d',
  'shopware/recovery' => '6.3.5.0@8218bbfd06e24cf6f709453ba1c0b3008c0af817',
  'shopware/storefront' => '6.3.5.0@a03ab3d5f6399426bae8f09be9898f433d95d180',
  'sroze/messenger-enqueue-transport' => '0.4.0@a698418e702ecb29aa51ee2e40e40c90798057f0',
  'superbalist/flysystem-google-storage' => '7.2.2@87e2f450c0e4b5200fef9ffe6863068cc873d734',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/asset' => 'v4.4.19@f2204a526c34945b1614cde033692983b6102eb8',
  'symfony/cache' => 'v4.4.19@3c18a6d8e4fb15b9e6ed4e6eb1c93f2ad0fd4d55',
  'symfony/cache-contracts' => 'v1.1.7@af50d14ada9e4e82cfabfabdc502d144f89be0a1',
  'symfony/config' => 'v4.4.19@2c4c7827a7e143f5cf375666641b0f448eab8802',
  'symfony/console' => 'v4.4.19@24026c44fc37099fa145707fecd43672831b837a',
  'symfony/debug' => 'v4.4.19@af4987aa4a5630e9615be9d9c3ed1b0f24ca449c',
  'symfony/debug-bundle' => 'v4.4.19@1e136a4c6d8c2364b77e31c5bf124660cff6d084',
  'symfony/dependency-injection' => 'v4.4.19@2468b95d869c872c6fb1b93b395a7fcd5331f2b9',
  'symfony/dotenv' => 'v4.4.19@4952e5ce9e6df3d737b9e9c337bddf781180a213',
  'symfony/error-handler' => 'v4.4.19@d603654eaeb713503bba3e308b9e748e5a6d3f2e',
  'symfony/event-dispatcher' => 'v4.4.19@c352647244bd376bf7d31efbd5401f13f50dad0c',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v4.4.19@83a6feed14846d2d9f3916adbaf838819e4e3380',
  'symfony/finder' => 'v4.4.18@ebd0965f2dc2d4e0f11487c16fbb041e50b5c09b',
  'symfony/framework-bundle' => 'v4.4.19@790f1db60deb1577eaf86f2025215b48c53f8e94',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.19@8888741b633f6c3d1e572b7735ad2cae3e03f9c5',
  'symfony/http-kernel' => 'v4.4.18@eaff9a43e74513508867ecfa66ef94fbb96ab128',
  'symfony/inflector' => 'v4.4.19@a8691d012fb449ba49363a3b3e3e743f354f7d56',
  'symfony/intl' => 'v5.2.2@930f17689729cc47d2ce18be21ed403bcbeeb6a9',
  'symfony/messenger' => 'v4.4.19@e6a4c1428de54a2cb2c3c23b0f13da6ec0a1b030',
  'symfony/mime' => 'v4.4.19@7f50c27c7417115ca620962b853a7f4db0479e7c',
  'symfony/monolog-bridge' => 'v4.4.19@47343492b1841db765de8d55b4b5ccaa1c96edd3',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v4.4.19@cd8c6a2778d5f8b5e8fc4b7abdf126790b5d5095',
  'symfony/polyfill-ctype' => 'v1.22.0@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-iconv' => 'v1.22.0@b34bfb8c4c22650ac080d2662ae3502e5f2f4ae6',
  'symfony/polyfill-intl-grapheme' => 'v1.22.0@267a9adeb8ecb8071040a740930e077cdfb987af',
  'symfony/polyfill-intl-icu' => 'v1.22.0@b2b1e732a6c039f1a3ea3414b3379a2433e183d6',
  'symfony/polyfill-intl-idn' => 'v1.22.0@0eb8293dbbcd6ef6bf81404c9ce7d95bcdf34f44',
  'symfony/polyfill-intl-normalizer' => 'v1.22.0@6e971c891537eb617a00bb07a43d182a6915faba',
  'symfony/polyfill-mbstring' => 'v1.22.0@f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
  'symfony/polyfill-php72' => 'v1.22.0@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/polyfill-php80' => 'v1.22.0@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/process' => 'v4.4.19@7e950b6366d4da90292c2e7fa820b3c1842b965a',
  'symfony/property-access' => 'v4.4.19@94a1d9837396c71a0d8c31686c16693a15651622',
  'symfony/property-info' => 'v4.4.19@3314c9f854b8693b12c81114556c1fb51b6d2bf7',
  'symfony/proxy-manager-bridge' => 'v4.4.19@811a39770b21f05bea9a737568074be4f02e7733',
  'symfony/psr-http-message-bridge' => 'v2.0.0@ce709cd9c90872c08c2427b45739d5f3c781ab4f',
  'symfony/routing' => 'v4.4.19@87529f6e305c7acb162840d1ea57922038072425',
  'symfony/security-core' => 'v4.4.19@02da7f55df0a144972b0e012810d6515b5adf3fb',
  'symfony/security-csrf' => 'v4.4.19@6864087a9c20eb4bb4063fc2f36954cec0ce28a6',
  'symfony/serializer' => 'v4.4.19@6b383bc45777d14857b634e9f8fa2b8a2e69b66d',
  'symfony/service-contracts' => 'v1.1.8@ffc7f5692092df31515df2a5ecf3b7302b3ddacf',
  'symfony/string' => 'v5.2.2@c95468897f408dd0aca2ff582074423dd0455122',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation' => 'v4.4.19@e1d0c67167a553556d9f974b5fa79c2448df317a',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'symfony/twig-bridge' => 'v4.4.18@18e73526b4e499646111739c118a6d8dad062d91',
  'symfony/twig-bundle' => 'v4.4.18@10d55db1fd9e506c6f074c3e9d566c25b407877a',
  'symfony/validator' => 'v4.4.19@039479123c8d824f23efba9bb413b85dc3f42e43',
  'symfony/var-dumper' => 'v4.4.19@a1eab2f69906dc83c5ddba4632180260d0ab4f7f',
  'symfony/var-exporter' => 'v4.4.19@3a3ea598bba6901d20b58c2579f68700089244ed',
  'symfony/yaml' => 'v4.4.19@17ed9f14c1aa05b1a5cf2e2c5ef2d0be28058ef9',
  'true/punycode' => 'v2.1.1@a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
  'twig/intl-extra' => 'v2.12.3@e1b768be4847bc0cf748ac1651b043faf7454a71',
  'twig/string-extra' => 'v2.12.3@54fb5511c4a0189de1d48d0f7c98843c270084e8',
  'twig/twig' => 'v2.12.3@97b6311585cae66a26833b14b33785f5797f7d39',
  'zircote/swagger-php' => '3.0.3@c86386bd623ffad6f7e6f9269bf51d42d2797012',
  'bheller/images-generator' => '1.0.1@50b61fe1dcf1b72b6a830debec4db22afd1e8ee1',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'johnkary/phpunit-speedtrap' => 'v3.1.0@dac11b8640d4be7a70f336616947fa84f169835a',
  'league/flysystem-memory' => '1.0.2@d0e87477c32e29f999b4de05e64c1adcddb51757',
  'mbezhanov/faker-provider-collection' => '1.2.1@076c00f0d438f12ec7da0fdaadbfb7940913763e',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'opis/json-schema' => '1.0.19@1bcb3582881d0692d002537a4472964280f71313',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.0.4@e4782611070e50613683d2b9a57730e9a3ba5451',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.2@245710e971a030f42e08f4912863805570f23d39',
  'phpunit/php-code-coverage' => '7.0.14@bb7c9a210c72e4709cdde67f8b7362f672f2225c',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.2@472b687829041c24b25f475e14c2f38a09edf1c2',
  'phpunit/phpunit' => '8.5.14@c25f79895d27b6ecd5abfa63de1606b786a461a3',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '3.0.1@474fb9edb7ab891665d3bfc6317f42a0a150454b',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/type' => '1.1.4@0150cfbc4495ed2df3872fb31b26781e4e077eb4',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'smalot/pdfparser' => 'v0.14.0@ec72a99028ba5e21a0acad92047b85e128cbf81f',
  'symfony/browser-kit' => 'v4.4.19@f6f060bdc473c3f3b1f00e2ebdeb3d02eda77f82',
  'symfony/dom-crawler' => 'v4.4.19@21032c566558255e551d23f4a516434c9e3a9a78',
  'symfony/phpunit-bridge' => 'v4.4.19@85a2fcd7a7111b503962a5f0a55f34ea41dfe2cf',
  'symfony/stopwatch' => 'v4.4.19@c5572f6494fc20668a73b77684d8dc77e534d8cf',
  'symfony/web-profiler-bundle' => 'v4.4.18@d419cd0b14f15f44bb50b77e2f209a8c63249baa',
  'tecnickcom/tcpdf' => '6.3.5@19a535eaa7fb1c1cac499109deeb1a7a201b4549',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'shopware/production' => 'dev-fa8e349c7290d5742d8560ca4d510b14ba588b0a@fa8e349c7290d5742d8560ca4d510b14ba588b0a',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
