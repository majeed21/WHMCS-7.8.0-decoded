<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

namespace Aws\Swf;

use Aws\AwsClient;
/**
 * Amazon Simple Workflow Service (Amazon SWF) client.
 *
 * @method \Aws\Result countClosedWorkflowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise countClosedWorkflowExecutionsAsync(array $args = [])
 * @method \Aws\Result countOpenWorkflowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise countOpenWorkflowExecutionsAsync(array $args = [])
 * @method \Aws\Result countPendingActivityTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise countPendingActivityTasksAsync(array $args = [])
 * @method \Aws\Result countPendingDecisionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise countPendingDecisionTasksAsync(array $args = [])
 * @method \Aws\Result deprecateActivityType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deprecateActivityTypeAsync(array $args = [])
 * @method \Aws\Result deprecateDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deprecateDomainAsync(array $args = [])
 * @method \Aws\Result deprecateWorkflowType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deprecateWorkflowTypeAsync(array $args = [])
 * @method \Aws\Result describeActivityType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivityTypeAsync(array $args = [])
 * @method \Aws\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \Aws\Result describeWorkflowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkflowExecutionAsync(array $args = [])
 * @method \Aws\Result describeWorkflowType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkflowTypeAsync(array $args = [])
 * @method \Aws\Result getWorkflowExecutionHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowExecutionHistoryAsync(array $args = [])
 * @method \Aws\Result listActivityTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listActivityTypesAsync(array $args = [])
 * @method \Aws\Result listClosedWorkflowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listClosedWorkflowExecutionsAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result listOpenWorkflowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOpenWorkflowExecutionsAsync(array $args = [])
 * @method \Aws\Result listWorkflowTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowTypesAsync(array $args = [])
 * @method \Aws\Result pollForActivityTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForActivityTaskAsync(array $args = [])
 * @method \Aws\Result pollForDecisionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise pollForDecisionTaskAsync(array $args = [])
 * @method \Aws\Result recordActivityTaskHeartbeat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise recordActivityTaskHeartbeatAsync(array $args = [])
 * @method \Aws\Result registerActivityType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerActivityTypeAsync(array $args = [])
 * @method \Aws\Result registerDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDomainAsync(array $args = [])
 * @method \Aws\Result registerWorkflowType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerWorkflowTypeAsync(array $args = [])
 * @method \Aws\Result requestCancelWorkflowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestCancelWorkflowExecutionAsync(array $args = [])
 * @method \Aws\Result respondActivityTaskCanceled(array $args = [])
 * @method \GuzzleHttp\Promise\Promise respondActivityTaskCanceledAsync(array $args = [])
 * @method \Aws\Result respondActivityTaskCompleted(array $args = [])
 * @method \GuzzleHttp\Promise\Promise respondActivityTaskCompletedAsync(array $args = [])
 * @method \Aws\Result respondActivityTaskFailed(array $args = [])
 * @method \GuzzleHttp\Promise\Promise respondActivityTaskFailedAsync(array $args = [])
 * @method \Aws\Result respondDecisionTaskCompleted(array $args = [])
 * @method \GuzzleHttp\Promise\Promise respondDecisionTaskCompletedAsync(array $args = [])
 * @method \Aws\Result signalWorkflowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise signalWorkflowExecutionAsync(array $args = [])
 * @method \Aws\Result startWorkflowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkflowExecutionAsync(array $args = [])
 * @method \Aws\Result terminateWorkflowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateWorkflowExecutionAsync(array $args = [])
 */
class SwfClient extends AwsClient
{
}

?>