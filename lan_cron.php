<?php
/*
 * Copyright (C) 2008-2013 e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 *
 * Admin Language File
 *
*/

if (!defined("PAGE_NAME")) { define("PAGE_NAME", "زمانبندي وظايف"); }

// Menu
define("LAN_CRON_M_02", "تازه کردن");

// Table heading

define("LAN_CRON_2", "تابع");
define("LAN_CRON_3", "تب");
define("LAN_CRON_4", "اخرين اجرا");

// Default crons
define("LAN_CRON_01_1", "ايميل ازمايشي");
define("LAN_CRON_01_2", "ارسال ايميل ازمايشي به [eml]."); // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_01_3", "پيشنهاد  شده براي ازمايش سيستم زمانبندي.");

define("LAN_CRON_02_1", "صف نامه");
define("LAN_CRON_02_2", "پردازش صف ايميل");

define("LAN_CRON_03_1", "چک پرش نامه");
define("LAN_CRON_03_2", "چک براي نامه هاي پرت شده.");

define("LAN_CRON_04_1", "چک براي راه اندازي تحريم");
define("LAN_CRON_04_2", "فرايند راه اندازي مجدد پرتاب کردن.");
define("LAN_CRON_04_3", "فقط نياز داريد اگر تحريم راه اندازي تحريم فعال باشد.");

define("LAN_CRON_05_1", "پشتيبانگيري ديتابيس");
define("LAN_CRON_05_2", "پشتيبانگيري از ديتابيس سيستم به");


// Error and info messages
define("LAN_CRON_6", "Couldn't Import Prefs");
define("LAN_CRON_7", "تنظيمات زماني وارد نميشود");
define("LAN_CRON_8", "تنظيمات زماني وارد شده براي");

define("LAN_CRON_9", "[x] دقيقه ها و [y] ثانيه هاي پيش."); // [x] and [y] are automatically replaced.
define("LAN_CRON_10", "[y] ثانيه هاي پيش.");

define("LAN_CRON_11", "تغيير مسير هاي فعال");
define("LAN_CRON_12", "تازه کردن اخرين تغيير مسير");
define("LAN_CRON_13", "لطفا اطمينان حاصل نماييد که cron.php قابل اجراست.");
define("LAN_CRON_14", "لطفا مد قابليت خواندن و نوشتن فايل /cron.php را به 755 تغيير دهيد");

define("LAN_CRON_15", "استفاده از دستور پيگيري تغيير مسير");
define("LAN_CRON_16", "استفاده از کنترل پنل سرور( cPanel, DirectAdmin, Plesk etc.) لطفا یک تب تغییر مسیر بسازید برای اجرای این دستور روی سرور شما در هر دقیقه");

// leave some room for additions/changes

// Info for checkCoreUpdate cron
define("LAN_CRON_20_1", "چک براي بروزرساني e107");
define("LAN_CRON_20_2", "چک براي اتصال به سايت e107.org جهت بروزرساني هسته"); // [eml] is automatically replaced by head admin e-mail address.
define("LAN_CRON_20_3", "پيشنهاد براي نگهداري سيستم جهت بروز -رساني");
define("LAN_CRON_20_4", "بروزرساني براي اين مخزن گيت");
define("LAN_CRON_20_5", "بروز رساني اين قسمت مربوط به فايلهاي گيت هاب github هستند.");
define("LAN_CRON_20_6", "پيشنهاد شده فقط براي برنامه نويسان");
define("LAN_CRON_20_7", "اخطار!");
define("LAN_CRON_20_8", "دلايل بي ثباتي سايت من!");

define("LAN_CRON_30", "هر دقيقه");
define("LAN_CRON_31", "ساير دقايق");
define("LAN_CRON_32", "هر 5 دقيقه");
define("LAN_CRON_33", "هر ده دقيقه");
define("LAN_CRON_34", "هر پانزده دقيقه");
define("LAN_CRON_35", "هر سي دقيقه");

define("LAN_CRON_36", "هر ساعت");
define("LAN_CRON_37", "هر ساعت متفاوت");
define("LAN_CRON_38", "هر سه ساعت");
define("LAN_CRON_39", "هر شش ساعت");

define("LAN_CRON_40", "هر روز");
define("LAN_CRON_41", "هر ماه");
define("LAN_CRON_42", "هر روز هفته");

define("LAN_CRON_50", "دقيقه(ها):");
define("LAN_CRON_51", "ساعت(ها):");
define("LAN_CRON_52", "روز(ها):");
define("LAN_CRON_53", "ماه(ها):");
define("LAN_CRON_54", "روز هفته(ها):");

define("LAN_CRON_60", "برو به پانل");
define("LAN_CRON_61", "توليد رمز عبور کرون");
define("LAN_CRON_62", "اجراي تابع پيکربندي [b][x][/b]");
define("LAN_CRON_63", "وجود ندارد [b][x][/b] پيکربندي تابع.");
define("LAN_CRON_64", "مدير مي تواند با استفاده از e107 وضايف را خودکار کند [br]
In the Manage Tab, you can edit, delete and run tasks. [br]
When you edit a task you can set the minutes, hours, days, month or day of the week you want the task to run. Use * to run for each period. Use the Active property to Enabled the Task.[br]
Note: You are advised not to delete standard jobs.[br]
");
define("LAN_CRON_BACKUP", "پشتيبان");
define("LAN_CRON_LOGGING", "وارد شونده");
define("LAN_CRON_RUNNING", "اجرا شونده")

?>