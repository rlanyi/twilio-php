<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Conversations\V1\Conversation;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ParticipantTest extends HolodeckTestCase {
    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                            ->participants->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'get',
            'https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants'
        )));
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=50&Page=0",
                    "key": "participants",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=50&Page=0"
                },
                "participants": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "address": "torkel2@ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.endpoint.twilio.com",
                        "conversation_sid": "CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2015-05-13T23:03:12Z",
                        "duration": 685,
                        "end_time": "2015-05-13T23:14:40Z",
                        "sid": "PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "start_time": "2015-05-13T23:03:15Z",
                        "status": "disconnected",
                        "url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));
        
        $actual = $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                                  ->participants->read();
        
        $this->assertTrue(count($actual) > 0);
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "first_page_url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=50&Page=0",
                    "key": "participants",
                    "next_page_url": null,
                    "page": 0,
                    "page_size": 50,
                    "previous_page_url": null,
                    "url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants?PageSize=50&Page=0"
                },
                "participants": []
            }
            '
        ));
        
        $actual = $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                                  ->participants->read();
        
        $this->assertNotNull($actual);
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                            ->participants->create("+123456789", "+987654321");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $values = array(
            'To' => "+123456789",
            'From' => "+987654321",
        );
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'post',
            'https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants',
            null,
            $values
        )));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "address": "torkel2@ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.endpoint.twilio.com",
                "conversation_sid": "CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-05-13T23:03:12Z",
                "duration": 685,
                "end_time": "2015-05-13T23:14:40Z",
                "sid": "PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "start_time": "2015-05-13T23:03:15Z",
                "status": "disconnected",
                "url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));
        
        $actual = $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                                  ->participants->create("+123456789", "+987654321");
        
        $this->assertNotNull($actual);
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));
        
        try {
            $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                            ->participants("PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}
        
        $this->assertTrue($this->holodeck->hasRequest(new Request(
            'get',
            'https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        )));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "address": "torkel2@ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.endpoint.twilio.com",
                "conversation_sid": "CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-05-13T23:03:12Z",
                "duration": 685,
                "end_time": "2015-05-13T23:14:40Z",
                "sid": "PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "start_time": "2015-05-13T23:03:15Z",
                "status": "disconnected",
                "url": "https://conversations.twilio.com/v1/Conversations/CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));
        
        $actual = $this->twilio->conversations->v1->conversations("CVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                                  ->participants("PAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        
        $this->assertNotNull($actual);
    }
}