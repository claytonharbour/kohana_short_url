<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-17 20:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 20:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 20:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 20:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 20:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/orm/guide/orm ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 20:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: modules/orm/guide/orm ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 21:06:27 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH/classes/controller/welcome.php [ 9 ]
2012-03-17 21:06:27 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH/classes/controller/welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:06:51 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH/classes/controller/welcome.php [ 7 ]
2012-03-17 21:06:51 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:06:54 --- ERROR: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH/classes/controller/welcome.php [ 7 ]
2012-03-17 21:06:54 --- STRACE: ErrorException [ 1 ]: Cannot instantiate abstract class Database ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:10:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 12 ]
2012-03-17 21:10:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:10:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 14 ]
2012-03-17 21:10:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ APPPATH/config/database.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:10:38 --- ERROR: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2012-03-17 21:10:38 --- STRACE: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:15:40 --- ERROR: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2012-03-17 21:15:40 --- STRACE: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:15:42 --- ERROR: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2012-03-17 21:15:42 --- STRACE: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:16:28 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'postgresql' at 'MODPATH/postgresql' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-03-17 21:16:28 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'postgresql' at 'MODPATH/postgresql' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/bootstrap.php(109): Kohana_Core::modules(Array)
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(102): require('/Library/Postgr...')
#2 {main}
2012-03-17 21:17:14 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/controller/welcome.php [ 7 ]
2012-03-17 21:17:14 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:18:03 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH/postgresql/classes/kohana/database/postgresql.php [ 12 ]
2012-03-17 21:18:03 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ MODPATH/postgresql/classes/kohana/database/postgresql.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:18:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL::select() ~ APPPATH/classes/controller/welcome.php [ 7 ]
2012-03-17 21:18:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL::select() ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:18:42 --- ERROR: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
2012-03-17 21:18:42 --- STRACE: ErrorException [ 1 ]: Class 'Database_Pgsql' not found ~ MODPATH/database/classes/kohana/database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:20:50 --- ERROR: Database_Exception [ 0 ]: ERROR:  relation "Urls" does not exist
LINE 1: SELECT * FROM "Urls"
                      ^
 [ SELECT * FROM "Urls" ] ~ MODPATH/postgresql/classes/kohana/database/postgresql.php [ 192 ]
2012-03-17 21:20:50 --- STRACE: Database_Exception [ 0 ]: ERROR:  relation "Urls" does not exist
LINE 1: SELECT * FROM "Urls"
                      ^
 [ SELECT * FROM "Urls" ] ~ MODPATH/postgresql/classes/kohana/database/postgresql.php [ 192 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM "...', false, Array)
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(9): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Welcome->action_index()
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-17 21:21:32 --- ERROR: Database_Exception [ 0 ]: ERROR:  relation "public.Urls" does not exist
LINE 1: SELECT * FROM "public"."Urls"
                      ^
 [ SELECT * FROM "public"."Urls" ] ~ MODPATH/postgresql/classes/kohana/database/postgresql.php [ 192 ]
2012-03-17 21:21:32 --- STRACE: Database_Exception [ 0 ]: ERROR:  relation "public.Urls" does not exist
LINE 1: SELECT * FROM "public"."Urls"
                      ^
 [ SELECT * FROM "public"."Urls" ] ~ MODPATH/postgresql/classes/kohana/database/postgresql.php [ 192 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/modules/database/classes/kohana/database/query.php(245): Kohana_Database_PostgreSQL->query(1, 'SELECT * FROM "...', false, Array)
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(9): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Welcome->action_index()
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-17 21:21:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/welcome.php [ 11 ]
2012-03-17 21:21:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/welcome.php [ 11 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Library/Postgr...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 21:21:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/welcome.php [ 11 ]
2012-03-17 21:21:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH/classes/controller/welcome.php [ 11 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/Library/Postgr...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 21:22:05 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/welcome.php [ 11 ]
2012-03-17 21:22:05 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:24:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/welcome.php [ 13 ]
2012-03-17 21:24:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/controller/welcome.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:24:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/welcome.php [ 10 ]
2012-03-17 21:24:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/controller/welcome.php [ 10 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Library/Postgr...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 21:24:48 --- ERROR: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/welcome.php [ 15 ]
2012-03-17 21:24:48 --- STRACE: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/controller/welcome.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:26:32 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/welcome.php [ 12 ]
2012-03-17 21:26:32 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/welcome.php [ 12 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', '/Library/Postgr...', 12, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 21:28:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/welcome.php [ 9 ]
2012-03-17 21:28:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:31:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$db ~ APPPATH/classes/controller/welcome.php [ 7 ]
2012-03-17 21:31:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$db ~ APPPATH/classes/controller/welcome.php [ 7 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/Library/Postgr...', 7, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 21:32:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::result_array() ~ APPPATH/classes/controller/welcome.php [ 10 ]
2012-03-17 21:32:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::result_array() ~ APPPATH/classes/controller/welcome.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 21:54:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL::select() ~ APPPATH/classes/controller/welcome.php [ 8 ]
2012-03-17 21:54:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_PostgreSQL::select() ~ APPPATH/classes/controller/welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 22:18:43 --- ERROR: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-17 22:18:43 --- STRACE: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/view.php(334): Kohana_View->set_filename(true)
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(12): Kohana_View->render(true)
#2 [internal function]: Controller_Welcome->action_index()
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-17 22:20:29 --- ERROR: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-17 22:20:29 --- STRACE: View_Exception [ 0 ]: The requested view 1 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/view.php(334): Kohana_View->set_filename(true)
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/application/classes/controller/welcome.php(13): Kohana_View->render(true)
#2 [internal function]: Controller_Welcome->action_index()
#3 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-17 22:21:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/home.php [ 15 ]
2012-03-17 22:21:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH/views/home.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 23:35:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:35:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:35:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:35:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:36:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:36:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:36:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:36:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:36:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:36:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:37:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:37:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:37:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:37:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:40:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:40:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:40:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:40:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:42:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:42:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:42:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:42:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:42:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:42:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:44:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:44:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:45:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:45:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:45:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:45:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:45:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:45:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-03-17 23:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:46:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:46:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:46:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:46:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:48:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:48:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:49:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:49:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:49:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:49:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:49:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-17 23:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL shorten_url was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 23:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 23:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-17 23:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Library/PostgreSQL/EnterpriseDB-ApachePhp/apache/www/index.php(109): Kohana_Request->execute()
#1 {main}