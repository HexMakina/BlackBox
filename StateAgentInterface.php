<?php

namespace HexMakina\BlackBox;

interface StateAgentInterface
{
    public const INDEX_MESSAGES = 'u_mess';
    public const INDEX_FILTER = 'filter';
    public const INDEX_OPERATOR = 'op';
    public const DEFAULT_SESSION_NAME = 'IS-54-16'; // State Agent Smith Reloaded License

    public static function getInstance(): StateAgentInterface;

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
    public function getCookie(string $name) : mixed;

    public function addMessage(mixed $level, string $message, array $context = []): void;
    public function messages(mixed $level = null);
    public function resetMessages(mixed $level = null): void;

    public function addRuntimeFilters(array $filters): void;
    public function hasFilter(string $filter_name): bool;

    public function addFilter(string $filter_name, mixed $value): void;
    public function filters(string $filter_name = null, mixed $value = null): mixed;
    public function resetFilters(string $filter_name = null): void;

    public function operatorId(mixed $setter = null) : mixed;
    public function operatorCheckinDate() : mixed;

    public function destroy(): bool;
}
