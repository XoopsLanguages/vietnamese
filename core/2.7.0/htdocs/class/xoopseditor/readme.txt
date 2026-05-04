xoopseditor cung cấp một tập hợp các biên tập viên cho XOOPS

hướng dẫn sử dụng:

1 kiểm tra các tệp xoops_version.php trong /xoopseditor/ để đảm bảo nó mới hơn các tệp hiện tại của bạn

2 tải /xoopseditor/ lên /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 định cấu hình tùy chọn nếu có
3.1 ./dhtmlext(all editors)/lingu/: tạo tệp ngôn ngữ địa phương của bạn dựa trên tiếng anh.php
3.3 ./dhtmlext(all editors)/editor_registry.php: đặt cấu hình cho trình soạn thảo: order - thứ tự hiển thị trong trường hợp lựa chọn trình soạn thảo được sử dụng, 0 nếu bị tắt; nohtml - hoạt động với cú pháp không phải html
3.3 ./FCKeditor/module/: sao chép các tệp vào thư mục mô-đun trong trường hợp cần có quyền tải lên, tùy chọn lưu trữ và trình chỉnh sửa cụ thể của mô-đun
3.3.1 ./FCKeditor/module/fckeditor.config.js: đối với các tùy chọn trình soạn thảo, bạn thường không cần thay đổi nó
3.3.2 ./FCKeditor/module/fckeditor.connector.php: để chỉ định thư mục duyệt file (và upload storage) => XOOPS/uploads/XOOPS_FCK_FOLDER/, thư mục bắt buộc phải tạo thủ công
3.3.3 ./FCKeditor/module/fckeditor.upload.php: chỉ định quyền tải lên và dung lượng tải lên
3.4 XOOPS/uploads/fckeditor/: để tạo thư mục nếu FCKeditor được bật, được sử dụng để tải lên từ nơi thư mục tải lên không được chỉ định
3.5 ./tinymce/tinymce/jscripts/: tải xuống các tệp ngôn ngữ địa phương của bạn từ http://tinymce.moxiecode.com/language.php

4 kiểm tra tên tệp: đối với hệ thống phân biệt chữ hoa chữ thường, hãy đảm bảo bạn có tên tệp chính xác theo nghĩa đen, tức là "FCKeditor" không giống với "fckeditor"

5 kiểm tra /xoopseditor/sampleform.inc.php để biết hướng dẫn phát triển
