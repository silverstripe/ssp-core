<?php

// SilverStripe Platform logging
if (defined('AWS_SYSLOG_LEVEL')) {
    $sysLogWriter = new SS_SysLogWriter('SilverStripe_log', LOG_PID);
    SS_Log::add_writer($sysLogWriter, (int) AWS_SYSLOG_LEVEL, '<=');
}