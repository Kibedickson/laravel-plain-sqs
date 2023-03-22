<?php

namespace Saaslaravel\PlainSqs\Tests;
use Aws\Sqs\SqsClient;
use Saaslaravel\PlainSqs\Jobs\DispatcherJob;
use Saaslaravel\PlainSqs\Sqs\Queue;

/**
 * Class QueueTest
 * @package Saaslaravel\PlainSqs\Tests
 */
class QueueTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function class_named_is_derived_from_queue_name()
    {

        $content = [
            'test' => 'test'
        ];

        $job = new DispatcherJob($content);

        $queue = $this->getMockBuilder(Queue::class)
            ->disableOriginalConstructor()
            ->getMock();

        $method = new \ReflectionMethod(
            'Saaslaravel\PlainSqs\Sqs\Queue', 'createPayload'
        );

        $method->setAccessible(true);

        //$response = $method->invokeArgs($queue, [$job]);
    }
}
