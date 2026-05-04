<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Quyền');
define('_MD_A_MYMENU_MYPREFERENCES','Tùy chọn');
// index.php
define('_AM_TH_DATETIME', 'Thời gian');
define('_AM_TH_USER', 'Người dùng');
define('_AM_TH_IP', 'IP');
define('_AM_TH_ĐẠI LÝ', 'AGENT');
define('_AM_TH_TYPE', 'Loại');
define('_AM_TH_DESCRIPTION', 'Mô tả');
define('_AM_TH_BADIPS','IP xấu<br><br><span style="font-weight:normal;">Viết mỗi IP một dòng<br>để trống nghĩa là tất cả IP đều được phép</span>');
define('_AM_TH_GROUP1IPS','Các IP được phép cho Nhóm=1<br><br><span style="font-weight:normal;">Viết mỗi IP một dòng.<br>192.168. nghĩa là 192.168.*<br>blank nghĩa là tất cả IP đều được phép</span>');
define('_AM_LABEL_COMPACTLOG', 'Nhật ký gọn');
define('_AM_BUTTON_COMPACTLOG', 'Nén lại!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Các bản ghi trùng lặp (IP,Type) sẽ bị xóa');
define('_AM_LABEL_REMOVEALL', 'Xóa tất cả bản ghi');
define('_AM_BUTTON_REMOVEALL', 'Xóa tất cả!');
define('_AM_JS_REMOVEALLCONFIRM', 'Tất cả nhật ký đều bị xóa hoàn toàn. Bạn có thực sự ổn không?');
define('_AM_LABEL_REMOVE', 'Xóa các bản ghi đã kiểm tra:');
define('_AM_BUTTON_REMOVE', 'Xóa đi!');
define('_AM_JS_REMOVECONFIRM', 'Xóa Có được không?');
define('_AM_MSG_IPFILESUPDATED', 'Tệp dành cho IP đã được cập nhật');
define('_AM_MSG_BADIPSCANTOPEN', 'File bị lỗi IP không mở được');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'File cho phép group=1 không mở được');
define('_AM_MSG_REMOVED', 'Bản ghi đã được xóa');
define('_AM_MSG_DELFAILED', 'Không xóa được bản ghi');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Bật thư mục configs có thể ghi: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Trình quản lý tiền tố');
define('_AM_MSG_DBUPDATED', 'Cơ sở dữ liệu đã được cập nhật thành công!');
define('_AM_CONFIRM_DELETE', 'Tất cả dữ liệu sẽ bị loại bỏ. ĐƯỢC RỒI?');
define('_AM_TXT_HOWTOCHANGEDB',"If you want to change prefix,<br> edit %s/data/secure.php manually.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Không an toàn');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Nếu bạn có thể thấy hình ảnh -NG- hoặc liên kết trả về trang bình thường thì XOOPS_TRUST_PATH của bạn không được đặt đúng cách. Nơi tốt nhất cho XOOPS_TRUST_PATH là bên ngoài DocumentRoot. Nếu bạn không thể làm điều đó, bạn phải đặt .htaccess (DENY FROM ALL) ngay dưới XOOPS_TRUST_PATH là cách tốt thứ hai.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Kiểm tra xem các tệp PHP bên trong TRUST_PATH có được đặt ở chế độ chỉ đọc không (phải có lỗi 404.403 hoặc 500)');
define('_AM_ADV_REGISTERGLOBALS',"Nếu 'BẬT', cài đặt này sẽ mời gọi nhiều cuộc tấn công tiêm nhiễm khác nhau. Nếu có thể, hãy đặt 'tắt register_globals' trong php.ini hoặc nếu không thể, hãy tạo hoặc chỉnh sửa .htaccess trong thư mục XOOPS của bạn:");
define('_AM_ADV_ALLOWURLFOPEN',"Nếu 'BẬT', cài đặt này cho phép kẻ tấn công thực thi các tập lệnh tùy ý trên máy chủ từ xa.<br>Chỉ quản trị viên mới có thể thay đổi tùy chọn này.<br>Nếu bạn là quản trị viên, hãy chỉnh sửa php.ini hoặc httpd.conf.<br><b>Mẫu của httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; tắt</b><br>Nếu không, hãy yêu cầu quản trị viên của bạn.");
define('_AM_ADV_USETRANSSID',"Nếu 'BẬT', ID phiên của bạn sẽ được hiển thị trong thẻ neo, v.v.<br>Để ngăn chặn việc hack phiên, hãy thêm một dòng vào .htaccess trong XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Cài đặt này mời 'Chèn SQL'.<br>Đừng quên BẬT 'Buộc khử trùng *' trong tùy chọn của mô-đun này.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Chuyển đến trình quản lý tiền tố');
define('_AM_ADV_MAINUNPATCHED', 'Bạn nên chỉnh sửa mainfile.php của mình giống như được viết bằng README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Cơ sở dữ liệu của bạn đã sẵn sàng cho DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Cơ sở dữ liệu của bạn chưa sẵn sàng cho DBLayer Trapping anti-SQL-Injection. Một số bản vá được yêu cầu.');
define('_AM_ADV_SUBTITLECHECK', 'Kiểm tra xem Protector có hoạt động tốt không');
define('_AM_ADV_CHECKCONTAMI', 'Ô nhiễm');
define('_AM_ADV_CHECKISOCOM', 'Bình luận bị cô lập');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'và đặt vào đó dòng bên dưới:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Tiền tố');
define('_AM_PROTECTOR_TABLES', 'Bảng');
define('_AM_PROTECTOR_UPDATED', 'Đã cập nhật');
define('_AM_PROTECTOR_COPY', 'Sao chép');
define('_AM_PROTECTOR_ACTIONS', 'Hành động');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Cấm IP trên hồ sơ đã kiểm tra:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Cấm!');
define('_AM_JS_BANCONFIRM', 'IP Cấm được không?');
define('_AM_MSG_BANNEDIP', 'Các IP đã bị cấm');
define('_AM_ADMINSTATS_TITLE', 'Tóm tắt nhật ký Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Tháng trước');
define('_AM_ADMINSTATS_LAST_WEEK', 'Tuần trước');
define('_AM_ADMINSTATS_LAST_DAY', 'Hôm qua');
define('_AM_ADMINSTATS_LAST_HOUR', 'Giờ qua');
