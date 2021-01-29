<?php


namespace Imdhemy\Expo;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Utils;
use Imdhemy\Expo\Contracts\ClientAble;
use Imdhemy\Expo\Contracts\MessageListAble;
use Imdhemy\Expo\Contracts\PushReceiptAble;
use Imdhemy\Expo\Contracts\PushTicketAble;
use Imdhemy\Expo\Contracts\PushTicketListAble;
use Imdhemy\Expo\Messages\PushTicketList;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Client
 * @package Imdhemy\Expo
 */
class Client implements ClientAble
{
    const HEADERS = [
        'Accept' => 'application/json',
        'Host' => 'exp.host',
        'Accept-Encoding' => 'gzip, deflate',
        'Content-Type' => 'application/json',
    ];

    const URI_PUSH = 'https://exp.host/--/api/v2/push/send';

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Client constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return ClientAble
     */
    public static function create(): ClientAble
    {
        return new self(new \GuzzleHttp\Client(self::HEADERS));
    }

    /**
     * @param MessageListAble $messages
     * @return PushTicketListAble
     * @throws GuzzleException
     */
    public function push(MessageListAble $messages): PushTicketListAble
    {
        $options = ['json' => $messages->toArray()];
        $response = $this->client->post(self::URI_PUSH, $options);
        $data = $this->getResponseData($response);

        return PushTicketList::fromArray($data);
    }

    /**
     * @param ResponseInterface $response
     * @return array
     */
    private function getResponseData(ResponseInterface $response): array
    {
        $responseBody = Utils::jsonDecode($response->getBody()->getContents(), true);

        return $responseBody['data'];
    }

    /**
     * @param array|PushTicketAble[] $pushTickets
     * @return array|PushReceiptAble
     */
    public function getReceipts(array $pushTickets): array
    {
        // TODO: Implement getReceipts() method.
    }
}
