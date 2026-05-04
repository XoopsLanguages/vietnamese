<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: vi

define('_MD_DEBUGBAR_DEBUG', 'Gỡ lỗi');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Tệp đã nạp');
define('_MD_DEBUGBAR_PHP_VERSION', 'Phiên bản PHP');
define('_MD_DEBUGBAR_NONE', 'Không có');
define('_MD_DEBUGBAR_ERRORS', 'Lỗi');
define('_MD_DEBUGBAR_DEPRECATED', 'Đã lỗi thời');
define('_MD_DEBUGBAR_QUERIES', 'Truy vấn');
define('_MD_DEBUGBAR_BLOCKS', 'Khối');
define('_MD_DEBUGBAR_EXTRA', 'Thêm');
define('_MD_DEBUGBAR_TIMERS', 'Bộ đếm thời gian');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s mất %s giây để tải.');
define('_MD_DEBUGBAR_TOTAL', 'Tổng cộng');
define('_MD_DEBUGBAR_NOT_CACHED', 'Chưa cache');
define('_MD_DEBUGBAR_CACHED', 'Đã cache (tái tạo mỗi %s giây)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(chuỗi trống)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool ĐÚNG');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool SAI');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Truy vấn cơ sở dữ liệu');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Sử dụng bộ nhớ');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d truy vấn');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d trùng lặp)');
define('_MD_DEBUGBAR_BYTES', '%s byte');
define('_MD_DEBUGBAR_DB_VERSION', '%s phiên bản');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Số lỗi: %s Thông báo lỗi: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Lỗi #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Ngoại lệ');
define('_MD_DEBUGBAR_RAY_QUERY', 'Truy vấn #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'CHẬM');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Chặn (được lưu trong bộ nhớ đệm %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Chặn (không được lưu vào bộ nhớ đệm)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Kết xuất');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Ngữ cảnh mẫu');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(không có biến mẫu)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Thư mục "mô-đun/thanh gỡ lỗi/%s" chưa được tạo');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Không tạo được thư mục "%s" trong quá trình sao chép nội dung');
