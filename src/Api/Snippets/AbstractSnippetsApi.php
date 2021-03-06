<?php

declare(strict_types=1);

/*
 * This file is part of Bitbucket API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bitbucket\Api\Snippets;

use Bitbucket\Api\AbstractApi;
use Bitbucket\Client;

/**
 * The abstract snippets API class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
abstract class AbstractSnippetsApi extends AbstractApi
{
    /**
     * The workspace.
     *
     * @var string
     */
    protected $workspace;

    /**
     * Create a new API instance.
     *
     * @param Client   $client
     * @param string   $workspace
     * @param int|null $perPage
     *
     * @return void
     */
    public function __construct(Client $client, string $workspace, int $perPage = null)
    {
        parent::__construct($client, $perPage);
        $this->workspace = $workspace;
    }
}
