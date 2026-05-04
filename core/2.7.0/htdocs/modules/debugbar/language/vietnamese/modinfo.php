<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: vi

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Báo cáo lỗi và phân tích hiệu suất bằng PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Hiển thị DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Bật Debug Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Bật tab tệp đã nạp');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Hiển thị tất cả các tệp PHP được tải trong yêu cầu');
define('_MI_DEBUGBAR_SLOWQUERY', 'Ngưỡng truy vấn chậm (giây)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Các truy vấn chậm hơn mức này được tô sáng bằng màu đỏ (vd. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Ghi nhật ký truy vấn');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Tất cả truy vấn hoặc chỉ truy vấn chậm và lỗi');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Tất cả truy vấn');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Chỉ chậm và lỗi');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Bật tích hợp Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Gửi dữ liệu gỡ lỗi đến ứng dụng Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Trang chủ');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Giới thiệu');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Quay lại quản trị ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Tổng quan');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Tuyên bố từ chối trách nhiệm');
\define('_MI_DEBUGBAR_LICENSE', 'Giấy phép');
\define('_MI_DEBUGBAR_SUPPORT', 'Hỗ trợ');
