<?php

declare(strict_types=1);

namespace Klax\Http\Protocol\Exception;

interface HttpExceptionInterface
{
    public function getHeaders(): array;
}
