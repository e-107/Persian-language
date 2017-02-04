<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/lan_installer.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

define("LANINS_001", "مديريت نصب e107");


define("LANINS_002", "مرحله ");
define("LANINS_003", "1");
define("LANINS_004", "انتخواب زبان");
define("LANINS_005", "لطفا زبان خود را براي ادامه نصب انتخواب نماييد .");
// define("LANINS_006", "انتخاب زبان");
define("LANINS_007", "4");
define("LANINS_008", "PHP and MySQL Versions Check / File Permissions Check");
define("LANINS_009", "دسترسي هاي پيشفرض براي فايل");
define("LANINS_010", "فايل قابل نوشتن نيست: ");
define("LANINS_010a", "پوشه قابل نوشتن نيست: ");
// define("LANINS_011", "Error"); new > LAN_ERROR
define("LANINS_012", "MySQL Functions don't seem to exist. This probably means that either the MySQL PHP Extension isn't installed or your PHP installation wasn't compiled with MySQL support."); // help for 012
define("LANINS_013", "Couldn't determine your MySQL version number. This is a non fatal error, so please continue installing, but be aware that e107 requires MySQL >= 3.23 to function correctly.");
define("LANINS_014", "دسترسي به فايل");
define("LANINS_015", "ورژن پي اچ پي");
// define("LANINS_016", "MySQL");
define("LANINS_017", "PASS");
define("LANINS_018", "Ensure all the listed files exist and are writable by the server. This normally involves CHMODing them 777, but environments vary - contact your host if you have any problems.");
define("LANINS_019", "The version of PHP installed on your server isn't capable of running e107. e107 requires a PHP version of at least ".MIN_PHP_VERSION." to run correctly. Either upgrade your PHP version, or contact your host for an upgrade.");
// define("LANINS_020", "ادامه نصب"); //LAN_CONTINUE
define("LANINS_021", "2");
define("LANINS_022", "MySQL Server Details");
define("LANINS_023", "Please enter your MySQL settings here.

If you have root permissions you can create a new database by ticking the box, if not you must create a database or use a pre-existing one.

If you have only one database use a prefix so that other scripts can share the same database.
If you do not know your MySQL details contact your web host.");
define("LANINS_024", "mysql ادرس سرور:");
define("LANINS_025", "MySQL نام کاربري:");
define("LANINS_026", "MySQL رمز عبور:");
define("LANINS_027", "MySQL ديتابيس:");
define("LANINS_028", "ديتابيس ساخته شود ؟");
define("LANINS_029", "پيشوند جداول:");
define("LANINS_030", "سرور مورد استفاده خود را درج کنيد. اين ادرس ميتونه همراه با پورت انتخوابي باشه 'hostname:port' يا مسير لوکال باشه. \":/path/to/socket\"براي لوکال هاست");
define("LANINS_031", "نام کاربري مورد استفاده براي ارتباط با ماي اسکويل را بنويسيد");
define("LANINS_032", "رمز نام کاربري ديتابيس را درج کنيد. محتوا نبايد با نام کاربري يکي يا تکراري باشه");
define("LANINS_033", "نام ديتابيسي که ساختيد اينجا بنويسيد ، اگه نساختيد  روي  خانه رو به رو يه تيک بزنيد و نام ديتابيستون رو بنويسيد البته بعضي سرور ها ممکنه پشتيباني نکنند");
define("LANINS_034", "پيشوند جداول رو اينجا بنويسيد، البته اگه دست نزنيد بصورت پيشفرض ساخته ميشه براي پيشوند جداول حتما بايد علامت _ همراه باشه مثلا _e107");
// define("LANINS_035", "ادامه نصب"); // LAN_CONTINUE
define("LANINS_036", "3");
define("LANINS_037", "تاييد ارتباط با mysql");
define("LANINS_038", "و ساخت ديتابيس");
define("LANINS_039", "Please make sure you fill in all fields, most importantly, MySQL Server, MySQL Username and MySQL Database (These are always required by the MySQL Server)");
define("LANINS_040", "خطا ها");
define("LANINS_041", "e107 was unable to establish a connection to the MySQL server using the information you entered. Please return to the last page and ensure the information is correct.");
define("LANINS_042", "ارتباط با سرور mysql تاييد شد.");
define("LANINS_043", "Unable to create database, please ensure you have the correct permissions to create databases on your server.");
define("LANINS_044", "ديتابيس شما بخوبي ساخته شد");
define("LANINS_045", "براي رفتن به مرحله بعد روي دکمه کليک کنيد");
define("LANINS_046", "5");
define("LANINS_047", "جزييات مديريت");
define("LANINS_048", "تغييرات مسير ");
define("LANINS_049", "دو تا رمزتون يکسان نيست لطفا مجددا وارد بشيد.");
define("LANINS_050", "XML extension");
define("LANINS_051", "نصب شد");
define("LANINS_052", "نصب نشد");
// define("LANINS_053", "e107 v2.x requires the PHP XML Extension to be installed. Please contact your host or read the information at [x] before continuing");
// define("LANINS_054", "e107 v2.x requires the PHP EXIF Extension to be installed. Please contact your host or read the information at [x] before continuing");
define("LANINS_055", "تاييد نصب");
define("LANINS_056", "6");
define("LANINS_057", " e107 براي تکميل شدن نياز به همه اطلاعات داره

لطفا روي دکمه کليک کنيد تا جداول ديتابيس شما ساخته بشه و تنظيمات ذخيره بشه.

");
define("LANINS_058", "7");
define("LANINS_060", "فايل sql  شما قابل خواندن نيست

Please ensure the file [b]core_sql.php[/b] exists in the [b]/e107_core/sql[/b] directory.");
define("LANINS_061", "e107 was unable to create all of the required database tables.
Please clear the database and rectify any problems before trying again.");


// define("LANINS_063", "به e107 خوش امديد");

define("LANINS_069", "نصب e107 کامل شد!

براي امنيت بيشتر شما بايد دسترسي فايل  [b]e107_config.php[/b] رو به 644 تغيير بديد

همچنين فايل install.php رو از سرورتون حذف کنيد.
");
define("LANINS_070", "e107 was unable to save the main config file to your server.

Please ensure the [b]e107_config.php[/b] دسترسي لازم به اين فايل وجود ندارد");
define("LANINS_071", "نصب کامل شد");

define("LANINS_072", "نام کاربري مدير");
define("LANINS_073", "نام کاربري مورد استفاده براي ورود به مديريت سايت را اينجا وارد نماييد ");
define("LANINS_074", "نام نمايشي مدير");
// define("LANINS_075", "اين نام نمايشي شما هست و روي پروفايل شما نمايش داده ميشه و بسته به تنظيمات مديريت ميتونيد براي کاربران قابل نمايش بسازيد");
define("LANINS_076", "رمز عبور مدير");
define("LANINS_077", "لطفا رمز عبور مديريت را بنويسيد در اينجا");
define("LANINS_078", "تاييد رمز عبور مديريت");
define("LANINS_079", "لطفا تاييديه رمز عبور را وارد نماييد ");
define("LANINS_080", "ايميل مدير");
define("LANINS_081", "ادرس ايميل را وارد نماييد ");

// define("LANINS_082", "user@yoursite.com");

// Better table creation error reporting
define("LANINS_083", "گزارش خطاي mysql:");
define("LANINS_084", "The installer could not establish a connection to the database");
define("LANINS_085", "اينستالر نميتونه ديتابيس رو انتخاب کنه:");

define("LANINS_086", "نام کاربري مدير, فيلد هاي رمز عبور و نام کاربري مدير ضروري هستند. لطفا بازگرديد و اطمينان حاصل نماييد اطلاعات وارد شده صحيح مي باشند .");

// define("LANINS_087", "دسته");
// define("LANINS_088", "خانه");
// define("LANINS_089", "دانلود ها");
// define("LANINS_090", "کاربران");
// define("LANINS_091", "ثبت خبر");
// define("LANINS_092", "ارتباط با ما");
// define("LANINS_093", "مجوز ورود به ايتم هاي منوي شخصي");
// define("LANINS_094", "نمونه کلاس انجمن شخصي");
// define("LANINS_095", "چک کردن صحيح");

// define("LANINS_096", 'اخرين نظرات');
// define("LANINS_097", '[بيشتر...]');
// define("LANINS_098", 'مقالات');
// define("LANINS_099", 'مقالات صفح بندي شده ...');
// define("LANINS_100", 'اخرين ارسال هاي انجمن');
// define("LANINS_101", 'بروزرساني منوي تنظيمات');
// define("LANINS_102", 'زمان و ساعت');
// define("LANINS_103", 'پيشنمايش');
// define("LANINS_104", 'پيش نمايشس صفحه قبل ...');

define("LANINS_105", "A database name or prefix beginning with some digits followed by 'e' or 'E' is not acceptable");
define("LANINS_106", "WARNING - e107 cannot write to the directories and/or files listed. While this will not stop e107 installing, it will mean that certain features are not available.
				You will need to change the file permissions to use these features");
				
define("LANINS_107", "نام وب سايت");
define("LANINS_108", "وبسايت من");
define("LANINS_109", "قالب وبسايت");
// define("LANINS_110", "");
define("LANINS_111", "Include Content/Configuration");
define("LANINS_112", "Quickly reproduce the look of the theme preview or demo. (If Available)");
define("LANINS_113", "لطفا نام وبسايت را وارد نمايد ");
define("LANINS_114", "لطفا يک قالب انتخواب نماييد ");
define("LANINS_115", "نام قالب");
define("LANINS_116", "نوع قالب");
define("LANINS_117", "مزيت هاي وبسايت");
define("LANINS_118", "نصب پلاگين ها");
define("LANINS_119", "نصب تمام پلاگين هاي مورد نياز قالب من.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php is not an empty file");
define("LANINS_122", "You might have an existing installation");
define("LANINS_123", "Optional: Your public name or alias. Leave blank to use the user name");
define("LANINS_124", "Please choose a password of at least 8 characters");
define("LANINS_125", "e107 به خوبي نصب شد");
define("LANINS_126", "براي امنيت بيشتر سطح دسترسي فايل  e107_config.php را به 644 تغيير دهيد.");
define("LANINS_127", "ديتابيس [x] از قبل وجود دارد. روي قبلي جانشين بشه? (درصورت وجود اطلاعات قبلي حذف ميشه)");
define("LANINS_128", "جانشين بشه عيبي نداره");
define("LANINS_129", "ديتابيس وجود ندارد ");

define("LANINS_134", "نصب");
define("LANINS_135", "از");   //single time use installer only as in .1 of 8  not replacing by LAN_SEARCH_12
define("LANINS_136", "ديتابيس موجود حذف شده");
define("LANINS_137", "ديتابيس موجود است ");
// define("LANINS_138", "ورژن");

define("LANINS_141", "Please fill in the form below with your MySQL details. If you do not know this information, please contact your hosting provider. You may hover over each field for additional information.");
define("LANINS_142", "IMPORTANT: لطفا فايل e107.htaccess به .htaccess تغيير نام دهيد");
define("LANINS_144", "IMPORTANT: Please copy and paste the contents of the [b]e107.htaccess[/b] into your [b].htaccess[/b] file. Please take care NOT to overwrite any existing data that may be in it.");
define("LANINS_145", "e107 v2.x requires the PHP [x] to be installed. Please contact your host or read the information at [y] before continuing.");
