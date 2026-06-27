<?php

declare(strict_types=1);

namespace Klax\Http\Protocol\Exception;

use Klax\Http\Protocol\StatusCode;
use Throwable;

final class NotFoundException extends HttpException
{
    public function __construct(
        string $message = '',
        array $headers = [],
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, StatusCode::NOT_FOUND, $headers, $previous);
    }
}
