<?php
/*
 * Copyright 2017, Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\Tests\Language\V1;

use Google\Cloud\Language\V1\LanguageServiceClient;
use Google\GAX\GrpcCredentialsHelper;
use PHPUnit_Framework_TestCase;
use google\cloud\language\v1\AnalyzeEntitiesResponse;
use google\cloud\language\v1\AnalyzeSentimentResponse;
use google\cloud\language\v1\AnalyzeSyntaxResponse;
use google\cloud\language\v1\AnnotateTextRequest\Features;
use google\cloud\language\v1\AnnotateTextResponse;
use google\cloud\language\v1\Document;
use google\cloud\language\v1\EncodingType;
use google\protobuf\Any;

/**
 * @group language
 * @group grpc
 */
class LanguageServiceClientTest extends PHPUnit_Framework_TestCase
{
    public function createMockLanguageServiceImpl($hostname, $opts)
    {
        return new MockLanguageServiceImpl($hostname, $opts);
    }

    private function createStub($createGrpcStub)
    {
        $grpcCredentialsHelper = new GrpcCredentialsHelper([]);

        return $grpcCredentialsHelper->createStub(
            $createGrpcStub,
            LanguageServiceClient::SERVICE_ADDRESS,
            LanguageServiceClient::DEFAULT_SERVICE_PORT
        );
    }

    /**
     * @return LanguageServiceClient
     */
    private function createClient($createStubFuncName, $grpcStub, $options = [])
    {
        return new LanguageServiceClient($options + [
            $createStubFuncName => function ($hostname, $opts) use ($grpcStub) {
                return $grpcStub;
            },
        ]);
    }
    /**
     * @test
     */
    public function analyzeSentimentTest()
    {
        $grpcStub = $this->createStub([$this, 'createMockLanguageServiceImpl']);
        $client = $this->createClient('createLanguageServiceStubFunction', $grpcStub);

        $this->assertTrue($grpcStub->isExhausted());

        // Mock response
        $language = 'language-1613589672';
        $expectedResponse = new AnalyzeSentimentResponse();
        $expectedResponse->setLanguage($language);
        $grpcStub->addResponse($expectedResponse);

        // Mock request
        $document = new Document();

        $response = $client->analyzeSentiment($document);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $grpcStub->getReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.language.v1.LanguageService/AnalyzeSentiment', $actualFuncCall);

        $this->assertEquals($document, $actualRequestObject->getDocument());

        $this->assertTrue($grpcStub->isExhausted());
    }

    /**
     * @test
     */
    public function analyzeEntitiesTest()
    {
        $grpcStub = $this->createStub([$this, 'createMockLanguageServiceImpl']);
        $client = $this->createClient('createLanguageServiceStubFunction', $grpcStub);

        $this->assertTrue($grpcStub->isExhausted());

        // Mock response
        $language = 'language-1613589672';
        $expectedResponse = new AnalyzeEntitiesResponse();
        $expectedResponse->setLanguage($language);
        $grpcStub->addResponse($expectedResponse);

        // Mock request
        $document = new Document();
        $encodingType = EncodingType::NONE;

        $response = $client->analyzeEntities($document, $encodingType);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $grpcStub->getReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.language.v1.LanguageService/AnalyzeEntities', $actualFuncCall);

        $this->assertEquals($document, $actualRequestObject->getDocument());
        $this->assertEquals($encodingType, $actualRequestObject->getEncodingType());

        $this->assertTrue($grpcStub->isExhausted());
    }

    /**
     * @test
     */
    public function analyzeSyntaxTest()
    {
        $grpcStub = $this->createStub([$this, 'createMockLanguageServiceImpl']);
        $client = $this->createClient('createLanguageServiceStubFunction', $grpcStub);

        $this->assertTrue($grpcStub->isExhausted());

        // Mock response
        $language = 'language-1613589672';
        $expectedResponse = new AnalyzeSyntaxResponse();
        $expectedResponse->setLanguage($language);
        $grpcStub->addResponse($expectedResponse);

        // Mock request
        $document = new Document();
        $encodingType = EncodingType::NONE;

        $response = $client->analyzeSyntax($document, $encodingType);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $grpcStub->getReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.language.v1.LanguageService/AnalyzeSyntax', $actualFuncCall);

        $this->assertEquals($document, $actualRequestObject->getDocument());
        $this->assertEquals($encodingType, $actualRequestObject->getEncodingType());

        $this->assertTrue($grpcStub->isExhausted());
    }

    /**
     * @test
     */
    public function annotateTextTest()
    {
        $grpcStub = $this->createStub([$this, 'createMockLanguageServiceImpl']);
        $client = $this->createClient('createLanguageServiceStubFunction', $grpcStub);

        $this->assertTrue($grpcStub->isExhausted());

        // Mock response
        $language = 'language-1613589672';
        $expectedResponse = new AnnotateTextResponse();
        $expectedResponse->setLanguage($language);
        $grpcStub->addResponse($expectedResponse);

        // Mock request
        $document = new Document();
        $features = new Features();
        $encodingType = EncodingType::NONE;

        $response = $client->annotateText($document, $features, $encodingType);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $grpcStub->getReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.language.v1.LanguageService/AnnotateText', $actualFuncCall);

        $this->assertEquals($document, $actualRequestObject->getDocument());
        $this->assertEquals($features, $actualRequestObject->getFeatures());
        $this->assertEquals($encodingType, $actualRequestObject->getEncodingType());

        $this->assertTrue($grpcStub->isExhausted());
    }
}
