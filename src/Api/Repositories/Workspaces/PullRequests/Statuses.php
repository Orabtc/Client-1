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

namespace Bitbucket\Api\Repositories\Workspaces\PullRequests;

use Bitbucket\HttpClient\Util\UriBuilder;

/**
 * The statuses API class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class Statuses extends AbstractPullRequestsApi
{
    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function list(array $params = [])
    {
        $uri = $this->buildStatusesUri();

        return $this->get($uri, $params);
    }

    /**
     * Build the statuses URI from the given parts.
     *
     * @param string ...$parts
     *
     * @return string
     */
    protected function buildStatusesUri(string ...$parts)
    {
        return UriBuilder::build('repositories', $this->workspace, $this->repo, 'pullrequests', $this->pr, 'statuses', ...$parts);
    }
}
