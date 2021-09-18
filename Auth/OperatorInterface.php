<?php

namespace HexMakina\BlackBox\Auth;

interface OperatorInterface 
{
    public function getId();

    public function isActive(): bool;
    public function isNew(): bool;

    public function username();
    public function password();

    public function passwordChange($string);
    public function passwordVerify($string): bool;

    public function languageCode();
    public function email();
    public function phone();
    public function name();

    public function hasPermission($p): bool;

    public static function safeLoading($op_id): OperatorInterface;
}
