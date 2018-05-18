# Anonymizing PHP script running through TOR network
1. You sould setup your TOR server <br /> 1.1 Important step is to setup 
<br /> <code>/etc/tor/torrc</code> -> add <code>MaxCircuitDirtiness 
10</code> <br /> 2. Setup your PHP variables correct <br /> 3. Add it as cronjob (optional)
# You can use simple bash script like this for cronjob to run every 5 seconds
<code> (sleep 5 && php /path/bot.php) & (sleep 10 && php /path/bot.php) 
& (sleep 15 && php /path/bot.php) & ...
</code>
