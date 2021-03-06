<?php
namespace Aws\MediaConvert;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Elemental MediaConvert** service.
 * @method Result associateCertificate(array $args = [])
 * @method Promise associateCertificateAsync(array $args = [])
 * @method Result cancelJob(array $args = [])
 * @method Promise cancelJobAsync(array $args = [])
 * @method Result createJob(array $args = [])
 * @method Promise createJobAsync(array $args = [])
 * @method Result createJobTemplate(array $args = [])
 * @method Promise createJobTemplateAsync(array $args = [])
 * @method Result createPreset(array $args = [])
 * @method Promise createPresetAsync(array $args = [])
 * @method Result createQueue(array $args = [])
 * @method Promise createQueueAsync(array $args = [])
 * @method Result deleteJobTemplate(array $args = [])
 * @method Promise deleteJobTemplateAsync(array $args = [])
 * @method Result deletePreset(array $args = [])
 * @method Promise deletePresetAsync(array $args = [])
 * @method Result deleteQueue(array $args = [])
 * @method Promise deleteQueueAsync(array $args = [])
 * @method Result describeEndpoints(array $args = [])
 * @method Promise describeEndpointsAsync(array $args = [])
 * @method Result disassociateCertificate(array $args = [])
 * @method Promise disassociateCertificateAsync(array $args = [])
 * @method Result getJob(array $args = [])
 * @method Promise getJobAsync(array $args = [])
 * @method Result getJobTemplate(array $args = [])
 * @method Promise getJobTemplateAsync(array $args = [])
 * @method Result getPreset(array $args = [])
 * @method Promise getPresetAsync(array $args = [])
 * @method Result getQueue(array $args = [])
 * @method Promise getQueueAsync(array $args = [])
 * @method Result listJobTemplates(array $args = [])
 * @method Promise listJobTemplatesAsync(array $args = [])
 * @method Result listJobs(array $args = [])
 * @method Promise listJobsAsync(array $args = [])
 * @method Result listPresets(array $args = [])
 * @method Promise listPresetsAsync(array $args = [])
 * @method Result listQueues(array $args = [])
 * @method Promise listQueuesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateJobTemplate(array $args = [])
 * @method Promise updateJobTemplateAsync(array $args = [])
 * @method Result updatePreset(array $args = [])
 * @method Promise updatePresetAsync(array $args = [])
 * @method Result updateQueue(array $args = [])
 * @method Promise updateQueueAsync(array $args = [])
 */
class MediaConvertClient extends AwsClient {}
