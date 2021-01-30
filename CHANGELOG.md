# v1.0.1
The `Imdhemy\Expo\Messages\Message` constructor changed.

- **from** `__construct(array $tokens, string $title, string $body, ?JsonAble $data = null)`
- **to** `__construct(string $title, string $body)`

Use the `addPushToken(string $token)` method add a push token
