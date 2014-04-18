<?php

namespace spec\Betfair\Country;

use Betfair\Adapter\AdapterInterface;
use Betfair\Client\BetfairClientInterface;
use Betfair\Client\BetfairJsonRpcClientInterface;
use Betfair\CredentialInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountrySpec extends ObjectBehavior
{
    function let(
        BetfairClientInterface $client,
        AdapterInterface $adapterInterface
    )
    {

        $this->beConstructedWith($client, $adapterInterface);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Betfair\Country\Country');
    }
}