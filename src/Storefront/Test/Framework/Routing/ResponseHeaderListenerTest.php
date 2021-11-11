<?php declare(strict_types=1);

namespace Shopware\Storefront\Test\Framework\Routing;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Test\TestCaseBase\KernelLifecycleManager;
use Shopware\Core\Framework\Test\TestCaseBase\SalesChannelFunctionalTestBehaviour;
use Shopware\Core\PlatformRequest;
use Shopware\Core\Test\TestDefaults;

class ResponseHeaderListenerTest extends TestCase
{
    use SalesChannelFunctionalTestBehaviour;

    private const REVALIDATE_ROUTES = [
        'frontend.account.order.page' => [],
        'frontend.account.order.single.page' => ['deepLinkCode' => 'abc'],
        'frontend.account.edit-order.page' => ['orderId' => 'abc'],
        'frontend.account.payment.page' => [],
        'frontend.account.home.page' => [],
        'frontend.account.profile.page' => [],
        'frontend.account.address.page' => [],
        'frontend.account.address.create.page' => [],
        'frontend.account.address.edit.page' => ['addressId' => 'abc'],
        'frontend.account.login.page' => [],
        'frontend.account.guest.login.page' => [],
        'frontend.checkout.cart.page' => [],
        'frontend.checkout.confirm.page' => [],
        'frontend.checkout.finish.page' => [],
        'frontend.account.register.page' => [],
        'frontend.checkout.register.page' => [],
        'frontend.account.customer-group-registration.page' => ['customerGroupId' => 'abc'],
    ];

    public function testHomeController(): void
    {
        $browser = KernelLifecycleManager::createBrowser(KernelLifecycleManager::getKernel(), false);
        $browser->request('GET', $_SERVER['APP_URL']);
        $response = $browser->getResponse();

        static::assertFalse($response->headers->has(PlatformRequest::HEADER_CONTEXT_TOKEN));
        static::assertFalse($response->headers->has(PlatformRequest::HEADER_VERSION_ID));
        static::assertFalse($response->headers->has(PlatformRequest::HEADER_LANGUAGE_ID));
    }

    public function testStoreApiPresent(): void
    {
        $browser = $this->createCustomSalesChannelBrowser([
            'id' => TestDefaults::SALES_CHANNEL,
            'languages' => [],
        ]);
        $browser->setServerParameter('HTTP_' . PlatformRequest::HEADER_CONTEXT_TOKEN, '1234');
        $browser->setServerParameter('HTTP_' . PlatformRequest::HEADER_VERSION_ID, '1234');
        $browser->setServerParameter('HTTP_' . PlatformRequest::HEADER_LANGUAGE_ID, '1234');
        $browser->request('GET', '/store-api/checkout/cart');
        $response = $browser->getResponse();

        static::assertTrue($response->headers->has(PlatformRequest::HEADER_CONTEXT_TOKEN));
        static::assertTrue($response->headers->has(PlatformRequest::HEADER_VERSION_ID));
        static::assertTrue($response->headers->has(PlatformRequest::HEADER_LANGUAGE_ID));
    }

    /**
     * @dataProvider dataProviderRevalidateRoutes
     */
    public function testRevalidateHeaderPresent(string $route): void
    {
        $browser = KernelLifecycleManager::createBrowser(KernelLifecycleManager::getKernel(), false);
        $browser->request('GET', $_SERVER['APP_URL'] . $route);
        $response = $browser->getResponse();

        static::assertTrue($response->headers->hasCacheControlDirective('must-revalidate'));
        static::assertTrue($response->headers->hasCacheControlDirective('no-store'));
        static::assertTrue($response->headers->hasCacheControlDirective('no-cache'));
        static::assertSame(0, $response->getMaxAge());
    }

    public function dataProviderRevalidateRoutes(): iterable
    {
        $router = $this->getContainer()->get('router');

        foreach (self::REVALIDATE_ROUTES as $route => $parameters) {
            yield $route => [$router->generate($route, $parameters)];
        }
    }
}
