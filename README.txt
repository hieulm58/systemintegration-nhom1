README: HƯỚNG DẪN CÀI ĐẶT HOSPITAL MANAGEMENT SYSTEM (Tích hợp hệ thống)

Bước 1: Clone toàn bộ code ở repo github với link là https://github.com/hieulm58/systemintegration-nhom1

Bước 2: Copy 3 thư mục: hospital-management-system, elixiraid và Chikitsa vào thư mục htdocs trong xampp.

Bước 3: 	Tiến hành cài đặt

a, Cài đặt Elixiraid
- Mở file database.php ở đường dẫn xampp\htdocs\elixiraid\protected\config\database.php và sửa lại cấu hình cho đúng,
 ví dụ ở đây dbname là elixiraid với username password mặc định.
- Mở phpmyadmin lên vào tạo một database mới tên là elixiraid (khớp với config) sau đó import file database 
elixiraid.sql ở trong thư mục database đã clone về.
- Sau khi import thành công thì bạn có thể truy cập Elixiraid với đường dẫn localhost/elixiraid với tài khoản
mặc định là admin và password là admin.

b, Cài đặt Chikitsa
- Tương tự như Elixiraid, hãy mở file database.php ở đường dẫn xampp\htdocs\Chikitsa\application\config\database.php
và cấu hình lại cho đúng với localhost của bạn.
- Mở phpmyadmin lên vào tạo database mới tên là chikitsa sau đó import file database chikitsa.sql 
ở trong thư mục database đã clone về.
- Sau khi import thành công thì bạn có thể truy cập chikitsa với đường dẫn localhost/chikitsa với tài khoản
mặc định là admin và password là admin.

c, Cài đặt app tổng thể: Hospital-Management-System
- Mở thư mục hospital-management-system lên và chạy lệnh cmd sau: composer update
- Sau đó tạo 1 file .env ở trong thư mục đó, copy toàn bộ nội dung của file .env.example ở cùng thư mục gốc và paste
vào trong file .env mới tạo. Tiếp tục là sửa lại thông số cho khớp (database name là hospital)
- Tiếp tục chạy lệnh cmd sau ở trong thư mục hospital-management-system: php artisan key:generate
- Mở phpmyadmin lên vào tạo một database mới tên là hospital (khớp với config) sau đó import file database 
hospital.sql ở trong thư mục database đã clone về.
- Sau khi import thành công thì bạn có thể truy cập ứng dụng tổng thể với đường dẫn localhost/hospital-management-system/public/
với tài khoản mặc định là admin@admin.com và password là 123456.

Bước 4: Chạy chương trình ở đường dẫn http://localhost/hospital-management-system/public/