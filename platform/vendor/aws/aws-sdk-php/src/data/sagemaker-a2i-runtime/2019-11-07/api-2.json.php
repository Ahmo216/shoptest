<?php
// This file was auto-generated from sdk-root/src/data/sagemaker-a2i-runtime/2019-11-07/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-11-07', 'endpointPrefix' => 'a2i-runtime.sagemaker', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Augmented AI Runtime', 'serviceId' => 'SageMaker A2I Runtime', 'signatureVersion' => 'v4', 'signingName' => 'sagemaker', 'uid' => 'sagemaker-a2i-runtime-2019-11-07', ], 'operations' => [ 'DeleteHumanLoop' => [ 'name' => 'DeleteHumanLoop', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/human-loops/{HumanLoopName}', ], 'input' => [ 'shape' => 'DeleteHumanLoopRequest', ], 'output' => [ 'shape' => 'DeleteHumanLoopResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeHumanLoop' => [ 'name' => 'DescribeHumanLoop', 'http' => [ 'method' => 'GET', 'requestUri' => '/human-loops/{HumanLoopName}', ], 'input' => [ 'shape' => 'DescribeHumanLoopRequest', ], 'output' => [ 'shape' => 'DescribeHumanLoopResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListHumanLoops' => [ 'name' => 'ListHumanLoops', 'http' => [ 'method' => 'GET', 'requestUri' => '/human-loops', ], 'input' => [ 'shape' => 'ListHumanLoopsRequest', ], 'output' => [ 'shape' => 'ListHumanLoopsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StartHumanLoop' => [ 'name' => 'StartHumanLoop', 'http' => [ 'method' => 'POST', 'requestUri' => '/human-loops', ], 'input' => [ 'shape' => 'StartHumanLoopRequest', ], 'output' => [ 'shape' => 'StartHumanLoopResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], ], ], 'StopHumanLoop' => [ 'name' => 'StopHumanLoop', 'http' => [ 'method' => 'POST', 'requestUri' => '/human-loops/stop', ], 'input' => [ 'shape' => 'StopHumanLoopRequest', ], 'output' => [ 'shape' => 'StopHumanLoopResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'Boolean' => [ 'type' => 'boolean', ], 'ContentClassifier' => [ 'type' => 'string', 'enum' => [ 'FreeOfPersonallyIdentifiableInformation', 'FreeOfAdultContent', ], ], 'ContentClassifiers' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContentClassifier', ], 'max' => 256, ], 'DeleteHumanLoopRequest' => [ 'type' => 'structure', 'required' => [ 'HumanLoopName', ], 'members' => [ 'HumanLoopName' => [ 'shape' => 'HumanLoopName', 'location' => 'uri', 'locationName' => 'HumanLoopName', ], ], ], 'DeleteHumanLoopResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeHumanLoopRequest' => [ 'type' => 'structure', 'required' => [ 'HumanLoopName', ], 'members' => [ 'HumanLoopName' => [ 'shape' => 'HumanLoopName', 'location' => 'uri', 'locationName' => 'HumanLoopName', ], ], ], 'DescribeHumanLoopResponse' => [ 'type' => 'structure', 'required' => [ 'CreationTimestamp', 'HumanLoopStatus', 'HumanLoopName', 'HumanLoopArn', 'FlowDefinitionArn', 'HumanLoopInput', ], 'members' => [ 'CreationTimestamp' => [ 'shape' => 'Timestamp', ], 'FailureReason' => [ 'shape' => 'String', ], 'FailureCode' => [ 'shape' => 'String', ], 'HumanLoopStatus' => [ 'shape' => 'HumanLoopStatus', ], 'HumanLoopName' => [ 'shape' => 'HumanLoopName', ], 'HumanLoopArn' => [ 'shape' => 'HumanLoopArn', ], 'FlowDefinitionArn' => [ 'shape' => 'FlowDefinitionArn', ], 'HumanLoopInput' => [ 'shape' => 'HumanLoopInputContent', ], 'HumanLoopOutput' => [ 'shape' => 'HumanLoopOutputContent', ], ], ], 'FailureReason' => [ 'type' => 'string', 'max' => 1024, ], 'FlowDefinitionArn' => [ 'type' => 'string', 'max' => 1024, 'pattern' => 'arn:aws[a-z\\-]*:sagemaker:[a-z0-9\\-]*:[0-9]{12}:flow-definition/.*', ], 'HumanLoopActivationReason' => [ 'type' => 'structure', 'members' => [ 'ConditionsMatched' => [ 'shape' => 'Boolean', ], ], ], 'HumanLoopActivationResults' => [ 'type' => 'structure', 'members' => [ 'HumanLoopActivationReason' => [ 'shape' => 'HumanLoopActivationReason', ], 'HumanLoopActivationConditionsEvaluationResults' => [ 'shape' => 'String', ], ], ], 'HumanLoopArn' => [ 'type' => 'string', 'max' => 1024, 'pattern' => 'arn:aws[a-z\\-]*:sagemaker:[a-z0-9\\-]*:[0-9]{12}:human-loop/.*', ], 'HumanLoopInputContent' => [ 'type' => 'structure', 'required' => [ 'InputContent', ], 'members' => [ 'InputContent' => [ 'shape' => 'InputContent', ], ], ], 'HumanLoopName' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^[a-z0-9](-*[a-z0-9])*$', ], 'HumanLoopOutputContent' => [ 'type' => 'structure', 'required' => [ 'OutputS3Uri', ], 'members' => [ 'OutputS3Uri' => [ 'shape' => 'String', ], ], ], 'HumanLoopStatus' => [ 'type' => 'string', 'enum' => [ 'InProgress', 'Failed', 'Completed', 'Stopped', 'Stopping', ], ], 'HumanLoopSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'HumanLoopSummary', ], ], 'HumanLoopSummary' => [ 'type' => 'structure', 'members' => [ 'HumanLoopName' => [ 'shape' => 'HumanLoopName', ], 'HumanLoopStatus' => [ 'shape' => 'HumanLoopStatus', ], 'CreationTime' => [ 'shape' => 'Timestamp', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'FlowDefinitionArn' => [ 'shape' => 'FlowDefinitionArn', ], ], ], 'HumanReviewDataAttributes' => [ 'type' => 'structure', 'required' => [ 'ContentClassifiers', ], 'members' => [ 'ContentClassifiers' => [ 'shape' => 'ContentClassifiers', ], ], ], 'InputContent' => [ 'type' => 'string', 'max' => 4194304, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'ListHumanLoopsRequest' => [ 'type' => 'structure', 'members' => [ 'CreationTimeAfter' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'CreationTimeAfter', ], 'CreationTimeBefore' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'CreationTimeBefore', ], 'SortOrder' => [ 'shape' => 'SortOrder', 'location' => 'querystring', 'locationName' => 'SortOrder', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'box' => true, 'location' => 'querystring', 'locationName' => 'MaxResults', ], ], ], 'ListHumanLoopsResponse' => [ 'type' => 'structure', 'required' => [ 'HumanLoopSummaries', ], 'members' => [ 'HumanLoopSummaries' => [ 'shape' => 'HumanLoopSummaries', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'pattern' => '.*', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'SortOrder' => [ 'type' => 'string', 'enum' => [ 'Ascending', 'Descending', ], ], 'StartHumanLoopRequest' => [ 'type' => 'structure', 'required' => [ 'HumanLoopName', 'FlowDefinitionArn', 'HumanLoopInput', ], 'members' => [ 'HumanLoopName' => [ 'shape' => 'HumanLoopName', ], 'FlowDefinitionArn' => [ 'shape' => 'FlowDefinitionArn', ], 'HumanLoopInput' => [ 'shape' => 'HumanLoopInputContent', ], 'DataAttributes' => [ 'shape' => 'HumanReviewDataAttributes', ], ], ], 'StartHumanLoopResponse' => [ 'type' => 'structure', 'members' => [ 'HumanLoopArn' => [ 'shape' => 'HumanLoopArn', ], 'HumanLoopActivationResults' => [ 'shape' => 'HumanLoopActivationResults', ], ], ], 'StopHumanLoopRequest' => [ 'type' => 'structure', 'required' => [ 'HumanLoopName', ], 'members' => [ 'HumanLoopName' => [ 'shape' => 'HumanLoopName', ], ], ], 'StopHumanLoopResponse' => [ 'type' => 'structure', 'members' => [], ], 'String' => [ 'type' => 'string', ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], ],];
