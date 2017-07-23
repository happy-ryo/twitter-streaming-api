<?php
/**
 * Created by PhpStorm.
 * User: happy_ryo
 * Date: 2017/07/24
 * Time: 0:49
 */

namespace Spatie\TwitterStreamingApi;


use Phirehose;

class SampleStream extends BaseStream
{
    public function __construct(
        string $accessToken,
        string $accessSecret,
        string $consumerKey,
        string $consumerSecret
    )
    {
        $this->stream = $this->createStream(
            $accessToken,
            $accessSecret,
            $consumerKey,
            $consumerSecret,
            Phirehose::METHOD_SAMPLE
        );
    }

    /**
     * @param callable $activity
     * @return $this
     */
    public function streamActivity(callable $activity)
    {
        $this->stream->performOnStreamActivity($activity);
        return $this;
    }
}