<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

namespace Aws\Greengrass;

use Aws\AwsClient;
/**
 * This client is used to interact with the **AWS Greengrass** service.
 * @method \Aws\Result associateRoleToGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateRoleToGroupAsync(array $args = [])
 * @method \Aws\Result associateServiceRoleToAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateServiceRoleToAccountAsync(array $args = [])
 * @method \Aws\Result createCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCoreDefinitionAsync(array $args = [])
 * @method \Aws\Result createCoreDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCoreDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws\Result createDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceDefinitionAsync(array $args = [])
 * @method \Aws\Result createDeviceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeviceDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result createFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionDefinitionAsync(array $args = [])
 * @method \Aws\Result createFunctionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFunctionDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \Aws\Result createGroupCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupCertificateAuthorityAsync(array $args = [])
 * @method \Aws\Result createGroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupVersionAsync(array $args = [])
 * @method \Aws\Result createLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggerDefinitionAsync(array $args = [])
 * @method \Aws\Result createLoggerDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoggerDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result createResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDefinitionAsync(array $args = [])
 * @method \Aws\Result createResourceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result createSoftwareUpdateJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSoftwareUpdateJobAsync(array $args = [])
 * @method \Aws\Result createSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionDefinitionAsync(array $args = [])
 * @method \Aws\Result createSubscriptionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubscriptionDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result deleteCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCoreDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDeviceDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFunctionDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \Aws\Result deleteLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoggerDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubscriptionDefinitionAsync(array $args = [])
 * @method \Aws\Result disassociateRoleFromGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRoleFromGroupAsync(array $args = [])
 * @method \Aws\Result disassociateServiceRoleFromAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateServiceRoleFromAccountAsync(array $args = [])
 * @method \Aws\Result getAssociatedRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociatedRoleAsync(array $args = [])
 * @method \Aws\Result getConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectivityInfoAsync(array $args = [])
 * @method \Aws\Result getCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDefinitionAsync(array $args = [])
 * @method \Aws\Result getCoreDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCoreDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result getDeploymentStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeploymentStatusAsync(array $args = [])
 * @method \Aws\Result getDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDefinitionAsync(array $args = [])
 * @method \Aws\Result getDeviceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeviceDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result getFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionDefinitionAsync(array $args = [])
 * @method \Aws\Result getFunctionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFunctionDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result getGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupAsync(array $args = [])
 * @method \Aws\Result getGroupCertificateAuthority(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupCertificateAuthorityAsync(array $args = [])
 * @method \Aws\Result getGroupCertificateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupCertificateConfigurationAsync(array $args = [])
 * @method \Aws\Result getGroupVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGroupVersionAsync(array $args = [])
 * @method \Aws\Result getLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggerDefinitionAsync(array $args = [])
 * @method \Aws\Result getLoggerDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoggerDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result getResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceDefinitionAsync(array $args = [])
 * @method \Aws\Result getResourceDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result getServiceRoleForAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceRoleForAccountAsync(array $args = [])
 * @method \Aws\Result getSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionDefinitionAsync(array $args = [])
 * @method \Aws\Result getSubscriptionDefinitionVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSubscriptionDefinitionVersionAsync(array $args = [])
 * @method \Aws\Result listCoreDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDefinitionVersionsAsync(array $args = [])
 * @method \Aws\Result listCoreDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCoreDefinitionsAsync(array $args = [])
 * @method \Aws\Result listDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentsAsync(array $args = [])
 * @method \Aws\Result listDeviceDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceDefinitionVersionsAsync(array $args = [])
 * @method \Aws\Result listDeviceDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeviceDefinitionsAsync(array $args = [])
 * @method \Aws\Result listFunctionDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionDefinitionVersionsAsync(array $args = [])
 * @method \Aws\Result listFunctionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFunctionDefinitionsAsync(array $args = [])
 * @method \Aws\Result listGroupCertificateAuthorities(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupCertificateAuthoritiesAsync(array $args = [])
 * @method \Aws\Result listGroupVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupVersionsAsync(array $args = [])
 * @method \Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \Aws\Result listLoggerDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggerDefinitionVersionsAsync(array $args = [])
 * @method \Aws\Result listLoggerDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLoggerDefinitionsAsync(array $args = [])
 * @method \Aws\Result listResourceDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDefinitionVersionsAsync(array $args = [])
 * @method \Aws\Result listResourceDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDefinitionsAsync(array $args = [])
 * @method \Aws\Result listSubscriptionDefinitionVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionDefinitionVersionsAsync(array $args = [])
 * @method \Aws\Result listSubscriptionDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubscriptionDefinitionsAsync(array $args = [])
 * @method \Aws\Result resetDeployments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetDeploymentsAsync(array $args = [])
 * @method \Aws\Result updateConnectivityInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectivityInfoAsync(array $args = [])
 * @method \Aws\Result updateCoreDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCoreDefinitionAsync(array $args = [])
 * @method \Aws\Result updateDeviceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDeviceDefinitionAsync(array $args = [])
 * @method \Aws\Result updateFunctionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFunctionDefinitionAsync(array $args = [])
 * @method \Aws\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \Aws\Result updateGroupCertificateConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupCertificateConfigurationAsync(array $args = [])
 * @method \Aws\Result updateLoggerDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoggerDefinitionAsync(array $args = [])
 * @method \Aws\Result updateResourceDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceDefinitionAsync(array $args = [])
 * @method \Aws\Result updateSubscriptionDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSubscriptionDefinitionAsync(array $args = [])
 */
class GreengrassClient extends AwsClient
{
}

?>