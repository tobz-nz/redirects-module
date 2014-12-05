<?php namespace Anomaly\Streams\Addon\Module\Redirects\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

class RedirectsStreamInstaller extends StreamInstaller
{

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'type' => ['is_required' => true],
        'from' => ['is_required' => true, 'is_unique' => true],
        'to'   => ['is_required' => true],
    ];
}
 