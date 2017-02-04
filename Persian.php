<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 *
 * Persian language file - generic terms and system LAN
 * Persian language By e-107.ir
 * Author:n.khodabandeh
*/
setlocale(LC_ALL, 'fa_IR.UTF-8', 'fa_IR.utf8', 'fa_fa.utf8', 'fa');
define("CORE_LC", "fa");
define("CORE_LC2", "ir");
// define("TEXTDIRECTION","rtl");
// deprecated: all language packs must be UTF-8
//define("CHARSET", "utf-8");  // for a true multi-language site. :)
define("CORE_LAN1", "Error : theme is missing.\\n\\nChange the used themes in your preferences (admin area) or upload files for the current theme to the server.");
//obsolete define("CORE_LAN2'," \\1 wrote:");// "\\1" represents the username.
//obsolete define("CORE_LAN3", "file attachment disabled");				// Not used in 0.8
define("CORE_LAN4", "لطفا فايل اينستال را از سيستم  حذف نماييد install.php");
define("CORE_LAN5", "if you do not there is a potential security risk to your website");
define("CORE_LAN6", "The flood protection on this site has been activated and you are warned that if you carry on requesting pages you could be banned.");
define("CORE_LAN7", "Core is attempting to restore prefs from automatic backup.");
define("CORE_LAN8", "Core Prefs Error");
define("CORE_LAN9", "Core could not restore from automatic backup. Execution halted.");
define("CORE_LAN10", "Corrupted cookie detected - logged out.");

// Footer
define("CORE_LAN11", "Render time: ");
define("CORE_LAN12", " sec (");
define("CORE_LAN13", "% of that for queries) ");
define("CORE_LAN14", "%2.3f cpu sec (%2.2f%% load, %2.3f startup). Clock: ");
define("CORE_LAN15", "DB queries: ");
define("CORE_LAN16", "حافضه: ");

// img.bb
define("CORE_LAN17", "[ تصوير غير فعال ]");
define("CORE_LAN18", "تصوير: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "IR");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO", "اطلاعات سيستم");
define("EMESSLAN_TITLE_ERROR", "خطا");
define("EMESSLAN_TITLE_SUCCESS", "کامل شد");
define("EMESSLAN_TITLE_WARNING", "اخطار");
define("EMESSLAN_TITLE_DEBUG", "سيستم ديباگ");

define("LAN_EDIT","ويرايش");
define("LAN_DELETE","حذف");
define("LAN_DEFAULT","پيش فرض");
define("LAN_MORE", "بيشتر...");
define("LAN_LESS", "کمتر...");
define("LAN_READ_MORE", "ادامه مطلب...");
define("LAN_GOPAGE", "برو به صفحه ...");
define("LAN_GOTOPAGEX", "[x] برو به صفحه ");
define("LAN_GO", "Go");
define("LAN_SUBMIT", "ثبت");
define("LAN_NONE", "خالي");
define("LAN_WARNING", "اخطار!");
define("LAN_ERROR", "خطا");
define("LAN_ANONYMOUS", "مخفي");
define("LAN_EMAIL_SUBS", "-ايميل-");
define("LAN_YES", "بله");
define("LAN_NO", "خير");
define("LAN_OK", "قبول");
define("LAN_ACTIONS", "اقدامات");
define("LAN_THANK_YOU", "متشکرم");
define("LAN_CONTINUE", "ادامه");
define("LAN_ENTER", "ورود");
define("LAN_ENTER_CODE", "ورود کد");
define("LAN_INVALID_CODE", "کد وارد شده نادرست است ");
define("LAN_SEARCH", "جستجو");
define("LAN_VIEW", "نمايش");
define("LAN_SORT", "بر اساس");
define("LAN_ORDER_BY", "سفارشي بوسيله");
define("LAN_ASCENDING", "Ascending");
define("LAN_DESCENDING", "Descending");
define("LAN_SHARE", "اشتراک");
define("LAN_BACK", "Back");
define("LAN_NAME", "نام");
define("LAN_DESCRIPTION", "توضيحات");
define("LAN_CANCEL","انصراف");
define("LAN_DATE","تاريخ");
define("LAN_DATE_POSTED", "تاريخ ارسال");
define("LAN_JSCONFIRM","ايا شما اطمينان داريد ؟");
define("LAN_IP","اي پي");
define("LAN_IP_ADDRESS","ادرس اي پي");
define("LAN_AUTHOR","نويسنده");
define("LAN_CATEGORY", "دسته");
define("LAN_GUEST", "مهمان");
define("LAN_NEXT", "بعدي");
define("LAN_PREVIOUS", "قبلي");
define("LAN_LOGIN", "ورود");
define("LAN_LOGOUT", "خروج");
define("LAN_SETTINGS", "تنظيمات");
define("LAN_PASSWORD", "رمز عبور");
define("LAN_INCORRECT_PASSWORD", "رمز عبور نادرست است");
define("LAN_TYPE", "نوع");
define("LAN_SCREENSHOT", "تصوير کوچک");
define("LAN_FILE", "فايل");
define("LAN_FILETYPES", "نوع فايل");
define("LAN_FILE_NOT_FOUND", "فايل وجود ندارد");
define("LAN_FILES","فايل ها");
define("LAN_SIZE", "اندازه");
define("LAN_VERSION", "ورژن");
define("LAN_DOWNLOAD", "دانلود");
define("LAN_COMMENTS", "کامنت ها");
define("LAN_LOCATION", "مسير");
define("LAN_NO_RECORDS_FOUND","رکوردي وجود ندارد ");
define("LAN_RATING", "رتبه بندي");
define("LAN_IMAGE","تصوير");
define("LAN_ABOUT", "درباره");
define("LAN_TITLE", "عنوان");
define("LAN_USER", "کاربر");
define("LAN_EMAIL","ادرس ايميل");
define("LAN_WROTE", "خالي از نوشته"); // as in John wrote.."  ";
define("LAN_RE_ORDER", "سفارش مجدد");
define("LAN_RELATED", "رتبه داده شد");
define("LAN_CLOSE", "بسته شد");
define("LAN_EXPAND", "باز شد");

define("LAN_ENTER_USRNAME_EMAIL", "لطفا ايميل يا نام کاربري خود را وارد نماييد "); // admin php hover field admin name
define("LAN_PWD_REQUIRED", "پسوورد ضروريست"); // admin php hover field admin password
define("LAN_SHOW", "نمايش");
define("LAN_GENERATE", "عمومي");
define("LAN_SUMMARY", "خلاصه");  // TODO   more files use summary replace
define("LAN_REQUIRED_BLANK", "فيلد هاي مورد نياز خالي هستند");
define("LAN_PLEASEWAIT", "لطفا صبر کنيد");
define("LAN_CHOOSE_FILE", "انتخاب فايل");

?>
