<?php
namespace Plista\Orp\Sdk\Example;
use Plista\Orp\Sdk\Handle;

class ExampleUniversityPushStatisticHandler implements Handle /* extends \Plista\Orp\Algorithm\Base\PushStatistic */ {

	public function handle($body) {
		/**
		 * @var ExampleUniversityModel $model
		 */

		$model = new ExampleUniversityModel();
		// writing body informations to file
		$data[] = $body['context']['simple']['6'];
		$data[] = $body['context']['simple']['19'];
		/*
		 *
		 * if all data are supposed to get saved in file, change
		 *  write_statistic($data);
		 * 	to
		 * write_statistic($body);
		 */
		$model->write_statistic($data);
	}

	public function validate($body) {
		// checking if body contains a notification type
		// additionally one is able to differentiate between a click, impression, engagement and cpo
		// for futher details may have a look at the controller gateway for notification types
		if (empty($body['notification_type'])) {
			throw new Exception('Error: empty notification type');
		} else {
			return true;
		}
	}
}