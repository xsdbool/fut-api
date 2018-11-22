<?php

namespace Shapecode\FUT\Exception;

use Psr\Http\Message\ResponseInterface;

/**
 * Class IncorrectCredentialsException
 *
 * @package Shapecode\FUT\Exception
 * @author  Shapecode
 */
class IncorrectCredentialsException extends AuthFailedException
{
    /**
     * @param ResponseInterface $response
     * @param \Exception|null   $previous
     * @param array             $options
     */
    public function __construct(ResponseInterface $response, \Exception $previous = null, $options = [])
    {
        $message = 'Your email or password is incorrect.';
        $reason = 'user_or_pass';

        FutResponseException::__construct($message, $response, $reason, $options, $previous);
    }

}
