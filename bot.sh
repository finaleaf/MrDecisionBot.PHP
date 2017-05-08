#php -f /opt/MrDecisionBot/bot.php

PROCESS_NUM=$(ps -ef | grep "bot.php" | grep -v "grep" | wc -l)
# for degbuging...
#$PROCESS_NUM
if [ $PROCESS_NUM -eq 1 ];
then
    echo "running" 
else
   
        nohup php -f /opt/MrDecisionBot/bot.php &
     
fi
