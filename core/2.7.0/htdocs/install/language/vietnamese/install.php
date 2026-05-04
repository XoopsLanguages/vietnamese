<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: vi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Hiện/ẩn văn bản trợ giúp');
// License
//define('LICENSE_NOT_WRITEABLE', 'Tệp giấy phép "%s" KHÔNG thể ghi được!');
//define('LICENSE_IS_WRITEABLE', '%s Giấy phép có thể ghi được.');
// Configuration check page
define('SERVER_API', 'API Máy chủ');
define('PHP_EXTENSION', '%s phần mở rộng');
define('CHAR_ENCODING', 'Mã hóa ký tự');
define('XML_PARSING', 'Phân tích cú pháp XML');
define('REQUIREMENTS', 'Điều kiện tất yếu');
define('_PHP_VERSION', 'Phiên bản PHP');
define('RECOMMENDED_SETTINGS', 'Khuyến khích thiết đặt');
define('RECOMMENDED_EXTENSIONS', 'Khuyến khích extensions');
define('SETTING_NAME', 'Tên thiết đặt');
define('RECOMMENDED', 'Khuyến khích');
define('CURRENT', 'Hiện thời');
define('RECOMMENDED_EXTENSIONS_MSG', 'Những tiện ích mở rộng này không bắt buộc phải sử dụng thông thường nhưng có thể cần thiết để khám phá
 một số tính năng cụ thể (như hỗ trợ đa ngôn ngữ hoặc RSS). Vì vậy, nên cài đặt chúng.');
define('NONE', 'Không');
define('SUCCESS', 'Thành công');
define('WARNING', 'Lưu ý');
define('FAILED', 'Lỗi');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'Trình hướng dẫn cài đặt XOOPS');
define('LANGUAGE_SELECTION', 'Chọn ngôn ngữ');
define('LANGUAGE_SELECTION_TITLE', 'Chọn ngôn ngữ của bạn');        // L128
define('INTRODUCTION', 'Giới thiệu');
define('INTRODUCTION_TITLE', 'Chào mừng đến với Trình hướng dẫn cài đặt XOOPS');        // L0
define('CONFIGURATION_CHECK', 'Kiễm tra hệ thống');
define('CONFIGURATION_CHECK_TITLE', 'Kiễm tra hệ thống của máy chủ');
define('PATHS_SETTINGS', 'Thiết đặt đường liên kết');
define('PATHS_SETTINGS_TITLE', 'Thiết đặt đường liên kết');
define('DATABASE_CONNECTION', 'Kết nối Cơ sở dữ liệu');
define('DATABASE_CONNECTION_TITLE', 'Kết nối Cơ sở dữ liệu');
define('DATABASE_CONFIG', 'Cấu hình Cơ sở dữ liệu');
define('DATABASE_CONFIG_TITLE', 'Cấu hình Cơ sở dữ liệu');
define('CONFIG_SAVE', 'Lưu cấu hình');
define('CONFIG_SAVE_TITLE', 'Lưu giữ cấu hình hệ thống của bạn ');
define('TABLES_CREATION', 'Tạo bảng');
define('TABLES_CREATION_TITLE', 'Tạo ra những bảng cơ sở dữ liệu');
define('INITIAL_SETTINGS', 'Thiết đặt ban đầu');
define('INITIAL_SETTINGS_TITLE', 'Xin điền vào những sự thiết đặt ban đầu');
define('DATA_INSERTION', 'Chèn vào dữ liệu');
define('DATA_INSERTION_TITLE', 'Lưu giữ những thiết đặt vào cơ sở dữ liệu');
define('WELCOME', 'Chúc Mừng');
define('WELCOME_TITLE', 'Chào mừng đến với trang XOOPS của bạn');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Đường dẫn vật lý XOOPS');
define('XOOPS_URLS', 'Nơi đặt trên máy chủ cho trang web của bạn');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS ghi lại đường dẫn vật lý gốc');
define('XOOPS_ROOT_PATH_HELP', 'Đường liên kết physical path đến XOOPS thư mục hồ sơ gốc không kèm theo gạch chéo ở cuối');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS thư mục thư viện');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS thư mục tập tin dữ liệu');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Vị trí trang web (URL)'); // L56
define('XOOPS_URL_HELP', 'Địa chỉ URL chính dùng để truy nhập vào cho việc cài đặt XOOPS'); // L58
define('LEGEND_CONNECTION', 'Kết nối máy chủ');
define('LEGEND_DATABASE', 'Cơ sở dữ liệu'); // L51
define('DB_HOST_LABEL', 'Máy chủ hostname');    // L27
define('DB_HOST_HELP', 'Tên Hostname của máy chủ cơ sở dữ liệu. Nếu bạn không chắt chắn, <em>localhost</em> sẽ dùng được trong mọi trường hợp'); // L67
define('DB_USER_LABEL', 'Tên tài khoản');    // L28
define('DB_USER_HELP', 'Tên tài khoản sẽ được dùng để kết nối với trung tâm cơ sở dữ liệu'); // L65
define('DB_PASS_LABEL', 'Mật khẩu');    // L52
define('DB_PASS_HELP', 'Mật khẩu cho tài khoản để kết nối với trung tâm cơ sở dữ liệu'); // L68
define('DB_NAME_LABEL', 'Tên cơ sở dữ liệu');    // L29
define('DB_NAME_HELP', 'Tên của cơ sở dữ liệu trên máy chủ. Hướng dẫn cài đặt sẽ tạo ra một cơ sở dữ liệu nếu không tồn tại'); // L64
define('DB_CHARSET_LABEL', 'Cơ sở dữ liệu loại kiểu bộ ký tự');
define('DB_CHARSET_HELP', 'MySQL bao gồm sự hỗ trợ bộ ký tự cho phép các bạn lưu trử các dữ liệu sử dụng với đa dạng của những bộ ký tự và thực hiện những sự so sánh theo một sự đa dạng của những sự đối chiếu.');
define('DB_COLLATION_LABEL', 'Đối chiếu cơ sở dữ liệu');
define('DB_COLLATION_HELP', 'Sự đối chiếu là những quy tắc để so sánh những đặc tính trong các bộ ký tự.');
define('DB_PREFIX_LABEL', 'Tiền tố bảng');    // L30
define('DB_PREFIX_HELP', 'Tiền tố này sẽ được thêm vào tất cả bảng mới được tạo ra để tránh xung đột tên trong cơ sở dữ liệu. Nếu bạn không chắt chắn, hãy dùng \'xoops\''); // L63
define('DB_PCONNECT_LABEL', 'Sử dụng kết nối bền bỉ?');    // L54
define('DB_PCONNECT_HELP', "Mặc định là 'Không'. Để trống nếu bạn không chắc chắn"); // L69
define('DB_DATABASE_LABEL', 'Cơ sở dữ liệu');
define('LEGEND_ADMIN_ACCOUNT', 'Tài khoản quản trị');
define('ADMIN_LOGIN_LABEL', 'Quản trị mạng tài khoản đăng nhập'); // L37
define('ADMIN_EMAIL_LABEL', 'Quản trị mạng địa chỉ email'); // L38
define('ADMIN_PASS_LABEL', 'Quản trị mạng mật khẩu'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Xác nhận mật khẩu'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Trước'); // L42
define('BUTTON_NEXT', 'Tiếp tục'); // L47
// Messages
define('XOOPS_FOUND', '%s được tìm thấy');
define('CHECKING_PERMISSIONS', 'Kiểm tra lại những sử cho phép hồ sơ và các thư mục...'); // L82
define('IS_NOT_WRITABLE', 'Hồ sơ %s không cho phép ghi đè lên.'); // L83
define('IS_WRITABLE', 'Hồ sơ %s được phép ghi đè lên.'); // L84
define('XOOPS_PATH_FOUND', 'Tìm thấy đường dẫn.');
//define('READY_CREATE_TABLES', 'Không phát hiện thấy bảng XOOPS nào.<br>Trình cài đặt hiện đã sẵn sàng tạo bảng hệ thống XOOPS.');
define('XOOPS_TABLES_FOUND', 'Các bảng hệ thống XOOPS đã tồn tại trong cơ sở dữ liệu của bạn.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS bảng hệ thống đã được tạo.');
//define('READY_INSERT_DATA', 'Hướng dẫn cài đặt bây giờ sẵn sàng ghi chèn vào dữ liệu đầu tiên vào cơ sở dữ liệu.');
//define('READY_SAVE_MAINFILE', 'Trình cài đặt hiện đã sẵn sàng để lưu các cài đặt đã chỉ định vào <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Cài đặt đã lưu');
define('SAVED_MAINFILE_MSG', 'Trình cài đặt đã lưu các cài đặt được chỉ định vào <em>mainfile.php</em> và <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS dữ liệu được tìm thấy trong cơ sở dữ liệu.');
define('DATA_INSERTED', 'Dữ liệu ban đầu đã được chèn vào cơ sở dữ liệu.');
// %s is database name
define('DATABASE_CREATED', 'Cơ sở dữ liệu %s được tạo ra!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Không thể tạo ra bảng %s'); // L118
define('TABLE_CREATED', 'Bảng %s được tạo ra.'); // L45
define('ROWS_INSERTED', '%d mục được chèn vào đối với bảng %s.'); // L119
define('ROWS_FAILED', 'Không thể chèn mục %d vào bảng %s.'); // L120
define('TABLE_ALTERED', 'Bảng %s được cập nhật.'); // L133
define('TABLE_NOT_ALTERED', 'Không thể cập nhật bảng %s.'); // L134
define('TABLE_DROPPED', 'Bảng %s được loại bỏ.'); // L163
define('TABLE_NOT_DROPPED', 'Không thể xóa bỏ bảng %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Không thể truy nhập vào thư mục xác định. Xin kiểm tra lại sự tồn tại của nó và phải đọc được bởi máy chủ.');
define('ERR_NO_XOOPS_FOUND', 'Không có sự cài đặt XOOPS nào có thể tìm thấy trong thư mục xác định.');
define('ERR_INVALID_EMAIL', 'Email không hợp lệ'); // L73
define('ERR_REQUIRED', 'Vui lòng trở lại và nhập vào tất cả thông tin cần thiết.'); // L41
define('ERR_PASSWORD_MATCH', 'Hai mật khẩu không phù hợp');
define('ERR_NEED_WRITE_ACCESS', 'Máy chủ phải được cấp quyền truy cập ghi vào các tệp và thư mục sau<br>(tức là <em>chmod 775 thư mục_name</em> trên máy chủ UNIX/LINUX)<br>Nếu chúng không có sẵn hoặc không được tạo chính xác, vui lòng tạo thủ công và đặt quyền thích hợp.');
define('ERR_NO_DATABASE', 'Không thể tạo ra cơ sở dữ liệu được. Liên lạc với ban quản lý máy chủ để thêm chi tiết.'); // L31
define('ERR_NO_DBCONNECTION', 'Không thể kết nối với cơ sở dữ liệu máy chủ.'); // L106
define('ERR_WRITING_CONSTANT', 'Không ghi được hằng số vào %s.'); // L122
define('ERR_COPY_MAINFILE', 'Không thể sao chép tệp phân phối sang %s');
define('ERR_WRITE_MAINFILE', 'Không thể ghi vào %s. Vui lòng kiểm tra quyền của tệp và thử lại.');
define('ERR_READ_MAINFILE', 'Không thể mở %s để đọc');
define('ERR_INVALID_DBCHARSET', "Bộ ký tự '%s' không phải được hỗ trợ.");
define('ERR_INVALID_DBCOLLATION', "Sự đối chiếu '%s' không phải được hỗ trợ.");
define('ERR_CHARSET_NOT_SET', 'Bộ ký tự mặc định chưa chọn cho cơ sở dữ liệu XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Hỗ trợ');
define('LOGIN', 'Xác thực');
define('LOGIN_TITLE', 'Xác thực');
define('USER_LOGIN', 'Đăng nhập quản trị viên');
define('USERNAME', 'Tên người dùng:');
define('PASSWORD', 'Mật khẩu :');
define('ICONV_CONVERSION', 'Chuyển đổi bộ ký tự');
define('ZLIB_COMPRESSION', 'Nén Zlib');
define('IMAGE_FUNCTIONS', 'Hàm hình ảnh');
define('IMAGE_METAS', 'Dữ liệu meta hình ảnh (exif)');
define('FILTER_FUNCTIONS', 'Hàm lọc');
define('ADMIN_EXIST', 'Tài khoản quản trị viên đã tồn tại.');
define('CONFIG_SITE', 'Cấu hình trang web');
define('CONFIG_SITE_TITLE', 'Cấu hình trang web');
define('MODULES', 'Cài đặt mô-đun');
define('MODULES_TITLE', 'Cài đặt mô-đun');
define('THEME', 'Chọn giao diện');
define('THEME_TITLE', 'Chọn giao diện mặc định');
define('INSTALLED_MODULES', 'Các mô-đun sau đây đã được cài đặt.');
define('NO_MODULES_FOUND', 'Không tìm thấy mô-đun nào.');
define('NO_INSTALLED_MODULES', 'Không có mô-đun nào được cài đặt.');
define('THEME_NO_SCREENSHOT', 'Không tìm thấy ảnh chụp màn hình');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Độ mạnh mật khẩu');
define('PASSWORD_DESC', 'Chưa nhập mật khẩu');
define('PASSWORD_GENERATOR', 'Bộ tạo mật khẩu');
define('PASSWORD_GENERATE', 'Tạo');
define('PASSWORD_COPY', 'Sao chép');
define('PASSWORD_VERY_WEAK', 'Rất yếu');
define('PASSWORD_WEAK', 'Yếu');
define('PASSWORD_BETTER', 'Khá hơn');
define('PASSWORD_MEDIUM', 'Trung bình');
define('PASSWORD_STRONG', 'Mạnh');
define('PASSWORD_STRONGEST', 'Mạnh nhất');
//2.5.7
define('WRITTEN_LICENSE', 'Đã viết XOOPS %s Mã bản quyền: <strong>%s_</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Thử lại');
define('CHMOD_CHGRP_IGNORE', 'Sử dụng bất kể');
define('CHMOD_CHGRP_ERROR', 'Trình cài đặt có thể không ghi được tệp cấu hình %1$s.<p>PHP đang ghi tệp theo người dùng %2$s và nhóm %3$s.<p>Thư mục %4$s/ có người dùng %5$s và nhóm %6$s');
//2.5.9
define("CURL_HTTP", "Khách hàng URL Thư viện (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Tên miền cookie cho trang web');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Tên miền để đặt cookie. Có thể để trống, máy chủ đầy đủ từ URL (www.example.com) hoặc miền đã đăng ký không có miền phụ (example.com) để chia sẻ trên các miền phụ (www.example.com và blog.example.com.)');
define('INTL_SUPPORT', 'Hàm quốc tế hóa');
define('XOOPS_SOURCE_CODE', "XOOPS trên GitHub");
define('XOOPS_INSTALLING', 'Đang cài đặt');
define('XOOPS_ERROR_ENCOUNTERED', 'Lỗi');
define('XOOPS_ERROR_SEE_BELOW', 'Xem bên dưới để biết thông báo.');
define('MODULES_AVAILABLE', 'Các mô-đun có sẵn');
define('INSTALL_THIS_MODULE', 'Thêm %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Không thể sao chép tệp cấu hình %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Trang web');
define('_WEBSITE_SLOGAN', 'Cứ dùng nó đi!');
define('_WEBSITE_META_KEYWORDS', 'xoops, khung ứng dụng web, cms, hệ thống quản lý nội dung');
define('_WEBSITE_FOOTER', "Được cung cấp bởi XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Dự án XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Bản quyền © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS là tập lệnh cổng thông tin nguồn mở dựa trên Hướng đối tượng động được viết bằng PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'Rất tiếc');
