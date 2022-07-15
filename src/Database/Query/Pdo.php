<?php

declare(strict_types=1);

namespace Annexhack\LaravelClickHouse\Database\Query;

class Pdo
{
	/**
	 * @param mixed $binding
	 *
	 * @return mixed
	 */
	public function quote($binding)
	{
		return $binding;
	}
}
