<?php

namespace App\Jobs\Utils;

use App\Traits\BulkOptions;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessBulk implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, BulkOptions;
    /**
     * Repository for target resource.
     */
    protected $repo;
    /**
     * Method aka 'action' to process.
     *
     * @var string
     */
    protected $method;
    /**
     * Chunks of data to process.
     *
     * @var array
     */
    private $data;

    /**
     * Create a new job instance.
     *
     * @param array $data
     * @param $repo
     * @param string $method
     */
    public function __construct(array $data, $repo, string $method)
    {
        $this->repo = $repo;
        $this->method = $method;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->data as $resource) {
            $this->repo->{$this->method}($resource);
        }
    }
}
