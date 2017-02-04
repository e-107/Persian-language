<?php
/*
 * Copyright 2008-2010 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Validator Handler - Language File
*/

/*
 * Default error messages by Error code number
 */ 
define("LAN_VALIDATE_0",   "خطاي نا مشخص");
define("LAN_VALIDATE_101", "مقدار نامعلوم");
define("LAN_VALIDATE_102", "نوع مقدار غير منتظره");
define("LAN_VALIDATE_103", "کاراکتر هاي موجود نامعتبرند");
define("LAN_VALIDATE_104", "ادرس ايميل نامعتبر است");
define("LAN_VALIDATE_105", "فيلد ها مطابقت ندارد" );
define("LAN_VALIDATE_131", "رشته کوتاه است");
define("LAN_VALIDATE_132", "رشته کمي بزرگ است");
define("LAN_VALIDATE_133", "شماره کوتاه است");
define("LAN_VALIDATE_134", "شماره بزرگ است");
define("LAN_VALIDATE_135", "ارايه شمارنده کوتاه است");
define("LAN_VALIDATE_136", "ارايه شمارنده بزرگ است");
define("LAN_VALIDATE_151", "شماره از نوع صحيح مد نظر باشد");
define("LAN_VALIDATE_152", "شماره از نوع شناور باشد");
define("LAN_VALIDATE_153", "نوع نمونه مد نظر باشد");
define("LAN_VALIDATE_154", "نوع ارايه باشد");
define("LAN_VALIDATE_191", "مقدار خالي باشد");
define("LAN_VALIDATE_201", "فايل موجود نيست");
define("LAN_VALIDATE_202", "فايل قابل نوشتن نيست");
define("LAN_VALIDATE_203", "فايل از اندازه مشخص شده تجاوز کرده");
define("LAN_VALIDATE_204", "اندازه فايل از حد مشخص شده کمتر است");
//define("LAN_VALIDATE_", "");

/*
 * TRANSLATION INSTRUCTIONS:
 * Don"t translate %1$s, %2$s, %3$s, etc.
 * 
 * These are substituted by validator handler:
 * %1$s - field name
 * %2$d - validation error code (number)
 * %3$s - validation error message (string)
 */

// define("LAN_VALIDATE_FAILMSG", "<strong>&quot;%1$s&quot;</strong> validation error: [#%2$d] %3$s.");

 //FIXME - use this instead: 
define("LAN_VALIDATE_FAILMSG", "[x] خطاي معتبر سازي: [y] [z].");