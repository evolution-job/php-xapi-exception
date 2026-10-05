<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Common\Exception;

use Exception;

/**
 * Experience API exceptions.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class XApiException extends Exception
{
    public function __construct(string $message, int $code = 400, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
