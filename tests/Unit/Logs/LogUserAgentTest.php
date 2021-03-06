<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

use Okta\Logs\LogUserAgent;
use PHPUnit\Framework\TestCase;

class LogUserAgentTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Logs\LogUserAgent */
    protected $testable;

    protected $model = '/Logs/userAgent.json';
    protected $modelType = \Okta\Logs\LogUserAgent::class;

    /** @test */
    public function os_is_accessible()
    {
        $this->assertEquals($this->properties->os, $this->testable->getOs());
        $this->assertEquals($this->properties->os, $this->testable->os);
    }

    /** @test */
    public function browser_is_accessible()
    {
        $this->assertEquals($this->properties->browser, $this->testable->getBrowser());
        $this->assertEquals($this->properties->browser, $this->testable->browser);
    }

    /** @test */
    public function raw_user_agent_is_accessible()
    {
        $this->assertEquals($this->properties->rawUserAgent, $this->testable->getRawUserAgent());
        $this->assertEquals($this->properties->rawUserAgent, $this->testable->rawUserAgent);
    }

}
