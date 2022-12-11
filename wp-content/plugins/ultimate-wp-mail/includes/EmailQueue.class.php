<?php
if ( !defined( 'ABSPATH' ) ) exit;

if ( !class_exists( 'ewduwpmEmailQueue' ) ) {
/**
 * Class to queue/process emails that are sent using the wp_mail function
 *
 * @since 1.1.0
 */

require_once( EWD_UWPM_PLUGIN_DIR . '/lib/wp-background-processing/wp-async-request.php' );
require_once( EWD_UWPM_PLUGIN_DIR . '/lib/wp-background-processing/wp-background-process.php' );

class ewduwpmEmailQueue extends EWD_WP_Background_Process  {

    /**
     * @var string
     */
    protected $action = 'email_queue_process';

    /**
     * Task
     *
     * Perform any actions required on each queue item. Return the modified 
     * item for further processing in the next pass through. Or, return false 
     * to remove the item from the queue.
     *
     * @param mixed $item Queue item to iterate over
     *
     * @return mixed
     */
    protected function task( $item ) {

        $item['headers'] = isset( $item['headers'] ) ? $item['headers'] : array();
        $item['attachments'] = isset( $item['attachments'] ) ? $item['attachments'] : array();

        wp_mail( $item['to'], $item['subject'], $item['message'], $item['headers'], $item['attachments'] );

        update_option( 'ewd-uwpm-email-queue-pending', ( get_option( 'ewd-uwpm-email-queue-pending', 1 ) - 1 ) );

        return false;
    }

    /**
     * Complete
     *
     * Override if applicable, but ensure that the below actions are
     * performed, or, call parent::complete().
     */
    protected function complete() {
        parent::complete();

        // Show notice to user or perform some other arbitrary task...
    }

    /**
     * Push to queue
     *
     * @param mixed $data Data.
     *
     * @return $this
     */
    public function push_to_queue( $data ) {
        parent::push_to_queue( $data );

        update_option( 'ewd-uwpm-email-queue-pending', ( get_option( 'ewd-uwpm-email-queue-pending', 0 ) + 1 ) );

        return $this;
    }
}

}