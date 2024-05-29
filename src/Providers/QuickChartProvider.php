<?php
declare(strict_types=1);

namespace WilliamMoura\GenerateQrcode\Providers;
use WilliamMoura\GenerateQrcode\Providers\AbstractProvider;
final class QuickChartProvider extends AbstractProvider
{
    public function createQrCode()
    {
        $client = new \GuzzleHttp\Client();
        $client->request('GET', self::$client);
    }
}
