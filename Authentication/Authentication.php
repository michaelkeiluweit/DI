<?php declare(strict_types=1);


namespace MichaelKeiluweit\ProjectName\Application\Authentication;

final class Authentication
{
    private ApiBridge $apiBridge;

    public function __construct(ApiBridge $apiBridge)
    {
        $this->apiBridge = $apiBridge;
    }

    public function authenticate(string $username, string $key): bool
    {
        $apiBridge = $this->apiBridge;
        if ($apiBridge->authenticate($username, $key)) {
            return true;
        }
        return false;
    }
}
