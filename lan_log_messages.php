<?php
/*
 * Copyright (C) 2008-2013 e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 *
 * Admin Language File
 *
*/

/*
The definitions in this file are for standard "explanatory" messages which might be entered
into any of the system logs. They are in three groups with different prefixes:
	LAN_ADMIN_LOG_nnn - the admin log (records intentional actions by admins)
	LAN_AUDIT_LOG_nnn - the audit log (records actions, generally intentional, by users)
	LAN_ROLL_LOG_nnn - the rolling log (records extraneous events, debugging etc)
*/


// User audit trail events. For messages 11-30, the last 2 digits must match the define for the event type in the admin log class file
define("LAN_AUDIT_LOG_001", "دسترسي به کاربران تحريم شده");
define("LAN_AUDIT_LOG_002", "محافظ طغيان فعال شد");
define("LAN_AUDIT_LOG_003", "دسترسي به ادرس اي پي تحريم شده");
define("LAN_AUDIT_LOG_004", "");
define("LAN_AUDIT_LOG_005", "");
define("LAN_AUDIT_LOG_006", "کاربر رمز خود را تغيير داد");
define("LAN_AUDIT_LOG_007", "کاربر ايميل خود را تغيير داد");
define("LAN_AUDIT_LOG_008", "");
define("LAN_AUDIT_LOG_009", "");
define("LAN_AUDIT_LOG_010", "اطلاعات کاربر توسط مدير تغيير کرد");
define("LAN_AUDIT_LOG_011", "کاربر عضو شد");
define("LAN_AUDIT_LOG_012", "کاربر عضويت را تاييد کرد");
define("LAN_AUDIT_LOG_013", "ورود کاربر");
define("LAN_AUDIT_LOG_014", "خروج کاربر");
define("LAN_AUDIT_LOG_015", "کاربر نام نمايشي خود را تغيير داد");
define("LAN_AUDIT_LOG_016", "کاربر رمز عبور خود را تغيير داد");
define("LAN_AUDIT_LOG_017", "کاربر ادرس ايميل خود را تغيير داد");
define("LAN_AUDIT_LOG_018", "کاربر رمز عبور خود را بازنشاني کرد");
define("LAN_AUDIT_LOG_019", "کاربر تنظيمات را تغيير داد");
define("LAN_AUDIT_LOG_020", "کاربري توسط مدير افزوده شد");
define("LAN_AUDIT_LOG_021", "بيرون انداختن ايميل کاربر");
define("LAN_AUDIT_LOG_022", "کاربر تحريم شد");
define("LAN_AUDIT_LOG_023", "بازنشاني بيرون کردن کاربر");
define("LAN_AUDIT_LOG_024", "وضعيت موقت کاربر");


// Admin log events
//-----------------
define("LAN_AL_ADLOG_01", "وقايع مدير - از ابتدا تا انتها بروزرساني شد");
define("LAN_AL_ADLOG_02", "وقايع مدير - حذف اطلاعات قديمي");
define("LAN_AL_ADLOG_03", "رسيدگي وقايع کاربر - حذف اطلاعات قديمي");
define("LAN_AL_ADLOG_04", "گزينه هاي رسيدگي به کاربر بروزرساني شد");
define("LAN_AL_ADLOG_05", "");

// User edits
//-----------
define("LAN_AL_USET_01", "مدير اطلاعات کاربر را ويرايش کرد");
define("LAN_AL_USET_02", "کاربري توسط مدير افزوده شد");
define("LAN_AL_USET_03", "گزينه هاي کاربري بروزرساني شد");
define("LAN_AL_USET_04", "هرس کاربران");
define("LAN_AL_USET_05", "کاربر تحريم شد");
define("LAN_AL_USET_06", "کاربر از تحريم خارج شد");
define("LAN_AL_USET_07", "کاربر حذف شد");
define("LAN_AL_USET_08", "کاربر ساخته شده مدير");
define("LAN_AL_USET_09", "وضعيت کاربر مدير فسخ شد");
define("LAN_AL_USET_10", "کاربر تاييد شد");
define("LAN_AL_USET_11", "ارسال دوباره ايميل فعال سازي");
define("LAN_AL_USET_12", "ارسال همه ايميل هاي فعال سازي");
define("LAN_AL_USET_13", "ايميل هاي بيرون شده حذف شد");
define("LAN_AL_USET_14", "کلاس عضويت بروزرساني شد");
define("LAN_AL_USET_15", "نپذيرفتن ثبت نام");				// Too many users at same IP address

// Userclass events
//------------------
define("LAN_AL_UCLASS_00", "رويداد کلاس کاربري وابسته ناشناخته");
define("LAN_AL_UCLASS_01", "کلاس کاربري ساخته شد");
define("LAN_AL_UCLASS_02", "کلاس کاربري حذف شد");
define("LAN_AL_UCLASS_03", "کلاس کاربري ويرايش شد");
define("LAN_AL_UCLASS_04", "کلاس عضويت بروزرساني شد");
define("LAN_AL_UCLASS_05", "تنظيمات نخستين کلاس کاربري ويرايش شد");
define("LAN_AL_UCLASS_06", "کلاس عضويت خاليست");

// Banlist events
//----------------
define("LAN_AL_BANLIST_00", "رويداد وابسته به تحريم ناشناخته");
define("LAN_AL_BANLIST_01", "تحريم معمولي افزوده شد");
define("LAN_AL_BANLIST_02", "تحريم حذف شد");
define("LAN_AL_BANLIST_03", "زمان تحريم تغيير يافت");
define("LAN_AL_BANLIST_04", "ورودي ليست سفيد افزوده شد");
define("LAN_AL_BANLIST_05", "ورودي ليست سفيد حذف شد");
define("LAN_AL_BANLIST_06", "ليست تحريم صادر شد");
define("LAN_AL_BANLIST_07", "ليست تحريم وارد شد");
define("LAN_AL_BANLIST_08", "گزينه هاي ليست تحريم بروزرساني شد");
define("LAN_AL_BANLIST_09", "ورودي ليست تحريم ويرايش شد");
define("LAN_AL_BANLIST_10", "ورودي ليست سفيد ويرايش شد");
define("LAN_AL_BANLIST_11", "برخورد ليست سفيد جهت تحريم ورودي");
define("LAN_AL_BANLIST_12", "تاريخ انقضاي تحريم ها پاک شد");


// Comment-related events
//-----------------------
define("LAN_AL_COMMENT_01", "نظر(ها) حذف شد ");

// Rolling log events
//-------------------
define("LAN_ROLL_LOG_01", "نام کاربري /رمزعبور خالي");
define("LAN_ROLL_LOG_02", "تصوير نادرست کد وارد شده");
define("LAN_ROLL_LOG_03", "ترکيب نامعتبر نام کاربري/رمزعبور");
define("LAN_ROLL_LOG_04", "نام کاربري وارد شده نامعتبر است");
define("LAN_ROLL_LOG_05", "قصد ورود براي کاربري که ثبت نامش کامل نشده");
define("LAN_ROLL_LOG_06", "ورود بلاک شده توسط رويداد راه انداز نگهدارنده");
define("LAN_ROLL_LOG_07", "چندين ورودي از چند ادرس");
define("LAN_ROLL_LOG_08", "طول نام کاربري بيش از اندازه است");
define("LAN_ROLL_LOG_09", "کاربري که قصد ورود داشت تحريم شد");
define("LAN_ROLL_LOG_10", "خطاي ورود - بدليل ناشناخته");
define("LAN_ROLL_LOG_11", "خطاي ورود مدير");

// Prefs events
//-------------
define("LAN_AL_PREFS_01", "اولويت تغيير يافته");
define("LAN_AL_PREFS_02", "اولويت جديد ساخته شد");
define("LAN_AL_PREFS_03", "خطاي ذخيره اولويت");


// Front Page events
//------------------
define("LAN_AL_FRONTPG_00", "رويداد ناشناخته وابسته به فرانت پيج");
define("LAN_AL_FRONTPG_01", "ترتيب دستورات تغيير يافت");
define("LAN_AL_FRONTPG_02", "دستوري افزوده شد");
define("LAN_AL_FRONTPG_03", "دستوري ويرايش شد");
define("LAN_AL_FRONTPG_04", "دستوري حذف شد");
define("LAN_AL_FRONTPG_05", "");
define("LAN_AL_FRONTPG_06", "");


// User theme admin
//-----------------
define("LAN_AL_UTHEME_00", "رويداد رابط قالب کاربر ناشناخته");
define("LAN_AL_UTHEME_01", "تنظيمات قالب کاربر تغيير کرد");
define("LAN_AL_UTHEME_02", "");


// Update routines
//----------------
define("LAN_AL_UPDATE_00", "رويداد رابط بروزرساني نرم افزار ناشناخته");
define("LAN_AL_UPDATE_01", "بروزرساني از 1.0 به 2.0 اجرا شد");
define("LAN_AL_UPDATE_02", "بروزرساني از 0.7.x به 0.7.6 اجرا شد");
define("LAN_AL_UPDATE_03", "اولويت ازدست رفته افزوده شد");


// Administrator routines
//-----------------------
define("LAN_AL_ADMIN_00", "رويداد مديريت ناشناخته");
define("LAN_AL_ADMIN_01", "بروزرساني دسترسي هاي مدير");
define("LAN_AL_ADMIN_02", "حقوق مدير حذف شد");
define("LAN_AL_ADMIN_03", "");

// Maintenance mode
//-----------------
define("LAN_AL_MAINT_00", "سرويس پيام ناشناخته");
define("LAN_AL_MAINT_01", "قرار دادن مد سرويس");
define("LAN_AL_MAINT_02", "مد سرويس پاک شد");


// Sitelinks routines
//-------------------
define("LAN_AL_SLINKS_00", "پيام لينک هاي سايت ناشناخته");
define("LAN_AL_SLINKS_01", "ساب لينک ها توليد شد");
define("LAN_AL_SLINKS_02", "لينک سايت به بالا حرکت داده شد");
define("LAN_AL_SLINKS_03", "لينک سايت پايين رفت");
define("LAN_AL_SLINKS_04", "ارايش لينک سايت بروزرساني شد");
define("LAN_AL_SLINKS_05", "گزينه هاي لينک هاي سايت بروزرساني شد");
define("LAN_AL_SLINKS_06", "لينک سايت حذف شد");
define("LAN_AL_SLINKS_07", "لينک سايت ثبت شد");
define("LAN_AL_SLINKS_08", "لينک سايت بروزرساني شد");


// Theme manager routines
//-----------------------
define("LAN_AL_THEME_00", "پيام قالب وابسته ناشناخته");
define("LAN_AL_THEME_01", "قالب سايت بروزرساني شد");
define("LAN_AL_THEME_02", "قالب مدير بروزرساني شد");
define("LAN_AL_THEME_03", "تصوير پيشبارگيري/سايت CSS بروزرساني شد");
define("LAN_AL_THEME_04", "مدير style/CSS بروزرساني شد");
define("LAN_AL_THEME_05", "");


// Cache control routines
//-----------------------
define("LAN_AL_CACHE_00", "پيام کنترل کش ناشناخته");
define("LAN_AL_CACHE_01", "تنظيمات کش بروزرساني شد");
define("LAN_AL_CACHE_02", "کش سيستم خاليست");
define("LAN_AL_CACHE_03", "کش محتوا خاليست");
define("LAN_AL_CACHE_04", "");


// Emote admin
//------------
define("LAN_AL_EMOTE_00", "پيام خندانک وابسته ناشناخته");
define("LAN_AL_EMOTE_01", "پک خندانک فعال تغيير يافت");
define("LAN_AL_EMOTE_02", "خندانک ها فعال شدند");
define("LAN_AL_EMOTE_03", "خندانک ها غيرفعال شدند");


// Welcome message
//----------------
define("LAN_AL_WELCOME_00", "پيام وابسته به خوش امد گويي ناشناخته");
define("LAN_AL_WELCOME_01", "پيام خوش امدگويي ساخته شد");
define("LAN_AL_WELCOME_02", "پيام خوش امدگويي ساخته شد");
define("LAN_AL_WELCOME_03", "پيام خوش امدگويي حذف شد");
define("LAN_AL_WELCOME_04", "گزينه هاي پيام خوش امدگويي تغيير يافت");
define("LAN_AL_WELCOME_05", "");


// Admin Password
//---------------
define("LAN_AL_ADMINPW_01", "رمز مدير تغيير يافت");


// Banners Admin
//--------------
define("LAN_AL_BANNER_00", "پيام به بنر وابسته ناشناخته");
define("LAN_AL_BANNER_01", "منوي بنر بروزرساني شد");
define("LAN_AL_BANNER_02", "بنر ساخته شد");
define("LAN_AL_BANNER_03", "بنر بروزرساني شد");
define("LAN_AL_BANNER_04", "بنر حذف شد");
define("LAN_AL_BANNER_05", "پيکربندي بنر بروزرساني شد");
define("LAN_AL_BANNER_06", "");

// Image management
//-----------------
define("LAN_AL_IMALAN_00", "پيام به تصوير وابسته نالشناخته");
define("LAN_AL_IMALAN_01", "اواتار حذف شد");
define("LAN_AL_IMALAN_02", "همه اواتار ها و عکس ها حذف شد");
define("LAN_AL_IMALAN_03", "اواتار حذف شد");
define("LAN_AL_IMALAN_04", "تنظيمات بروزرساني شد");
define("LAN_AL_IMALAN_05", "");
define("LAN_AL_IMALAN_06", "");

// Language management
//--------------------
define("LAN_AL_LANG_00", "پيام به زبان وابسته ناشناخته");
define("LAN_AL_LANG_01", "اولويت زبان تغيير يافت");
define("LAN_AL_LANG_02", "جداول زبان حذف شد");
define("LAN_AL_LANG_03", "جداول زبان ساخته شد");
define("LAN_AL_LANG_04", "zip براي زبان ساخته شد");
define("LAN_AL_LANG_05", "");

// Meta Tags
//----------
define("LAN_AL_META_01", "ابر برچسب ها بروزرساني شد");

// Downloads
//----------
define("LAN_AL_DOWNL_01", "گزينه هاي دانلود تغيير يافت");
define("LAN_AL_DOWNL_02", "دسته دانلود ساخته شد ");
define("LAN_AL_DOWNL_03", "دسته دانلود بروزرساني شد");
define("LAN_AL_DOWNL_04", "دسته دانلود حذف شد");
define("LAN_AL_DOWNL_05", "دانلود ساخته شد");
define("LAN_AL_DOWNL_06", "دانلود بروزرساني شد");
define("LAN_AL_DOWNL_07", "دانلود حذف شد");
define("LAN_AL_DOWNL_08", "دسته دانلود بطور منظم بروزرساني شد");
define("LAN_AL_DOWNL_09", "محدوديت دانلود افزوده شد");
define("LAN_AL_DOWNL_10", "محدوديت دانلود ويرايش شد");
define("LAN_AL_DOWNL_11", "محدوديت دانلود حذف شد");
define("LAN_AL_DOWNL_12", "مسير دانلود افزوده شد");
define("LAN_AL_DOWNL_13", "مسير دانلود بروزرساني شد");
define("LAN_AL_DOWNL_14", "مسير دانلود حذف شد");
define("LAN_AL_DOWNL_15", "");

// Custom Pages/Menus
//-------------------
define("LAN_AL_CPAGE_01", "صفحه/منوي انتخابي افزوده شد");
define("LAN_AL_CPAGE_02", "صفحه / منوي انتخابي بروزرساني شد");
define("LAN_AL_CPAGE_03", "صفحه/منوي انتخابي حذف شد");
define("LAN_AL_CPAGE_04", "تنظيمات انتخابي صفحه/ منو بروزرساني شد");

// Extended User Fields
//---------------------
define("LAN_AL_EUF_01", "EUF حرکت به بالا");
define("LAN_AL_EUF_02", "EUF حرکت به پايين");
define("LAN_AL_EUF_03", "EUF دسته به بالا حرکت کرد");
define("LAN_AL_EUF_04", "EUF دسته به پايين حرکت کرد");
define("LAN_AL_EUF_05", "فيلد توسعه يافته کاربر افزوده شد");
define("LAN_AL_EUF_06", "فيلد توسعه يافته کاربر بروزرساني شد");
define("LAN_AL_EUF_07", "فيلد توسعه يافته کاربر حذف شد");
define("LAN_AL_EUF_08", "EUF دسته افزوده شد");
define("LAN_AL_EUF_09", "EUF دسته بروزرساني شد");
define("LAN_AL_EUF_10", "EUF دسته حذف شد");
define("LAN_AL_EUF_11", "فيلد هاي توسعه يافته کاربر فعال شد");
define("LAN_AL_EUF_12", "فيلد هاي توسعه يافته کاربر غيرفعال شد");

// Menus
//------
define("LAN_AL_MENU_01", "منو فعال شد");
define("LAN_AL_MENU_02", "منو - قابل ديدن کنيد");
define("LAN_AL_MENU_03", "منو - تغيير بخش");
define("LAN_AL_MENU_04", "منو غيرفعال شد");
define("LAN_AL_MENU_05", "منو - حرکت به نوک");
define("LAN_AL_MENU_06", "منو - حرکت به پايين");
define("LAN_AL_MENU_07", "منو - بالا رفتن");
define("LAN_AL_MENU_08", "منو - پايين رفتن");
define("LAN_AL_MENU_09", "");

// Public Uploads
//---------------
define("LAN_AL_UPLOAD_01", "فايل اپلود شده حذف شد");
define("LAN_AL_UPLOAD_02", "اولويت اپلود تغيير يافت");

// Search
//-------
define("LAN_AL_SEARCH_01", "تنظيمات جستجو بروزرساني شد");
define("LAN_AL_SEARCH_02", "اولويت جستجو بروزرساني شد");
define("LAN_AL_SEARCH_03", "پرامتر جستجوي بروزرساني اتومات");
define("LAN_AL_SEARCH_04", "مناطق قابل جستجو بروزرساني شد");
define("LAN_AL_SEARCH_05", "تنظيمات دستي جستجو بروزرساني شد");
define("LAN_AL_SEARCH_06", "");

// Notify
//-------
define("LAN_AL_NOTIFY_01", "تنظيمات اگهي بروزرساني شد");

// News
//-----
define("LAN_AL_NEWS_01", "ايتم خبري حذف شد");
define("LAN_AL_NEWS_02", "دسته اخبار حذف شد");
define("LAN_AL_NEWS_03", "اخبار ثبت شده حذف شد");
define("LAN_AL_NEWS_04", "دسته اخبار ساخته شد");
define("LAN_AL_NEWS_05", "دسته اخبار بروزرساني شد");
define("LAN_AL_NEWS_06", "اولويت خبر بروزرساني شد");
define("LAN_AL_NEWS_07", "اخبار ثبت شده مجاز شد");
define("LAN_AL_NEWS_08", "ايتم خبري افزوده شد");
define("LAN_AL_NEWS_09", "ايتم خبري بروزرساني شد");
define("LAN_AL_NEWS_10", "بازنويسي دسته خبر تغيير يافت");
define("LAN_AL_NEWS_11", "بازنويسي دسته خبر حذف شد");
define("LAN_AL_NEWS_12", "بازنويسي خبر تغيير يافت");
define("LAN_AL_NEWS_13", "بازنويسي خبر حذف شد");

// File Manager
//-------------
define("LAN_AL_FILEMAN_01", "فايل (ها)حذف شدند");
define("LAN_AL_FILEMAN_02", "فايل (ها)انتقال يافت");
define("LAN_AL_FILEMAN_03", "فايل (ها)بروزرساني شد");
define("LAN_AL_FILEMAN_04", "");

// Mail
//-----
define("LAN_AL_MAIL_01", "ايمل ازمايشي فرستاده شد");
define("LAN_AL_MAIL_02", "ميل شوت ساخته شد");
define("LAN_AL_MAIL_03", "تنظيمات ايميل بروزرساني شد");
define("LAN_AL_MAIL_04", "جزييات ميل شوت حذف شد");
define("LAN_AL_MAIL_05", "ايميل منظم ديتابيس");
define("LAN_AL_MAIL_06", "خروجي نامه فعال شد");
define("LAN_AL_MAIL_07", "");

// Plugin Manager
//---------------
define("LAN_AL_PLUGMAN_01", "پلاگين نصب شد");
define("LAN_AL_PLUGMAN_02", "پلاگين بروزرساني شد");
define("LAN_AL_PLUGMAN_03", "پلاگين نصب نشد");
define("LAN_AL_PLUGMAN_04", "پلاگين تازه شد");

// URL Manager
//---------------
define("LAN_AL_EURL_01", "پيکربندي ادرس سايت تغيير يافت");

// Sundry Pseudo-plugins - technically they"re plugins, but not worth the file overhead of treating them separately
//----------------------
define("LAN_AL_MISC_01", "تنظيمات منوي درختي بروزرساني شد");
define("LAN_AL_MISC_02", "تنظيمات منوي انلاين بروزرساني شد");
define("LAN_AL_MISC_03", "تنظيمات منوي ورود بروزرساني شد");
define("LAN_AL_MISC_04", "تنظيمات منوي نظر بروزرساني شد");
define("LAN_AL_MISC_05", "تنظيمات منوي ساعت بروزرساني شد");
define("LAN_AL_MISC_06", "تنظيمات منوي تقويم بلاگ بروزرساني شد");
define("LAN_AL_MISC_07", "");


define("LAN_AL_PING_01", "پينگ براي سرويس");

define("LAN_AL_ADMINUI_01", "Admin-UI DB وارد نمودن جدول: [x]");
define("LAN_AL_ADMINUI_02", "Admin-UI DB بروزرساني جدول: [x]");
define("LAN_AL_ADMINUI_03", "Admin-UI DB حذف جدول: [x]");
define("LAN_AL_ADMINUI_04", "Admin-UI DB خطا: [x]");

define("LAN_AL_BACKUP", "پشتيبانگيري ديتابيس");


?>
