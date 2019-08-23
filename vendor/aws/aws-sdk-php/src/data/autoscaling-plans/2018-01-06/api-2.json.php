<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

// This file was auto-generated from sdk-root/src/data/autoscaling-plans/2018-01-06/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2018-01-06', 'endpointPrefix' => 'autoscaling', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Auto Scaling Plans', 'serviceId' => 'Auto Scaling Plans', 'signatureVersion' => 'v4', 'signingName' => 'autoscaling-plans', 'targetPrefix' => 'AnyScaleScalingPlannerFrontendService', 'uid' => 'autoscaling-plans-2018-01-06'], 'operations' => ['CreateScalingPlan' => ['name' => 'CreateScalingPlan', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateScalingPlanRequest'], 'output' => ['shape' => 'CreateScalingPlanResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'LimitExceededException'], ['shape' => 'ConcurrentUpdateException'], ['shape' => 'InternalServiceException']]], 'DeleteScalingPlan' => ['name' => 'DeleteScalingPlan', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteScalingPlanRequest'], 'output' => ['shape' => 'DeleteScalingPlanResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ObjectNotFoundException'], ['shape' => 'ConcurrentUpdateException'], ['shape' => 'InternalServiceException']]], 'DescribeScalingPlanResources' => ['name' => 'DescribeScalingPlanResources', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeScalingPlanResourcesRequest'], 'output' => ['shape' => 'DescribeScalingPlanResourcesResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'ConcurrentUpdateException'], ['shape' => 'InternalServiceException']]], 'DescribeScalingPlans' => ['name' => 'DescribeScalingPlans', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeScalingPlansRequest'], 'output' => ['shape' => 'DescribeScalingPlansResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'InvalidNextTokenException'], ['shape' => 'ConcurrentUpdateException'], ['shape' => 'InternalServiceException']]], 'UpdateScalingPlan' => ['name' => 'UpdateScalingPlan', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateScalingPlanRequest'], 'output' => ['shape' => 'UpdateScalingPlanResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConcurrentUpdateException'], ['shape' => 'InternalServiceException'], ['shape' => 'ObjectNotFoundException']]]], 'shapes' => ['ApplicationSource' => ['type' => 'structure', 'members' => ['CloudFormationStackARN' => ['shape' => 'XmlString'], 'TagFilters' => ['shape' => 'TagFilters']]], 'ApplicationSources' => ['type' => 'list', 'member' => ['shape' => 'ApplicationSource']], 'ConcurrentUpdateException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'Cooldown' => ['type' => 'integer'], 'CreateScalingPlanRequest' => ['type' => 'structure', 'required' => ['ScalingPlanName', 'ApplicationSource', 'ScalingInstructions'], 'members' => ['ScalingPlanName' => ['shape' => 'ScalingPlanName'], 'ApplicationSource' => ['shape' => 'ApplicationSource'], 'ScalingInstructions' => ['shape' => 'ScalingInstructions']]], 'CreateScalingPlanResponse' => ['type' => 'structure', 'required' => ['ScalingPlanVersion'], 'members' => ['ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion']]], 'CustomizedScalingMetricSpecification' => ['type' => 'structure', 'required' => ['MetricName', 'Namespace', 'Statistic'], 'members' => ['MetricName' => ['shape' => 'MetricName'], 'Namespace' => ['shape' => 'MetricNamespace'], 'Dimensions' => ['shape' => 'MetricDimensions'], 'Statistic' => ['shape' => 'MetricStatistic'], 'Unit' => ['shape' => 'MetricUnit']]], 'DeleteScalingPlanRequest' => ['type' => 'structure', 'required' => ['ScalingPlanName', 'ScalingPlanVersion'], 'members' => ['ScalingPlanName' => ['shape' => 'ScalingPlanName'], 'ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion']]], 'DeleteScalingPlanResponse' => ['type' => 'structure', 'members' => []], 'DescribeScalingPlanResourcesRequest' => ['type' => 'structure', 'required' => ['ScalingPlanName', 'ScalingPlanVersion'], 'members' => ['ScalingPlanName' => ['shape' => 'ScalingPlanName'], 'ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'DescribeScalingPlanResourcesResponse' => ['type' => 'structure', 'members' => ['ScalingPlanResources' => ['shape' => 'ScalingPlanResources'], 'NextToken' => ['shape' => 'NextToken']]], 'DescribeScalingPlansRequest' => ['type' => 'structure', 'members' => ['ScalingPlanNames' => ['shape' => 'ScalingPlanNames'], 'ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion'], 'ApplicationSources' => ['shape' => 'ApplicationSources'], 'MaxResults' => ['shape' => 'MaxResults'], 'NextToken' => ['shape' => 'NextToken']]], 'DescribeScalingPlansResponse' => ['type' => 'structure', 'members' => ['ScalingPlans' => ['shape' => 'ScalingPlans'], 'NextToken' => ['shape' => 'NextToken']]], 'DisableScaleIn' => ['type' => 'boolean'], 'ErrorMessage' => ['type' => 'string'], 'InternalServiceException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'InvalidNextTokenException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'LimitExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'MaxResults' => ['type' => 'integer'], 'MetricDimension' => ['type' => 'structure', 'required' => ['Name', 'Value'], 'members' => ['Name' => ['shape' => 'MetricDimensionName'], 'Value' => ['shape' => 'MetricDimensionValue']]], 'MetricDimensionName' => ['type' => 'string'], 'MetricDimensionValue' => ['type' => 'string'], 'MetricDimensions' => ['type' => 'list', 'member' => ['shape' => 'MetricDimension']], 'MetricName' => ['type' => 'string'], 'MetricNamespace' => ['type' => 'string'], 'MetricScale' => ['type' => 'double'], 'MetricStatistic' => ['type' => 'string', 'enum' => ['Average', 'Minimum', 'Maximum', 'SampleCount', 'Sum']], 'MetricUnit' => ['type' => 'string'], 'NextToken' => ['type' => 'string'], 'ObjectNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'PolicyName' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '\\p{Print}+'], 'PolicyType' => ['type' => 'string', 'enum' => ['TargetTrackingScaling']], 'PredefinedScalingMetricSpecification' => ['type' => 'structure', 'required' => ['PredefinedScalingMetricType'], 'members' => ['PredefinedScalingMetricType' => ['shape' => 'ScalingMetricType'], 'ResourceLabel' => ['shape' => 'ResourceLabel']]], 'ResourceCapacity' => ['type' => 'integer'], 'ResourceIdMaxLen1600' => ['type' => 'string', 'max' => 1600, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*'], 'ResourceLabel' => ['type' => 'string', 'max' => 1023, 'min' => 1], 'ScalableDimension' => ['type' => 'string', 'enum' => ['autoscaling:autoScalingGroup:DesiredCapacity', 'ecs:service:DesiredCount', 'ec2:spot-fleet-request:TargetCapacity', 'rds:cluster:ReadReplicaCount', 'dynamodb:table:ReadCapacityUnits', 'dynamodb:table:WriteCapacityUnits', 'dynamodb:index:ReadCapacityUnits', 'dynamodb:index:WriteCapacityUnits']], 'ScalingInstruction' => ['type' => 'structure', 'required' => ['ServiceNamespace', 'ResourceId', 'ScalableDimension', 'MinCapacity', 'MaxCapacity', 'TargetTrackingConfigurations'], 'members' => ['ServiceNamespace' => ['shape' => 'ServiceNamespace'], 'ResourceId' => ['shape' => 'ResourceIdMaxLen1600'], 'ScalableDimension' => ['shape' => 'ScalableDimension'], 'MinCapacity' => ['shape' => 'ResourceCapacity'], 'MaxCapacity' => ['shape' => 'ResourceCapacity'], 'TargetTrackingConfigurations' => ['shape' => 'TargetTrackingConfigurations']]], 'ScalingInstructions' => ['type' => 'list', 'member' => ['shape' => 'ScalingInstruction']], 'ScalingMetricType' => ['type' => 'string', 'enum' => ['ASGAverageCPUUtilization', 'ASGAverageNetworkIn', 'ASGAverageNetworkOut', 'DynamoDBReadCapacityUtilization', 'DynamoDBWriteCapacityUtilization', 'ECSServiceAverageCPUUtilization', 'ECSServiceAverageMemoryUtilization', 'ALBRequestCountPerTarget', 'RDSReaderAverageCPUUtilization', 'RDSReaderAverageDatabaseConnections', 'EC2SpotFleetRequestAverageCPUUtilization', 'EC2SpotFleetRequestAverageNetworkIn', 'EC2SpotFleetRequestAverageNetworkOut']], 'ScalingPlan' => ['type' => 'structure', 'required' => ['ScalingPlanName', 'ScalingPlanVersion', 'ApplicationSource', 'ScalingInstructions', 'StatusCode'], 'members' => ['ScalingPlanName' => ['shape' => 'ScalingPlanName'], 'ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion'], 'ApplicationSource' => ['shape' => 'ApplicationSource'], 'ScalingInstructions' => ['shape' => 'ScalingInstructions'], 'StatusCode' => ['shape' => 'ScalingPlanStatusCode'], 'StatusMessage' => ['shape' => 'XmlString'], 'StatusStartTime' => ['shape' => 'TimestampType'], 'CreationTime' => ['shape' => 'TimestampType']]], 'ScalingPlanName' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\p{Print}&&[^|:/]]+'], 'ScalingPlanNames' => ['type' => 'list', 'member' => ['shape' => 'ScalingPlanName']], 'ScalingPlanResource' => ['type' => 'structure', 'required' => ['ScalingPlanName', 'ScalingPlanVersion', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'ScalingStatusCode'], 'members' => ['ScalingPlanName' => ['shape' => 'ScalingPlanName'], 'ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion'], 'ServiceNamespace' => ['shape' => 'ServiceNamespace'], 'ResourceId' => ['shape' => 'ResourceIdMaxLen1600'], 'ScalableDimension' => ['shape' => 'ScalableDimension'], 'ScalingPolicies' => ['shape' => 'ScalingPolicies'], 'ScalingStatusCode' => ['shape' => 'ScalingStatusCode'], 'ScalingStatusMessage' => ['shape' => 'XmlString']]], 'ScalingPlanResources' => ['type' => 'list', 'member' => ['shape' => 'ScalingPlanResource']], 'ScalingPlanStatusCode' => ['type' => 'string', 'enum' => ['Active', 'ActiveWithProblems', 'CreationInProgress', 'CreationFailed', 'DeletionInProgress', 'DeletionFailed', 'UpdateInProgress', 'UpdateFailed']], 'ScalingPlanVersion' => ['type' => 'long'], 'ScalingPlans' => ['type' => 'list', 'member' => ['shape' => 'ScalingPlan']], 'ScalingPolicies' => ['type' => 'list', 'member' => ['shape' => 'ScalingPolicy']], 'ScalingPolicy' => ['type' => 'structure', 'required' => ['PolicyName', 'PolicyType'], 'members' => ['PolicyName' => ['shape' => 'PolicyName'], 'PolicyType' => ['shape' => 'PolicyType'], 'TargetTrackingConfiguration' => ['shape' => 'TargetTrackingConfiguration']]], 'ScalingStatusCode' => ['type' => 'string', 'enum' => ['Inactive', 'PartiallyActive', 'Active']], 'ServiceNamespace' => ['type' => 'string', 'enum' => ['autoscaling', 'ecs', 'ec2', 'rds', 'dynamodb']], 'TagFilter' => ['type' => 'structure', 'members' => ['Key' => ['shape' => 'XmlStringMaxLen128'], 'Values' => ['shape' => 'TagValues']]], 'TagFilters' => ['type' => 'list', 'member' => ['shape' => 'TagFilter']], 'TagValues' => ['type' => 'list', 'member' => ['shape' => 'XmlStringMaxLen256']], 'TargetTrackingConfiguration' => ['type' => 'structure', 'required' => ['TargetValue'], 'members' => ['PredefinedScalingMetricSpecification' => ['shape' => 'PredefinedScalingMetricSpecification'], 'CustomizedScalingMetricSpecification' => ['shape' => 'CustomizedScalingMetricSpecification'], 'TargetValue' => ['shape' => 'MetricScale'], 'DisableScaleIn' => ['shape' => 'DisableScaleIn'], 'ScaleOutCooldown' => ['shape' => 'Cooldown'], 'ScaleInCooldown' => ['shape' => 'Cooldown'], 'EstimatedInstanceWarmup' => ['shape' => 'Cooldown']]], 'TargetTrackingConfigurations' => ['type' => 'list', 'member' => ['shape' => 'TargetTrackingConfiguration']], 'TimestampType' => ['type' => 'timestamp'], 'UpdateScalingPlanRequest' => ['type' => 'structure', 'required' => ['ScalingPlanName', 'ScalingPlanVersion'], 'members' => ['ApplicationSource' => ['shape' => 'ApplicationSource'], 'ScalingPlanName' => ['shape' => 'ScalingPlanName'], 'ScalingInstructions' => ['shape' => 'ScalingInstructions'], 'ScalingPlanVersion' => ['shape' => 'ScalingPlanVersion']]], 'UpdateScalingPlanResponse' => ['type' => 'structure', 'members' => []], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => true], 'XmlString' => ['type' => 'string', 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*'], 'XmlStringMaxLen128' => ['type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*'], 'XmlStringMaxLen256' => ['type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*']]];

?>