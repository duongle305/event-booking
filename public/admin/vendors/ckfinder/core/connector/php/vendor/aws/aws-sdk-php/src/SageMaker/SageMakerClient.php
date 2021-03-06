<?php
namespace Aws\SageMaker;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon SageMaker Service** service.
 * @method Result addTags(array $args = [])
 * @method Promise addTagsAsync(array $args = [])
 * @method Result createEndpoint(array $args = [])
 * @method Promise createEndpointAsync(array $args = [])
 * @method Result createEndpointConfig(array $args = [])
 * @method Promise createEndpointConfigAsync(array $args = [])
 * @method Result createHyperParameterTuningJob(array $args = [])
 * @method Promise createHyperParameterTuningJobAsync(array $args = [])
 * @method Result createModel(array $args = [])
 * @method Promise createModelAsync(array $args = [])
 * @method Result createNotebookInstance(array $args = [])
 * @method Promise createNotebookInstanceAsync(array $args = [])
 * @method Result createNotebookInstanceLifecycleConfig(array $args = [])
 * @method Promise createNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method Result createPresignedNotebookInstanceUrl(array $args = [])
 * @method Promise createPresignedNotebookInstanceUrlAsync(array $args = [])
 * @method Result createTrainingJob(array $args = [])
 * @method Promise createTrainingJobAsync(array $args = [])
 * @method Result createTransformJob(array $args = [])
 * @method Promise createTransformJobAsync(array $args = [])
 * @method Result deleteEndpoint(array $args = [])
 * @method Promise deleteEndpointAsync(array $args = [])
 * @method Result deleteEndpointConfig(array $args = [])
 * @method Promise deleteEndpointConfigAsync(array $args = [])
 * @method Result deleteModel(array $args = [])
 * @method Promise deleteModelAsync(array $args = [])
 * @method Result deleteNotebookInstance(array $args = [])
 * @method Promise deleteNotebookInstanceAsync(array $args = [])
 * @method Result deleteNotebookInstanceLifecycleConfig(array $args = [])
 * @method Promise deleteNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method Result deleteTags(array $args = [])
 * @method Promise deleteTagsAsync(array $args = [])
 * @method Result describeEndpoint(array $args = [])
 * @method Promise describeEndpointAsync(array $args = [])
 * @method Result describeEndpointConfig(array $args = [])
 * @method Promise describeEndpointConfigAsync(array $args = [])
 * @method Result describeHyperParameterTuningJob(array $args = [])
 * @method Promise describeHyperParameterTuningJobAsync(array $args = [])
 * @method Result describeModel(array $args = [])
 * @method Promise describeModelAsync(array $args = [])
 * @method Result describeNotebookInstance(array $args = [])
 * @method Promise describeNotebookInstanceAsync(array $args = [])
 * @method Result describeNotebookInstanceLifecycleConfig(array $args = [])
 * @method Promise describeNotebookInstanceLifecycleConfigAsync(array $args = [])
 * @method Result describeTrainingJob(array $args = [])
 * @method Promise describeTrainingJobAsync(array $args = [])
 * @method Result describeTransformJob(array $args = [])
 * @method Promise describeTransformJobAsync(array $args = [])
 * @method Result listEndpointConfigs(array $args = [])
 * @method Promise listEndpointConfigsAsync(array $args = [])
 * @method Result listEndpoints(array $args = [])
 * @method Promise listEndpointsAsync(array $args = [])
 * @method Result listHyperParameterTuningJobs(array $args = [])
 * @method Promise listHyperParameterTuningJobsAsync(array $args = [])
 * @method Result listModels(array $args = [])
 * @method Promise listModelsAsync(array $args = [])
 * @method Result listNotebookInstanceLifecycleConfigs(array $args = [])
 * @method Promise listNotebookInstanceLifecycleConfigsAsync(array $args = [])
 * @method Result listNotebookInstances(array $args = [])
 * @method Promise listNotebookInstancesAsync(array $args = [])
 * @method Result listTags(array $args = [])
 * @method Promise listTagsAsync(array $args = [])
 * @method Result listTrainingJobs(array $args = [])
 * @method Promise listTrainingJobsAsync(array $args = [])
 * @method Result listTrainingJobsForHyperParameterTuningJob(array $args = [])
 * @method Promise listTrainingJobsForHyperParameterTuningJobAsync(array $args = [])
 * @method Result listTransformJobs(array $args = [])
 * @method Promise listTransformJobsAsync(array $args = [])
 * @method Result startNotebookInstance(array $args = [])
 * @method Promise startNotebookInstanceAsync(array $args = [])
 * @method Result stopHyperParameterTuningJob(array $args = [])
 * @method Promise stopHyperParameterTuningJobAsync(array $args = [])
 * @method Result stopNotebookInstance(array $args = [])
 * @method Promise stopNotebookInstanceAsync(array $args = [])
 * @method Result stopTrainingJob(array $args = [])
 * @method Promise stopTrainingJobAsync(array $args = [])
 * @method Result stopTransformJob(array $args = [])
 * @method Promise stopTransformJobAsync(array $args = [])
 * @method Result updateEndpoint(array $args = [])
 * @method Promise updateEndpointAsync(array $args = [])
 * @method Result updateEndpointWeightsAndCapacities(array $args = [])
 * @method Promise updateEndpointWeightsAndCapacitiesAsync(array $args = [])
 * @method Result updateNotebookInstance(array $args = [])
 * @method Promise updateNotebookInstanceAsync(array $args = [])
 * @method Result updateNotebookInstanceLifecycleConfig(array $args = [])
 * @method Promise updateNotebookInstanceLifecycleConfigAsync(array $args = [])
 */
class SageMakerClient extends AwsClient {}
