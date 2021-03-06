<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'phuongnam' );

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
define( 'AUTH_KEY',         'PgZ&3{cSpk[`EQs3gz;%6@Uul=]=V/AR^w6zTTgj),GWfQ*MGAR:8?gInN,wHwJ;' );
define( 'SECURE_AUTH_KEY',  '(4d)(a<8GUJt~7S-OZT.#||J<Ah-f*&TQc{ s5.Pc{asjdP+ =e_?ZmemG[w xx%' );
define( 'LOGGED_IN_KEY',    '6=Z;S}G6q>?RpqNNPh0?-7PrC$go4;@_^Xfeic]|XK@73Mo#s/af6RWcc]dh1_S;' );
define( 'NONCE_KEY',        '3~8l}ZsY,sI&7)2Wg:| N1>)N3*X/,k*(SVrjw7fn<&7(c=,Hazi^3$kmiequXN[' );
define( 'AUTH_SALT',        '|ge2x)uqxig0*^RIloli~C |NoBcRC}n0||_kAT)3g4L~U/YoW(mM7,1rSk1nU;8' );
define( 'SECURE_AUTH_SALT', '_qnk.P<Qs.ZBFjdY&ra%FcQ(TU:j~w[WnmbFv:#qBy%laj!=;Ea/Q&hq>N6tU~v]' );
define( 'LOGGED_IN_SALT',   '}pf)De7l(%2t*V^U->OcoK]H.?sR7n:D wxg;9@7? C4vgeZtcfd U!3+4-D+*6G' );
define( 'NONCE_SALT',       'C5e- aSn0X3|QbIkPLsL@J&FmgB.K(]%rhPq-RP/L 7r-wE:s0)w8W_pC2_935w0' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
