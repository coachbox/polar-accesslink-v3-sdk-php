<?php
/**
 * UsersApi
 * PHP version 5
 *
 * @category Class
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* Polar Accesslink API
 *
* Polar Accesslink API documentation
 *
* OpenAPI spec version: 3.19.0
 * Contact: b2bhelpdesk@polar.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Coachbox\Services\Polar\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Coachbox\Services\Polar\ApiException;
use Coachbox\Services\Polar\Configuration;
use Coachbox\Services\Polar\HeaderSelector;
use Coachbox\Services\Polar\ObjectSerializer;

/**
 * UsersApi Class Doc Comment
 *
 * @category Class
 * @package  Coachbox\Services\Polar
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * Operation deleteUser
*
     * Delete user
*
* @param  int $user_id User identifier (required)
*
     * @throws \Coachbox\Services\Polar\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteUser($user_id)
    {
        $this->deleteUserWithHttpInfo($user_id);
    }

    /**
     * Operation deleteUserWithHttpInfo
*
     * Delete user
*
* @param  int $user_id User identifier (required)
*
     * @throws \Coachbox\Services\Polar\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserWithHttpInfo($user_id)
    {
        $returnType = '';
        $request = $this->deleteUserRequest($user_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
}
            throw $e;
        }
    }

    /**
     * Operation deleteUserAsync
     *
     * Delete user
     *
* @param  int $user_id User identifier (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteUserAsync($user_id)
    {
        return $this->deleteUserAsyncWithHttpInfo($user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUserAsyncWithHttpInfo
     *
     * Delete user
     *
* @param  int $user_id User identifier (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteUserAsyncWithHttpInfo($user_id)
    {
        $returnType = '';
        $request = $this->deleteUserRequest($user_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteUser'
     *
* @param  int $user_id User identifier (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteUserRequest($user_id)
    {
// verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling deleteUser'
            );
        }
if (!preg_match("/[0-9]+/", $user_id)) {
            throw new \InvalidArgumentException("invalid value for \"user_id\" when calling UsersApi.deleteUser, must conform to the pattern /[0-9]+/.");
        }
$resourcePath = '/v3/users/{user-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// path params
if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user-id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
// body params
        $_tempBody = null;
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getUserInformation
*
     * Get user information
*
* @param  int $user_id User identifier (required)
*
     * @throws \Coachbox\Services\Polar\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Coachbox\Services\Polar\Models\User
     */
    public function getUserInformation($user_id)
    {
        list($response) = $this->getUserInformationWithHttpInfo($user_id);
        return $response;
    }

    /**
     * Operation getUserInformationWithHttpInfo
*
     * Get user information
*
* @param  int $user_id User identifier (required)
*
     * @throws \Coachbox\Services\Polar\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Coachbox\Services\Polar\Models\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserInformationWithHttpInfo($user_id)
    {
        $returnType = '\Coachbox\Services\Polar\Models\User';
        $request = $this->getUserInformationRequest($user_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

$responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
case 200:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Coachbox\Services\Polar\Models\User',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
}
            throw $e;
        }
    }

    /**
     * Operation getUserInformationAsync
     *
     * Get user information
     *
* @param  int $user_id User identifier (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserInformationAsync($user_id)
    {
        return $this->getUserInformationAsyncWithHttpInfo($user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUserInformationAsyncWithHttpInfo
     *
     * Get user information
     *
* @param  int $user_id User identifier (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserInformationAsyncWithHttpInfo($user_id)
    {
        $returnType = '\Coachbox\Services\Polar\Models\User';
        $request = $this->getUserInformationRequest($user_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
$responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getUserInformation'
     *
* @param  int $user_id User identifier (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUserInformationRequest($user_id)
    {
// verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getUserInformation'
            );
        }
if (!preg_match("/[0-9]+/", $user_id)) {
            throw new \InvalidArgumentException("invalid value for \"user_id\" when calling UsersApi.getUserInformation, must conform to the pattern /[0-9]+/.");
        }
$resourcePath = '/v3/users/{user-id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// path params
if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'user-id' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }
// body params
        $_tempBody = null;
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registerUser
*
     * Register user
*
* @param  \Coachbox\Services\Polar\Models\Register $body body (required)
*
     * @throws \Coachbox\Services\Polar\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Coachbox\Services\Polar\Models\User
     */
    public function registerUser($body)
    {
        list($response) = $this->registerUserWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation registerUserWithHttpInfo
*
     * Register user
*
* @param  \Coachbox\Services\Polar\Models\Register $body (required)
*
     * @throws \Coachbox\Services\Polar\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Coachbox\Services\Polar\Models\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function registerUserWithHttpInfo($body)
    {
        $returnType = '\Coachbox\Services\Polar\Models\User';
        $request = $this->registerUserRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

$responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            $returnType = '';
            $content = $e->getResponseBody();
            if ($returnType !== '\SplFileObject') {
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }
            switch ($e->getCode()) {
case 200:$data = ObjectSerializer::deserialize(
                        $content,
                        '\Coachbox\Services\Polar\Models\User',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
}
            throw $e;
        }
    }

    /**
     * Operation registerUserAsync
     *
     * Register user
     *
* @param  \Coachbox\Services\Polar\Models\Register $body (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registerUserAsync($body)
    {
        return $this->registerUserAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registerUserAsyncWithHttpInfo
     *
     * Register user
     *
* @param  \Coachbox\Services\Polar\Models\Register $body (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registerUserAsyncWithHttpInfo($body)
    {
        $returnType = '\Coachbox\Services\Polar\Models\User';
        $request = $this->registerUserRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
$responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'registerUser'
     *
* @param  \Coachbox\Services\Polar\Models\Register $body (required)
*
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registerUserRequest($body)
    {
// verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling registerUser'
            );
        }
$resourcePath = '/v3/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

// body params
        $_tempBody = null;
if (isset($body)) {
            $_tempBody = $body;
        }
if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/xml', 'application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }
// this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
$defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

/**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
