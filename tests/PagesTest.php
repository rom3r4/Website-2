<?php

class PagesTest extends TestCase
{
    /**
     * A basic test that the homepage is working.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * A basic test that the team page is working.
     *
     * @return void
     */
    public function testTeamPage()
    {
        $response = $this->call('GET', 'team');

        $this->assertEquals(200, $response->getStatusCode());
    }
}
