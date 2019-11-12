<?php
/**
 * This file is part of event-engine/php-persistence.
 * (c) 2018-2019 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace EventEngine\Persistence;

interface TransactionalConnection
{
    public function beginTransaction(): void;

    public function commit(): void;

    public function rollBack(): void;
}
