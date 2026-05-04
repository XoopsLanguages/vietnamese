<?php

// _LANGCODE: vi
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Di chuyển Smarty4');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Kết quả quét');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Chạy quét');
define('_XOOPS_SMARTY4_SCANNER_END', 'Máy quét thoát');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Quy tắc');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Trận đấu');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Tệp');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Số lần sửa lỗi');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Cần phải xem xét thủ công');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Có thể tự động sửa: biến mục foreach sẽ được đổi tên bằng cách thêm "_item" (ví dụ: "foo" trở thành "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Không thể ghi được');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Tùy chọn quét lại');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Nhấp vào hộp kiểm "Có" bên dưới rồi nhấp vào nút Chạy Quét để cố gắng tự động khắc phục mọi sự cố được tìm thấy.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Đánh dấu là hoàn thành');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Thư mục mẫu (tùy chọn)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Tiện ích mở rộng mẫu (tùy chọn)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 giới thiệu một thay đổi đáng kể: Smarty 4</h3>

<p>Thật không may, sự thay đổi này có thể làm gián đoạn một số chủ đề cũ hơn. Vì vậy, trước khi tiến hành nâng cấp, hãy đảm bảo rằng bạn làm theo các bước sau:

<li>Chạy preflight.php để kiểm tra mọi chủ đề hoặc mẫu mô-đun lỗi thời.</li>
<li>Nếu xác định được bất kỳ vấn đề nào, hãy tham khảo tài liệu này để hiểu những sửa đổi cần thiết trước khi tiến hành nâng cấp.</li>
<li>Sau khi thực hiện các thay đổi cần thiết, hãy chạy lại preflight.php.</li>
<li>Nếu không còn vấn đề gì nữa, bạn có thể bắt đầu quá trình nâng cấp.</li>
</p>
EOT,
);
