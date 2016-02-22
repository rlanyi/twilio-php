<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V1\Service\Channel;

use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class MemberContext extends InstanceContext {
    /**
     * Initialize the MemberContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The service_sid
     * @param string $channelSid The channel_sid
     * @param string $sid The sid
     * @return MemberContext 
     */
    public function __construct(Version $version, $serviceSid, $channelSid, $sid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'serviceSid' => $serviceSid,
            'channelSid' => $channelSid,
            'sid' => $sid,
        );
        
        $this->uri = '/Services/' . $serviceSid . '/Channels/' . $channelSid . '/Members/' . $sid . '';
    }

    /**
     * Fetch a MemberInstance
     * 
     * @return MemberInstance Fetched MemberInstance
     */
    public function fetch() {
        $params = Values::of(array());
        
        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );
        
        return new MemberInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['channelSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the MemberInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.IpMessaging.V1.MemberContext ' . implode(' ', $context) . ']';
    }
}