<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'meliss' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%(gqpP;]neY0=.Et).Wum>t<mCIw0ga{3kxoe*+q9Rz/hzw<Y[V]MrS?[g@CN!*|' );
define( 'SECURE_AUTH_KEY',  '/6->ce2yNLJx9{s]Q1v|,y/Co {WcaDG=-_RK$_MX8/{D`8GAd?`{KpbH=KIC>Ds' );
define( 'LOGGED_IN_KEY',    ';`t[ia[dniC_aDID`Os!NAs:$N.O5bs+5tY)=N]60k!V{%{j[}fyu <{c.+e+9+9' );
define( 'NONCE_KEY',        '/-{g>ou]89**.E9D<E#|2gHfE}-s)D~>BT(3Tz|i]-=moqFV:t;*V[p&_O>N/md(' );
define( 'AUTH_SALT',        'U`u@Z~nsNb.Q2-hMPWxA{}e%fWr#/maweS?VlD9#P$pf7D :QNjQU?EN1Of-Z@+$' );
define( 'SECURE_AUTH_SALT', 'zn8t?]WE)Q[J7uhiot[r;B~Ba<|Dm^2[BPBMI8{yw~$o@JyvaoQnFBr;Ol3(0Q|b' );
define( 'LOGGED_IN_SALT',   'YWb}Wl4~QZSih2_MFe|^c=N8_&:RQ$tRI$!k`$7O.iS ;NQ|D;jXb<4gm`;5YbSQ' );
define( 'NONCE_SALT',       '-^bRcr=Y#&J7(^Hf~24Y>U7i1{/LPvUEAT$rh38dk/ T{7q;{G!*J]6 E8kO`}Po' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'x0ckarn_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
