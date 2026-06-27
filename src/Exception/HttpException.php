<?php

declare(strict_types=1);

namespace Klax\Http\Protocol\Exception;

use Exception;
use Klax\Http\Protocol\StatusCode;

class HttpException extends Exception implements HttpExceptionInterface
{
    /**
     * @throws Exception
     */
    public function __construct(
        string $message = '',
        int $code = StatusCode::INTERNAL_SERVER_ERROR,
        protected array $headers = [],
        ?\Throwable $previous = null,
    ) {
        if ((StatusCode::ALL[$code] ?? null) === null) {
            throw new Exception(sprintf('Invalid HTTP status code [%d]', $code));
        }

        parent::__construct(
            $message ?: (StatusCode::TEXT[$code] ?? ''),
            $code,
            $previous,
        );
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}
