<?php
// _LANGCODE: vi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Đường dẫn vật lý XOOPS');
define('LEGEND_DATABASE', 'Bộ ký tự cơ sở dữ liệu');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS thư mục thư viện');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS thư mục tệp dữ liệu');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Bộ ký tự và đối chiếu cơ sở dữ liệu');
define('DB_COLLATION_HELP', "Kể từ 4.12 MySQL hỗ trợ bộ ký tự và đối chiếu tùy chỉnh. Tuy nhiên, nó phức tạp hơn dự kiến, vì vậy ĐỪNG thực hiện bất kỳ thay đổi nào trừ khi bạn tự tin với lựa chọn của mình.");
define('DB_COLLATION_NOCHANGE', 'Không thay đổi');

define('XOOPS_PATH_FOUND', 'Tìm thấy đường dẫn.');
define('ERR_COULD_NOT_ACCESS', 'Không thể truy nhập vào thư mục xác định. Xin kiểm tra lại sự tồn tại của nó và phải đọc được bởi máy chủ.');
define('CHECKING_PERMISSIONS', 'Kiểm tra lại những sử cho phép hồ sơ và các thư mục...');
define('ERR_NEED_WRITE_ACCESS', 'Máy chủ phải được cấp quyền ghi vào các tệp và thư mục sau<br>(tức là <em>chmod 777 thư mục_name</em> trên máy chủ UNIX/LINUX)');
define('IS_NOT_WRITABLE', 'Hồ sơ %s không cho phép ghi đè lên.');
define('IS_WRITABLE', 'Hồ sơ %s được phép ghi đè lên.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Lỗi ghi nội dung vào mainfile.php, ghi nội dung vào mainfile.php thủ công.');
