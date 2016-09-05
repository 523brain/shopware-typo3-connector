<?php
/**
 * Created by PhpStorm.
 * User: aw
 * Date: 05.09.2016
 * Time: 08:57
 */
namespace Port1Typo3Connector\Service\Notification;


/**
 * Interface NotificationServiceInterface
 *
 * @package Port1Typo3Connector\Service\Notification
 */
interface NotificationServiceInterface
{

    /**
     * sends the notification to the consumer system
     *
     * @param $action
     * @param $type
     * @param $id
     */
    public function notify($action, $type, $id);
}