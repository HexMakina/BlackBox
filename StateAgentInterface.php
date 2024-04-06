<?php

namespace HexMakina\BlackBox;

interface StateAgentInterface
{
    public const INDEX_MESSAGES = 'u_mess';
    public const INDEX_FILTER = 'filter';
    public const INDEX_OPERATOR = 'op';
    public const DEFAULT_SESSION_NAME = 'IS-54-16'; // State Agent Smith Reloaded License

    public static function getInstance(): StateAgentInterface;

    public function start(): string;
    public function destroy(): bool;

    public function set(string $name, $value): void;
    public function has(string $name): bool;
    public function get(string $name);

    // camelCase wrapper for setcookie, coherent with getCookie
    public function setCookie(
        string $name,
        string $value = "",
        int $expires_in = 365 * 24 * 60 * 60,
        string $path = "/",
        string $domain = "",
        bool $secure = false,
        bool $httponly = false
    ): bool;

    // returns the value stored or null
    public function getCookie(string $name): ?string;

    public function operatorId(string $setter = null): ?string;
    public function operatorCheckinDate(): string;
}
