<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

// This file was auto-generated from sdk-root/src/data/appsync/2017-07-25/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2017-07-25', 'endpointPrefix' => 'appsync', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'AWSAppSync', 'serviceFullName' => 'AWS AppSync', 'signatureVersion' => 'v4', 'signingName' => 'appsync', 'uid' => 'appsync-2017-07-25'], 'operations' => ['CreateApiKey' => ['name' => 'CreateApiKey', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/apikeys'], 'input' => ['shape' => 'CreateApiKeyRequest'], 'output' => ['shape' => 'CreateApiKeyResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'LimitExceededException'], ['shape' => 'UnauthorizedException'], ['shape' => 'LimitExceededException'], ['shape' => 'InternalFailureException'], ['shape' => 'ApiKeyLimitExceededException'], ['shape' => 'ApiKeyValidityOutOfBoundsException']]], 'CreateDataSource' => ['name' => 'CreateDataSource', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/datasources'], 'input' => ['shape' => 'CreateDataSourceRequest'], 'output' => ['shape' => 'CreateDataSourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'CreateGraphqlApi' => ['name' => 'CreateGraphqlApi', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis'], 'input' => ['shape' => 'CreateGraphqlApiRequest'], 'output' => ['shape' => 'CreateGraphqlApiResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'LimitExceededException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException'], ['shape' => 'ApiLimitExceededException']]], 'CreateResolver' => ['name' => 'CreateResolver', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers'], 'input' => ['shape' => 'CreateResolverRequest'], 'output' => ['shape' => 'CreateResolverResponse'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'CreateType' => ['name' => 'CreateType', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/types'], 'input' => ['shape' => 'CreateTypeRequest'], 'output' => ['shape' => 'CreateTypeResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'DeleteApiKey' => ['name' => 'DeleteApiKey', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}/apikeys/{id}'], 'input' => ['shape' => 'DeleteApiKeyRequest'], 'output' => ['shape' => 'DeleteApiKeyResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'DeleteDataSource' => ['name' => 'DeleteDataSource', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}/datasources/{name}'], 'input' => ['shape' => 'DeleteDataSourceRequest'], 'output' => ['shape' => 'DeleteDataSourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'DeleteGraphqlApi' => ['name' => 'DeleteGraphqlApi', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}'], 'input' => ['shape' => 'DeleteGraphqlApiRequest'], 'output' => ['shape' => 'DeleteGraphqlApiResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'DeleteResolver' => ['name' => 'DeleteResolver', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers/{fieldName}'], 'input' => ['shape' => 'DeleteResolverRequest'], 'output' => ['shape' => 'DeleteResolverResponse'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'DeleteType' => ['name' => 'DeleteType', 'http' => ['method' => 'DELETE', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}'], 'input' => ['shape' => 'DeleteTypeRequest'], 'output' => ['shape' => 'DeleteTypeResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'GetDataSource' => ['name' => 'GetDataSource', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/datasources/{name}'], 'input' => ['shape' => 'GetDataSourceRequest'], 'output' => ['shape' => 'GetDataSourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'GetGraphqlApi' => ['name' => 'GetGraphqlApi', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}'], 'input' => ['shape' => 'GetGraphqlApiRequest'], 'output' => ['shape' => 'GetGraphqlApiResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'GetIntrospectionSchema' => ['name' => 'GetIntrospectionSchema', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/schema'], 'input' => ['shape' => 'GetIntrospectionSchemaRequest'], 'output' => ['shape' => 'GetIntrospectionSchemaResponse'], 'errors' => [['shape' => 'GraphQLSchemaException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'GetResolver' => ['name' => 'GetResolver', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers/{fieldName}'], 'input' => ['shape' => 'GetResolverRequest'], 'output' => ['shape' => 'GetResolverResponse'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException']]], 'GetSchemaCreationStatus' => ['name' => 'GetSchemaCreationStatus', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/schemacreation'], 'input' => ['shape' => 'GetSchemaCreationStatusRequest'], 'output' => ['shape' => 'GetSchemaCreationStatusResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'GetType' => ['name' => 'GetType', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}'], 'input' => ['shape' => 'GetTypeRequest'], 'output' => ['shape' => 'GetTypeResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'ListApiKeys' => ['name' => 'ListApiKeys', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/apikeys'], 'input' => ['shape' => 'ListApiKeysRequest'], 'output' => ['shape' => 'ListApiKeysResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'ListDataSources' => ['name' => 'ListDataSources', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/datasources'], 'input' => ['shape' => 'ListDataSourcesRequest'], 'output' => ['shape' => 'ListDataSourcesResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'ListGraphqlApis' => ['name' => 'ListGraphqlApis', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis'], 'input' => ['shape' => 'ListGraphqlApisRequest'], 'output' => ['shape' => 'ListGraphqlApisResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'ListResolvers' => ['name' => 'ListResolvers', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers'], 'input' => ['shape' => 'ListResolversRequest'], 'output' => ['shape' => 'ListResolversResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'ListTypes' => ['name' => 'ListTypes', 'http' => ['method' => 'GET', 'requestUri' => '/v1/apis/{apiId}/types'], 'input' => ['shape' => 'ListTypesRequest'], 'output' => ['shape' => 'ListTypesResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'StartSchemaCreation' => ['name' => 'StartSchemaCreation', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/schemacreation'], 'input' => ['shape' => 'StartSchemaCreationRequest'], 'output' => ['shape' => 'StartSchemaCreationResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'UpdateApiKey' => ['name' => 'UpdateApiKey', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/apikeys/{id}'], 'input' => ['shape' => 'UpdateApiKeyRequest'], 'output' => ['shape' => 'UpdateApiKeyResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'LimitExceededException'], ['shape' => 'InternalFailureException'], ['shape' => 'ApiKeyValidityOutOfBoundsException']]], 'UpdateDataSource' => ['name' => 'UpdateDataSource', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/datasources/{name}'], 'input' => ['shape' => 'UpdateDataSourceRequest'], 'output' => ['shape' => 'UpdateDataSourceResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'UpdateGraphqlApi' => ['name' => 'UpdateGraphqlApi', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}'], 'input' => ['shape' => 'UpdateGraphqlApiRequest'], 'output' => ['shape' => 'UpdateGraphqlApiResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'UpdateResolver' => ['name' => 'UpdateResolver', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}/resolvers/{fieldName}'], 'input' => ['shape' => 'UpdateResolverRequest'], 'output' => ['shape' => 'UpdateResolverResponse'], 'errors' => [['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]], 'UpdateType' => ['name' => 'UpdateType', 'http' => ['method' => 'POST', 'requestUri' => '/v1/apis/{apiId}/types/{typeName}'], 'input' => ['shape' => 'UpdateTypeRequest'], 'output' => ['shape' => 'UpdateTypeResponse'], 'errors' => [['shape' => 'BadRequestException'], ['shape' => 'ConcurrentModificationException'], ['shape' => 'NotFoundException'], ['shape' => 'UnauthorizedException'], ['shape' => 'InternalFailureException']]]], 'shapes' => ['ApiKey' => ['type' => 'structure', 'members' => ['id' => ['shape' => 'String'], 'description' => ['shape' => 'String'], 'expires' => ['shape' => 'Long']]], 'ApiKeyLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => true], 'ApiKeyValidityOutOfBoundsException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => true], 'ApiKeys' => ['type' => 'list', 'member' => ['shape' => 'ApiKey']], 'ApiLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 400], 'exception' => true], 'AuthenticationType' => ['type' => 'string', 'enum' => ['API_KEY', 'AWS_IAM', 'AMAZON_COGNITO_USER_POOLS', 'OPENID_CONNECT']], 'BadRequestException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 400], 'exception' => true], 'Blob' => ['type' => 'blob'], 'Boolean' => ['type' => 'boolean'], 'ConcurrentModificationException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 409], 'exception' => true], 'CreateApiKeyRequest' => ['type' => 'structure', 'required' => ['apiId'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'description' => ['shape' => 'String'], 'expires' => ['shape' => 'Long']]], 'CreateApiKeyResponse' => ['type' => 'structure', 'members' => ['apiKey' => ['shape' => 'ApiKey']]], 'CreateDataSourceRequest' => ['type' => 'structure', 'required' => ['apiId', 'name', 'type'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'name' => ['shape' => 'ResourceName'], 'description' => ['shape' => 'String'], 'type' => ['shape' => 'DataSourceType'], 'serviceRoleArn' => ['shape' => 'String'], 'dynamodbConfig' => ['shape' => 'DynamodbDataSourceConfig'], 'lambdaConfig' => ['shape' => 'LambdaDataSourceConfig'], 'elasticsearchConfig' => ['shape' => 'ElasticsearchDataSourceConfig'], 'httpConfig' => ['shape' => 'HttpDataSourceConfig']]], 'CreateDataSourceResponse' => ['type' => 'structure', 'members' => ['dataSource' => ['shape' => 'DataSource']]], 'CreateGraphqlApiRequest' => ['type' => 'structure', 'required' => ['name', 'authenticationType'], 'members' => ['name' => ['shape' => 'String'], 'logConfig' => ['shape' => 'LogConfig'], 'authenticationType' => ['shape' => 'AuthenticationType'], 'userPoolConfig' => ['shape' => 'UserPoolConfig'], 'openIDConnectConfig' => ['shape' => 'OpenIDConnectConfig']]], 'CreateGraphqlApiResponse' => ['type' => 'structure', 'members' => ['graphqlApi' => ['shape' => 'GraphqlApi']]], 'CreateResolverRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName', 'fieldName', 'dataSourceName', 'requestMappingTemplate'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName'], 'fieldName' => ['shape' => 'ResourceName'], 'dataSourceName' => ['shape' => 'ResourceName'], 'requestMappingTemplate' => ['shape' => 'MappingTemplate'], 'responseMappingTemplate' => ['shape' => 'MappingTemplate']]], 'CreateResolverResponse' => ['type' => 'structure', 'members' => ['resolver' => ['shape' => 'Resolver']]], 'CreateTypeRequest' => ['type' => 'structure', 'required' => ['apiId', 'definition', 'format'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'definition' => ['shape' => 'String'], 'format' => ['shape' => 'TypeDefinitionFormat']]], 'CreateTypeResponse' => ['type' => 'structure', 'members' => ['type' => ['shape' => 'Type']]], 'DataSource' => ['type' => 'structure', 'members' => ['dataSourceArn' => ['shape' => 'String'], 'name' => ['shape' => 'ResourceName'], 'description' => ['shape' => 'String'], 'type' => ['shape' => 'DataSourceType'], 'serviceRoleArn' => ['shape' => 'String'], 'dynamodbConfig' => ['shape' => 'DynamodbDataSourceConfig'], 'lambdaConfig' => ['shape' => 'LambdaDataSourceConfig'], 'elasticsearchConfig' => ['shape' => 'ElasticsearchDataSourceConfig'], 'httpConfig' => ['shape' => 'HttpDataSourceConfig']]], 'DataSourceType' => ['type' => 'string', 'enum' => ['AWS_LAMBDA', 'AMAZON_DYNAMODB', 'AMAZON_ELASTICSEARCH', 'NONE', 'HTTP']], 'DataSources' => ['type' => 'list', 'member' => ['shape' => 'DataSource']], 'DefaultAction' => ['type' => 'string', 'enum' => ['ALLOW', 'DENY']], 'DeleteApiKeyRequest' => ['type' => 'structure', 'required' => ['apiId', 'id'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'id' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'id']]], 'DeleteApiKeyResponse' => ['type' => 'structure', 'members' => []], 'DeleteDataSourceRequest' => ['type' => 'structure', 'required' => ['apiId', 'name'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'name' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'name']]], 'DeleteDataSourceResponse' => ['type' => 'structure', 'members' => []], 'DeleteGraphqlApiRequest' => ['type' => 'structure', 'required' => ['apiId'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId']]], 'DeleteGraphqlApiResponse' => ['type' => 'structure', 'members' => []], 'DeleteResolverRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName', 'fieldName'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName'], 'fieldName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'fieldName']]], 'DeleteResolverResponse' => ['type' => 'structure', 'members' => []], 'DeleteTypeRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName']]], 'DeleteTypeResponse' => ['type' => 'structure', 'members' => []], 'DynamodbDataSourceConfig' => ['type' => 'structure', 'required' => ['tableName', 'awsRegion'], 'members' => ['tableName' => ['shape' => 'String'], 'awsRegion' => ['shape' => 'String'], 'useCallerCredentials' => ['shape' => 'Boolean']]], 'ElasticsearchDataSourceConfig' => ['type' => 'structure', 'required' => ['endpoint', 'awsRegion'], 'members' => ['endpoint' => ['shape' => 'String'], 'awsRegion' => ['shape' => 'String']]], 'ErrorMessage' => ['type' => 'string'], 'FieldLogLevel' => ['type' => 'string', 'enum' => ['NONE', 'ERROR', 'ALL']], 'GetDataSourceRequest' => ['type' => 'structure', 'required' => ['apiId', 'name'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'name' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'name']]], 'GetDataSourceResponse' => ['type' => 'structure', 'members' => ['dataSource' => ['shape' => 'DataSource']]], 'GetGraphqlApiRequest' => ['type' => 'structure', 'required' => ['apiId'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId']]], 'GetGraphqlApiResponse' => ['type' => 'structure', 'members' => ['graphqlApi' => ['shape' => 'GraphqlApi']]], 'GetIntrospectionSchemaRequest' => ['type' => 'structure', 'required' => ['apiId', 'format'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'format' => ['shape' => 'OutputType', 'location' => 'querystring', 'locationName' => 'format']]], 'GetIntrospectionSchemaResponse' => ['type' => 'structure', 'members' => ['schema' => ['shape' => 'Blob']], 'payload' => 'schema'], 'GetResolverRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName', 'fieldName'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName'], 'fieldName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'fieldName']]], 'GetResolverResponse' => ['type' => 'structure', 'members' => ['resolver' => ['shape' => 'Resolver']]], 'GetSchemaCreationStatusRequest' => ['type' => 'structure', 'required' => ['apiId'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId']]], 'GetSchemaCreationStatusResponse' => ['type' => 'structure', 'members' => ['status' => ['shape' => 'SchemaStatus'], 'details' => ['shape' => 'String']]], 'GetTypeRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName', 'format'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName'], 'format' => ['shape' => 'TypeDefinitionFormat', 'location' => 'querystring', 'locationName' => 'format']]], 'GetTypeResponse' => ['type' => 'structure', 'members' => ['type' => ['shape' => 'Type']]], 'GraphQLSchemaException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'error' => ['httpStatusCode' => 400], 'exception' => true], 'GraphqlApi' => ['type' => 'structure', 'members' => ['name' => ['shape' => 'ResourceName'], 'apiId' => ['shape' => 'String'], 'authenticationType' => ['shape' => 'AuthenticationType'], 'logConfig' => ['shape' => 'LogConfig'], 'userPoolConfig' => ['shape' => 'UserPoolConfig'], 'openIDConnectConfig' => ['shape' => 'OpenIDConnectConfig'], 'arn' => ['shape' => 'String'], 'uris' => ['shape' => 'MapOfStringToString']]], 'GraphqlApis' => ['type' => 'list', 'member' => ['shape' => 'GraphqlApi']], 'HttpDataSourceConfig' => ['type' => 'structure', 'members' => ['endpoint' => ['shape' => 'String']]], 'InternalFailureException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 500], 'exception' => true, 'fault' => true], 'LambdaDataSourceConfig' => ['type' => 'structure', 'required' => ['lambdaFunctionArn'], 'members' => ['lambdaFunctionArn' => ['shape' => 'String']]], 'LimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 429], 'exception' => true], 'ListApiKeysRequest' => ['type' => 'structure', 'required' => ['apiId'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'nextToken' => ['shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken'], 'maxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults']]], 'ListApiKeysResponse' => ['type' => 'structure', 'members' => ['apiKeys' => ['shape' => 'ApiKeys'], 'nextToken' => ['shape' => 'PaginationToken']]], 'ListDataSourcesRequest' => ['type' => 'structure', 'required' => ['apiId'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'nextToken' => ['shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken'], 'maxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults']]], 'ListDataSourcesResponse' => ['type' => 'structure', 'members' => ['dataSources' => ['shape' => 'DataSources'], 'nextToken' => ['shape' => 'PaginationToken']]], 'ListGraphqlApisRequest' => ['type' => 'structure', 'members' => ['nextToken' => ['shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken'], 'maxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults']]], 'ListGraphqlApisResponse' => ['type' => 'structure', 'members' => ['graphqlApis' => ['shape' => 'GraphqlApis'], 'nextToken' => ['shape' => 'PaginationToken']]], 'ListResolversRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'typeName'], 'nextToken' => ['shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken'], 'maxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults']]], 'ListResolversResponse' => ['type' => 'structure', 'members' => ['resolvers' => ['shape' => 'Resolvers'], 'nextToken' => ['shape' => 'PaginationToken']]], 'ListTypesRequest' => ['type' => 'structure', 'required' => ['apiId', 'format'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'format' => ['shape' => 'TypeDefinitionFormat', 'location' => 'querystring', 'locationName' => 'format'], 'nextToken' => ['shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken'], 'maxResults' => ['shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults']]], 'ListTypesResponse' => ['type' => 'structure', 'members' => ['types' => ['shape' => 'TypeList'], 'nextToken' => ['shape' => 'PaginationToken']]], 'LogConfig' => ['type' => 'structure', 'required' => ['fieldLogLevel', 'cloudWatchLogsRoleArn'], 'members' => ['fieldLogLevel' => ['shape' => 'FieldLogLevel'], 'cloudWatchLogsRoleArn' => ['shape' => 'String']]], 'Long' => ['type' => 'long'], 'MapOfStringToString' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'String']], 'MappingTemplate' => ['type' => 'string', 'max' => 65536, 'min' => 1], 'MaxResults' => ['type' => 'integer', 'max' => 25, 'min' => 0], 'NotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 404], 'exception' => true], 'OpenIDConnectConfig' => ['type' => 'structure', 'required' => ['issuer'], 'members' => ['issuer' => ['shape' => 'String'], 'clientId' => ['shape' => 'String'], 'iatTTL' => ['shape' => 'Long'], 'authTTL' => ['shape' => 'Long']]], 'OutputType' => ['type' => 'string', 'enum' => ['SDL', 'JSON']], 'PaginationToken' => ['type' => 'string', 'pattern' => '[\\\\S]+'], 'Resolver' => ['type' => 'structure', 'members' => ['typeName' => ['shape' => 'ResourceName'], 'fieldName' => ['shape' => 'ResourceName'], 'dataSourceName' => ['shape' => 'ResourceName'], 'resolverArn' => ['shape' => 'String'], 'requestMappingTemplate' => ['shape' => 'MappingTemplate'], 'responseMappingTemplate' => ['shape' => 'MappingTemplate']]], 'Resolvers' => ['type' => 'list', 'member' => ['shape' => 'Resolver']], 'ResourceName' => ['type' => 'string', 'pattern' => '[_A-Za-z][_0-9A-Za-z]*'], 'SchemaStatus' => ['type' => 'string', 'enum' => ['PROCESSING', 'ACTIVE', 'DELETING']], 'StartSchemaCreationRequest' => ['type' => 'structure', 'required' => ['apiId', 'definition'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'definition' => ['shape' => 'Blob']]], 'StartSchemaCreationResponse' => ['type' => 'structure', 'members' => ['status' => ['shape' => 'SchemaStatus']]], 'String' => ['type' => 'string'], 'Type' => ['type' => 'structure', 'members' => ['name' => ['shape' => 'ResourceName'], 'description' => ['shape' => 'String'], 'arn' => ['shape' => 'String'], 'definition' => ['shape' => 'String'], 'format' => ['shape' => 'TypeDefinitionFormat']]], 'TypeDefinitionFormat' => ['type' => 'string', 'enum' => ['SDL', 'JSON']], 'TypeList' => ['type' => 'list', 'member' => ['shape' => 'Type']], 'UnauthorizedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'String']], 'error' => ['httpStatusCode' => 401], 'exception' => true], 'UpdateApiKeyRequest' => ['type' => 'structure', 'required' => ['apiId', 'id'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'id' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'id'], 'description' => ['shape' => 'String'], 'expires' => ['shape' => 'Long']]], 'UpdateApiKeyResponse' => ['type' => 'structure', 'members' => ['apiKey' => ['shape' => 'ApiKey']]], 'UpdateDataSourceRequest' => ['type' => 'structure', 'required' => ['apiId', 'name', 'type'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'name' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'name'], 'description' => ['shape' => 'String'], 'type' => ['shape' => 'DataSourceType'], 'serviceRoleArn' => ['shape' => 'String'], 'dynamodbConfig' => ['shape' => 'DynamodbDataSourceConfig'], 'lambdaConfig' => ['shape' => 'LambdaDataSourceConfig'], 'elasticsearchConfig' => ['shape' => 'ElasticsearchDataSourceConfig'], 'httpConfig' => ['shape' => 'HttpDataSourceConfig']]], 'UpdateDataSourceResponse' => ['type' => 'structure', 'members' => ['dataSource' => ['shape' => 'DataSource']]], 'UpdateGraphqlApiRequest' => ['type' => 'structure', 'required' => ['apiId', 'name'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'name' => ['shape' => 'String'], 'logConfig' => ['shape' => 'LogConfig'], 'authenticationType' => ['shape' => 'AuthenticationType'], 'userPoolConfig' => ['shape' => 'UserPoolConfig'], 'openIDConnectConfig' => ['shape' => 'OpenIDConnectConfig']]], 'UpdateGraphqlApiResponse' => ['type' => 'structure', 'members' => ['graphqlApi' => ['shape' => 'GraphqlApi']]], 'UpdateResolverRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName', 'fieldName', 'dataSourceName', 'requestMappingTemplate'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName'], 'fieldName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'fieldName'], 'dataSourceName' => ['shape' => 'ResourceName'], 'requestMappingTemplate' => ['shape' => 'MappingTemplate'], 'responseMappingTemplate' => ['shape' => 'MappingTemplate']]], 'UpdateResolverResponse' => ['type' => 'structure', 'members' => ['resolver' => ['shape' => 'Resolver']]], 'UpdateTypeRequest' => ['type' => 'structure', 'required' => ['apiId', 'typeName', 'format'], 'members' => ['apiId' => ['shape' => 'String', 'location' => 'uri', 'locationName' => 'apiId'], 'typeName' => ['shape' => 'ResourceName', 'location' => 'uri', 'locationName' => 'typeName'], 'definition' => ['shape' => 'String'], 'format' => ['shape' => 'TypeDefinitionFormat']]], 'UpdateTypeResponse' => ['type' => 'structure', 'members' => ['type' => ['shape' => 'Type']]], 'UserPoolConfig' => ['type' => 'structure', 'required' => ['userPoolId', 'awsRegion', 'defaultAction'], 'members' => ['userPoolId' => ['shape' => 'String'], 'awsRegion' => ['shape' => 'String'], 'defaultAction' => ['shape' => 'DefaultAction'], 'appIdClientRegex' => ['shape' => 'String']]]]];

?>