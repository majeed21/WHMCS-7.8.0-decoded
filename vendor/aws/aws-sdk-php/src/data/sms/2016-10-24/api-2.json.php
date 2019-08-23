<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

// This file was auto-generated from sdk-root/src/data/sms/2016-10-24/api-2.json
return ['version' => '2.0', 'metadata' => ['uid' => 'sms-2016-10-24', 'apiVersion' => '2016-10-24', 'endpointPrefix' => 'sms', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'SMS', 'serviceFullName' => 'AWS Server Migration Service', 'signatureVersion' => 'v4', 'targetPrefix' => 'AWSServerMigrationService_V2016_10_24'], 'operations' => ['CreateReplicationJob' => ['name' => 'CreateReplicationJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateReplicationJobRequest'], 'output' => ['shape' => 'CreateReplicationJobResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnauthorizedOperationException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ServerCannotBeReplicatedException'], ['shape' => 'ReplicationJobAlreadyExistsException'], ['shape' => 'NoConnectorsAvailableException'], ['shape' => 'InternalError']]], 'DeleteReplicationJob' => ['name' => 'DeleteReplicationJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteReplicationJobRequest'], 'output' => ['shape' => 'DeleteReplicationJobResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnauthorizedOperationException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ReplicationJobNotFoundException']]], 'DeleteServerCatalog' => ['name' => 'DeleteServerCatalog', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteServerCatalogRequest'], 'output' => ['shape' => 'DeleteServerCatalogResponse'], 'errors' => [['shape' => 'UnauthorizedOperationException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException']]], 'DisassociateConnector' => ['name' => 'DisassociateConnector', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DisassociateConnectorRequest'], 'output' => ['shape' => 'DisassociateConnectorResponse'], 'errors' => [['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnauthorizedOperationException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'InvalidParameterException']]], 'GetConnectors' => ['name' => 'GetConnectors', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetConnectorsRequest'], 'output' => ['shape' => 'GetConnectorsResponse'], 'errors' => [['shape' => 'UnauthorizedOperationException']]], 'GetReplicationJobs' => ['name' => 'GetReplicationJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetReplicationJobsRequest'], 'output' => ['shape' => 'GetReplicationJobsResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnauthorizedOperationException']]], 'GetReplicationRuns' => ['name' => 'GetReplicationRuns', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetReplicationRunsRequest'], 'output' => ['shape' => 'GetReplicationRunsResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnauthorizedOperationException']]], 'GetServers' => ['name' => 'GetServers', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetServersRequest'], 'output' => ['shape' => 'GetServersResponse'], 'errors' => [['shape' => 'UnauthorizedOperationException']]], 'ImportServerCatalog' => ['name' => 'ImportServerCatalog', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ImportServerCatalogRequest'], 'output' => ['shape' => 'ImportServerCatalogResponse'], 'errors' => [['shape' => 'UnauthorizedOperationException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'NoConnectorsAvailableException']]], 'StartOnDemandReplicationRun' => ['name' => 'StartOnDemandReplicationRun', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartOnDemandReplicationRunRequest'], 'output' => ['shape' => 'StartOnDemandReplicationRunResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'UnauthorizedOperationException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'ReplicationRunLimitExceededException']]], 'UpdateReplicationJob' => ['name' => 'UpdateReplicationJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateReplicationJobRequest'], 'output' => ['shape' => 'UpdateReplicationJobResponse'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'MissingRequiredParameterException'], ['shape' => 'OperationNotPermittedException'], ['shape' => 'UnauthorizedOperationException'], ['shape' => 'ServerCannotBeReplicatedException'], ['shape' => 'ReplicationJobNotFoundException'], ['shape' => 'InternalError']]]], 'shapes' => ['AmiId' => ['type' => 'string'], 'Connector' => ['type' => 'structure', 'members' => ['connectorId' => ['shape' => 'ConnectorId'], 'version' => ['shape' => 'ConnectorVersion'], 'status' => ['shape' => 'ConnectorStatus'], 'capabilityList' => ['shape' => 'ConnectorCapabilityList'], 'vmManagerName' => ['shape' => 'VmManagerName'], 'vmManagerType' => ['shape' => 'VmManagerType'], 'vmManagerId' => ['shape' => 'VmManagerId'], 'ipAddress' => ['shape' => 'IpAddress'], 'macAddress' => ['shape' => 'MacAddress'], 'associatedOn' => ['shape' => 'Timestamp']]], 'ConnectorCapability' => ['type' => 'string', 'enum' => ['VSPHERE']], 'ConnectorCapabilityList' => ['type' => 'list', 'member' => ['shape' => 'ConnectorCapability', 'locationName' => 'item']], 'ConnectorId' => ['type' => 'string'], 'ConnectorList' => ['type' => 'list', 'member' => ['shape' => 'Connector', 'locationName' => 'item']], 'ConnectorStatus' => ['type' => 'string', 'enum' => ['HEALTHY', 'UNHEALTHY']], 'ConnectorVersion' => ['type' => 'string'], 'CreateReplicationJobRequest' => ['type' => 'structure', 'required' => ['serverId', 'seedReplicationTime', 'frequency'], 'members' => ['serverId' => ['shape' => 'ServerId'], 'seedReplicationTime' => ['shape' => 'Timestamp'], 'frequency' => ['shape' => 'Frequency'], 'licenseType' => ['shape' => 'LicenseType'], 'roleName' => ['shape' => 'RoleName'], 'description' => ['shape' => 'Description']]], 'CreateReplicationJobResponse' => ['type' => 'structure', 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId']]], 'DeleteReplicationJobRequest' => ['type' => 'structure', 'required' => ['replicationJobId'], 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId']]], 'DeleteReplicationJobResponse' => ['type' => 'structure', 'members' => []], 'DeleteServerCatalogRequest' => ['type' => 'structure', 'members' => []], 'DeleteServerCatalogResponse' => ['type' => 'structure', 'members' => []], 'Description' => ['type' => 'string'], 'DisassociateConnectorRequest' => ['type' => 'structure', 'required' => ['connectorId'], 'members' => ['connectorId' => ['shape' => 'ConnectorId']]], 'DisassociateConnectorResponse' => ['type' => 'structure', 'members' => []], 'ErrorMessage' => ['type' => 'string'], 'Frequency' => ['type' => 'integer'], 'GetConnectorsRequest' => ['type' => 'structure', 'members' => ['nextToken' => ['shape' => 'NextToken'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetConnectorsResponse' => ['type' => 'structure', 'members' => ['connectorList' => ['shape' => 'ConnectorList'], 'nextToken' => ['shape' => 'NextToken']]], 'GetReplicationJobsRequest' => ['type' => 'structure', 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId'], 'nextToken' => ['shape' => 'NextToken'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetReplicationJobsResponse' => ['type' => 'structure', 'members' => ['replicationJobList' => ['shape' => 'ReplicationJobList'], 'nextToken' => ['shape' => 'NextToken']]], 'GetReplicationRunsRequest' => ['type' => 'structure', 'required' => ['replicationJobId'], 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId'], 'nextToken' => ['shape' => 'NextToken'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetReplicationRunsResponse' => ['type' => 'structure', 'members' => ['replicationJob' => ['shape' => 'ReplicationJob'], 'replicationRunList' => ['shape' => 'ReplicationRunList'], 'nextToken' => ['shape' => 'NextToken']]], 'GetServersRequest' => ['type' => 'structure', 'members' => ['nextToken' => ['shape' => 'NextToken'], 'maxResults' => ['shape' => 'MaxResults']]], 'GetServersResponse' => ['type' => 'structure', 'members' => ['lastModifiedOn' => ['shape' => 'Timestamp'], 'serverCatalogStatus' => ['shape' => 'ServerCatalogStatus'], 'serverList' => ['shape' => 'ServerList'], 'nextToken' => ['shape' => 'NextToken']]], 'ImportServerCatalogRequest' => ['type' => 'structure', 'members' => []], 'ImportServerCatalogResponse' => ['type' => 'structure', 'members' => []], 'InternalError' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true, 'fault' => true], 'InvalidParameterException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'IpAddress' => ['type' => 'string'], 'LicenseType' => ['type' => 'string', 'enum' => ['AWS', 'BYOL']], 'MacAddress' => ['type' => 'string'], 'MaxResults' => ['type' => 'integer'], 'MissingRequiredParameterException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'NextToken' => ['type' => 'string'], 'NoConnectorsAvailableException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'OperationNotPermittedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'ReplicationJob' => ['type' => 'structure', 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId'], 'serverId' => ['shape' => 'ServerId'], 'serverType' => ['shape' => 'ServerType'], 'vmServer' => ['shape' => 'VmServer'], 'seedReplicationTime' => ['shape' => 'Timestamp'], 'frequency' => ['shape' => 'Frequency'], 'nextReplicationRunStartTime' => ['shape' => 'Timestamp'], 'licenseType' => ['shape' => 'LicenseType'], 'roleName' => ['shape' => 'RoleName'], 'latestAmiId' => ['shape' => 'AmiId'], 'state' => ['shape' => 'ReplicationJobState'], 'statusMessage' => ['shape' => 'ReplicationJobStatusMessage'], 'description' => ['shape' => 'Description'], 'replicationRunList' => ['shape' => 'ReplicationRunList']]], 'ReplicationJobAlreadyExistsException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'ReplicationJobId' => ['type' => 'string'], 'ReplicationJobList' => ['type' => 'list', 'member' => ['shape' => 'ReplicationJob', 'locationName' => 'item']], 'ReplicationJobNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'ReplicationJobState' => ['type' => 'string', 'enum' => ['PENDING', 'ACTIVE', 'FAILED', 'DELETING', 'DELETED']], 'ReplicationJobStatusMessage' => ['type' => 'string'], 'ReplicationJobTerminated' => ['type' => 'boolean'], 'ReplicationRun' => ['type' => 'structure', 'members' => ['replicationRunId' => ['shape' => 'ReplicationRunId'], 'state' => ['shape' => 'ReplicationRunState'], 'type' => ['shape' => 'ReplicationRunType'], 'statusMessage' => ['shape' => 'ReplicationRunStatusMessage'], 'amiId' => ['shape' => 'AmiId'], 'scheduledStartTime' => ['shape' => 'Timestamp'], 'completedTime' => ['shape' => 'Timestamp'], 'description' => ['shape' => 'Description']]], 'ReplicationRunId' => ['type' => 'string'], 'ReplicationRunLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'ReplicationRunList' => ['type' => 'list', 'member' => ['shape' => 'ReplicationRun', 'locationName' => 'item']], 'ReplicationRunState' => ['type' => 'string', 'enum' => ['PENDING', 'MISSED', 'ACTIVE', 'FAILED', 'COMPLETED', 'DELETING', 'DELETED']], 'ReplicationRunStatusMessage' => ['type' => 'string'], 'ReplicationRunType' => ['type' => 'string', 'enum' => ['ON_DEMAND', 'AUTOMATIC']], 'RoleName' => ['type' => 'string'], 'Server' => ['type' => 'structure', 'members' => ['serverId' => ['shape' => 'ServerId'], 'serverType' => ['shape' => 'ServerType'], 'vmServer' => ['shape' => 'VmServer'], 'replicationJobId' => ['shape' => 'ReplicationJobId'], 'replicationJobTerminated' => ['shape' => 'ReplicationJobTerminated']]], 'ServerCannotBeReplicatedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'ServerCatalogStatus' => ['type' => 'string', 'enum' => ['NOT_IMPORTED', 'IMPORTING', 'AVAILABLE', 'DELETED', 'EXPIRED']], 'ServerId' => ['type' => 'string'], 'ServerList' => ['type' => 'list', 'member' => ['shape' => 'Server', 'locationName' => 'item']], 'ServerType' => ['type' => 'string', 'enum' => ['VIRTUAL_MACHINE']], 'StartOnDemandReplicationRunRequest' => ['type' => 'structure', 'required' => ['replicationJobId'], 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId'], 'description' => ['shape' => 'Description']]], 'StartOnDemandReplicationRunResponse' => ['type' => 'structure', 'members' => ['replicationRunId' => ['shape' => 'ReplicationRunId']]], 'Timestamp' => ['type' => 'timestamp'], 'UnauthorizedOperationException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'UpdateReplicationJobRequest' => ['type' => 'structure', 'required' => ['replicationJobId'], 'members' => ['replicationJobId' => ['shape' => 'ReplicationJobId'], 'frequency' => ['shape' => 'Frequency'], 'nextReplicationRunStartTime' => ['shape' => 'Timestamp'], 'licenseType' => ['shape' => 'LicenseType'], 'roleName' => ['shape' => 'RoleName'], 'description' => ['shape' => 'Description']]], 'UpdateReplicationJobResponse' => ['type' => 'structure', 'members' => []], 'VmId' => ['type' => 'string'], 'VmManagerId' => ['type' => 'string'], 'VmManagerName' => ['type' => 'string'], 'VmManagerType' => ['type' => 'string', 'enum' => ['VSPHERE']], 'VmName' => ['type' => 'string'], 'VmPath' => ['type' => 'string'], 'VmServer' => ['type' => 'structure', 'members' => ['vmServerAddress' => ['shape' => 'VmServerAddress'], 'vmName' => ['shape' => 'VmName'], 'vmManagerName' => ['shape' => 'VmManagerName'], 'vmManagerType' => ['shape' => 'VmManagerType'], 'vmPath' => ['shape' => 'VmPath']]], 'VmServerAddress' => ['type' => 'structure', 'members' => ['vmManagerId' => ['shape' => 'VmManagerId'], 'vmId' => ['shape' => 'VmId']]]]];

?>