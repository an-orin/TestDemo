import os,sys
import requests,json
from time import sleep
from datetime import datetime, timedelta
import base64,requests,os
#màu
xnhac = "\033[1;36m"
do = "\033[1;31m"
luc = "\033[1;32m"
vang = "\033[1;33m"
xduong = "\033[1;34m"
hong = "\033[1;35m"
trang = "\033[1;37m"
whiteb="\033[1;37m"
red="\033[0;31m"
redb="\033[1;31m"
end='\033[0m'
#đánh dấu bản quyền
ndp_tool="\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=>  "
thanh = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -"
#Config
__ZALO__ = '0777374145'
__ADMIN__ = 'An Orin'
__FACEBOOK__ = 'anorintool'
__VERSION__ = '1.0'
def banner():
 banner = f"""
\033[1;34m  █████╗ ███╗   ██╗     ██████╗ ██████╗ ██╗███╗   ██╗
\033[1;37m ██╔══██╗████╗  ██║    ██╔═══██╗██╔══██╗██║████╗  ██║
\033[1;34m ███████║██╔██╗ ██║    ██║   ██║██████╔╝██║██╔██╗ ██║
\033[1;37m ██╔══██║██║╚██╗██║    ██║   ██║██╔══██╗██║██║╚██╗██║
\033[1;34m ██║  ██║██║ ╚████║    ╚██████╔╝██║  ██║██║██║ ╚████║
\033[1;37m ╚═╝  ╚═╝╚═╝  ╚═══╝     ╚═════╝ ╚═╝  ╚═╝╚═╝╚═╝  ╚═══╝
\033[1;31m────────────────────────────────────────────────────────────
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;33mTOOL GỘP PYTHON FREE 1.0
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;35mADMIN: \033[1;36mAN ORIN
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;36mFB: \033[1;31manorintool
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mBOX SUPPORT: \033[1;37mhttps://zalo.me/g/dpfbxq529
\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;34mYOUTUBE: \033[1;37mhttps://youtube.com/@AnOrinTool403
\033[1;31m────────────────────────────────────────────────────────────
"""
 for X in banner:
  sys.stdout.write(X)
  sys.stdout.flush() 
  sleep(0.00125)
# =======================[ NHẬP KEY ]=======================
os.system("cls" if os.name == "nt" else "clear")
banner()
time = datetime.now()
a=time.strftime("%d")
h=int(time.strftime("%d"))
ngày_trc=h-1
b=time.strftime("%m")
day=time.strftime("%d-%m-%Y")
today=time.strftime("%d-%m-%Y")
d=time.strftime("%d-%m")
encodedBytes = base64.b64encode(d.encode("utf-8"))
key = str(encodedBytes, "utf-8")
long_url=(f"https://keyvip24h.net/giaodien/key.php?key={key}")
api_token='142d5b5b39a2b1f2224f33813108e8bbcf9c3cb6'
url=requests.get(f'https://link1s.com/api?api={api_token}&url={long_url}').json()
status=url['status']
link=url['shortenedUrl']
#lấy key
file_key=f'key-ngày{a}.txt'
file_key_cũ=f'key-ngày{ngày_trc}.txt'
check_file_key=os.path.exists(file_key)
if check_file_key == False:
   print(f"{ndp_tool}{luc}Đây Là Tool Free Nên Key Sẽ Thay Đổi Mỗi Ngày !!")
   print(f'{ndp_tool}{luc}Truy Cập Vào Link{trang}: {link} {luc}Để Lấy Key Miễn Phí')
   print(thanh)
   while(True):
      ma=input(f"{ndp_tool}{luc}Nhập API Key\033[1;32m Ngày \033[1;37m{today}: \033[1;33m")
      if ma == key:
         print(f'{ndp_tool}{luc}API Key Chính Xác')
         luu=open(file_key, 'a+')
         luu.write(ma)
         luu.close()
         break
      elif ma != key:
         print(f'{ndp_tool}{do}API Key Sai')
elif check_file_key == True:
    print(f'{ndp_tool}{luc}Đang Lấy Key...',end='\r')
    sleep(2)
    k=open(file_key, 'r')
    ma=k.read()
    k.close()
    if ma == key:
        print(f'{ndp_tool}{luc}Lấy Key Thành Công       ',end='\r')
        sleep(0)
    elif ma != key:
        if os.path.exists(file_key_cũ) == True:
            os.system(f'rm {file_key_cũ}')
        os.system(f'rm {file_key}')
        print(f'{ndp_tool}{do}API Key Sai         ')
        while(True):
            ma=input(f"{ndp_tool}{luc}Nhập API Key\033[1;32m Ngày \033[1;37m{today}: \033[1;33m")
            if ma == key:
                print(f'{ndp_tool}{luc}API Key Chính Xác')
                luu=open(file_key, 'a+')
                luu.write(ma)
                luu.close()
                break
            elif ma != key:
                print(f'{ndp_tool}{do}API Key Sai           ')

# ======================== [ HOME TOOL ] ======================== 

os.system("cls" if os.name == "nt" else "clear")
banner()
import json,requests,time
from time import strftime
print("\033[1;32mVui Lòng Chờ...\033[0m")
sleep(5)
os.system("cls" if os.name == "nt" else "clear")
banner()
def bongoc(so):
        a= "\033[1;31m────"*so
        for i in range(len(a)):
                sys.stdout.write(a[i])
                sys.stdout.flush()
                sleep(0.003)
        print()
print("\033[1;37m╔═════════════════════╗")
print("\033[1;37m║  \033[1;33mThông Tin Key      \033[1;37m║")
print("\033[1;37m╚═════════════════════╝")
print(f"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNgày Lấy Key: \033[1;33m{today}")
print(f"\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mKey Hiện Tại: \033[1;33m{key}")
bongoc(15)
print("\033[1;37m╔═════════════════════╗")
print("\033[1;37m║  \033[1;33mTool Trao Đổi Sub  \033[1;37m║")
print("\033[1;37m╚═════════════════════╝")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m1\033[1;31m] \033[1;32mTool TDS Pro5 ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m2\033[1;31m] \033[1;32mTool TDS Pro5 \033[1;31m[\033[1;33mV1\033[1;31m] ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m3\033[1;31m] \033[1;32mTool TDS TikTok ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m4\033[1;31m] \033[1;32mTool TDS FULL JOD ")
bongoc(15)
print("\033[1;37m╔═══════════════════════╗")
print("\033[1;37m║  \033[1;33mTool Tương Tác Chéo  \033[1;37m║")
print("\033[1;37m╚═══════════════════════╝")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m5\033[1;31m] \033[1;32mTool TTC TikTok ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m6\033[1;31m] \033[1;32mTool TTC Instagram ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m7\033[1;31m] \033[1;32mTool TTC Pro5 \033[1;31m[\033[1;33mTạm Ổn\033[1;31m] ")
bongoc(15)
print("\033[1;37m╔═════════════════════╗")
print("\033[1;37m║  \033[1;33mTiện Ích Facebook  \033[1;37m║")
print("\033[1;37m╚═════════════════════╝")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m8\033[1;31m] \033[1;32mTool Spam Message ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m9\033[1;31m] \033[1;32mTool Share Ảo Cookie")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m10\033[1;31m] \033[1;32mTool Add Friends ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m11\033[1;31m] \033[1;32mTool Nuôi Acc Facebook")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m12\033[1;31m] \033[1;32mTool Get Token FB")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m13\033[1;31m] \033[1;32mTool Spam Message Box")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m14\033[1;31m] \033[1;32mTool Spam CMT Emoji \033[1;31m[\033[1;33mĐa Luồng\033[1;31m] ")
bongoc(15)
print("\033[1;37m╔═════════════════════╗")
print("\033[1;37m║  \033[1;33mTool PROFILE       \033[1;37m║")
print("\033[1;37m╚═════════════════════╝")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m15\033[1;31m] \033[1;32mTool Buff View Story ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m16\033[1;31m] \033[1;32mTool Get Token Pro5 ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m17\033[1;31m] \033[1;32mTool Menber Group Pro5 ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m18\033[1;31m] \033[1;32mTool Share Ảo Pro5 ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m19\033[1;31m] \033[1;32mTool Reg Page Pro5 ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m20\033[1;31m] \033[1;32mTool Chuyển Quyền + Chấp Nhận Admin Page ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m21\033[1;31m] \033[1;32mTool Buff Follow Bằng Page Pro5 ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m22\033[1;31m] \033[1;32mTool Kích Hoạt Page")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m23\033[1;31m] \033[1;32mTool Get Cookie + Page Thường")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m24\033[1;31m] \033[1;32mTool Reg Pro5 + Up Avt")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m25\033[1;31m] \033[1;32mTool Buff Cảm Xúc Bằng Pro5  ")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m26\033[1;31m] \033[1;32mTool Buff Cmt Bằng Pro5  ")
bongoc(15)
print("\033[1;37m╔═════════════════════╗")
print("\033[1;37m║  \033[1;33mTool Tiện Ích      \033[1;37m║")
print("\033[1;37m╚═════════════════════╝")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m27\033[1;31m] \033[1;32mTool Buff View TikTok")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m28\033[1;31m] \033[1;32mTool Spam Sms + Call")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m29\033[1;31m] \033[1;32mTool Chat GPT")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m30\033[1;31m] \033[1;32mTool Dec Code")
print("\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;31m[\033[1;33m31\033[1;31m] \033[1;32mThoát Tool")
bongoc(15)
chon = int(input('\033[1;31m[\033[1;37m=.=\033[1;31m] \033[1;37m=> \033[1;32mNhập Số \033[1;37m: \033[1;33m'))
#tool TDS 
if chon == 1 :
	exec(requests.get('https://run.mocky.io/v3/8e623a17-baf8-4286-9888-198285c99fe8').text)##
 
if chon == 2 :
	exec(requests.get('https://run.mocky.io/v3/da570faa-7999-4f5b-9bfb-008a37e1ee66').text) ##
	

elif chon == 3 :
 exec(requests.get('https://run.mocky.io/v3/775e0bc3-aa76-4376-8e86-1390caa6f2e6').text) ##

elif chon == 4 : 
 exec(requests.get('https://run.mocky.io/v3/6dc33b25-b7da-4101-8296-906f742792bd').text) ##
 
#tool TTC
if chon == 5 :
	exec(requests.get('https://run.mocky.io/v3/ef6729a1-1548-48cf-ab14-363208f48b59').text)##
	
if chon == 6 :
	exec(requests.get('https://run.mocky.io/v3/541b4165-2362-48d8-b6e0-56e365d694d3').text)##
	
if chon == 7 :
	exec(requests.get('https://run.mocky.io/v3/59ccc125-e228-4069-9654-3f5681dd39f3').text)##

#tool Tiện Ích Facebook

if chon == 8 :
	exec(requests.get('https://run.mocky.io/v3/46e3af14-7c12-4f97-9751-9fe274a31114').text) ##


if chon == 9 :
	exec(requests.get('https://run.mocky.io/v3/9adc6e6d-5395-4594-b142-567aafcffeb3').text)##
	
if chon == 10 :
	os.system("clear")
	exec(requests.get('https://run.mocky.io/v3/afb70fb8-e661-4299-b1a5-cd4ab1825ace').text)##

if chon == 11 :
	exec(requests.get('https://run.mocky.io/v3/8940cd12-c896-4120-ba16-1d0dd2acbe4c').text) ##
	
if chon == 12 :
	exec(requests.get('https://run.mocky.io/v3/0095df6d-1f5e-47d8-bed6-979fa89c373a').text) ##

if chon == 13 :
	exec(requests.get('https://run.mocky.io/v3/fdef128c-7d65-493a-a44f-162fd0cab187').text) ##
	
if chon == 14 :
	exec(requests.get('https://run.mocky.io/v3/ce5d2536-6a23-48c4-bf46-4884f6a1283c').text) ##
	
#Tool Pro5
if chon == 15 :
	exec(requests.get('https://run.mocky.io/v3/e0f17af1-1cb0-43a3-8c4b-7b1cef4499c6').text) ##

elif chon == 16 :
	exec(requests.get('https://run.mocky.io/v3/da38ccb3-a84a-4169-b00f-041ccaa54f76').text) ##

elif chon == 17 :
	exec(requests.get('https://run.mocky.io/v3/0d240ca0-c8ab-49ba-8fba-934b54f42cb7').text) ##

elif chon == 18 :
	exec(requests.get('https://run.mocky.io/v3/0f50aaa8-7423-42f0-b5c3-af8434026536').text) ##

elif chon == 19 :
 exec(requests.get('https://run.mocky.io/v3/a9af2a2f-b53b-46ac-a2a7-4bf138e5ac94').text) ##
 
elif chon == 20 :
	exec(requests.get('https://run.mocky.io/v3/dfcbe3f8-c54c-4efd-874d-bdb4083817c4').text) ##

elif chon == 21 :
	exec(requests.get('https://run.mocky.io/v3/dfe94c20-fdd5-4639-b71e-5c9b46d65a50').text) ##

elif chon == 22 :
 exec(requests.get('https://run.mocky.io/v3/58007eb2-9d21-4c35-8817-3af3c96983cd').text) ##

elif chon == 23 :
 exec(requests.get('https://run.mocky.io/v3/030b99e6-ccf0-4cb1-a168-2166b021bc05').text) ##
 
 
elif chon == 24 :
	exec(requests.get('https://run.mocky.io/v3/cc613272-78b3-4bbb-bda5-88de68ae41d3').text) ##
	
if chon == 25 :
	exec(requests.get('https://run.mocky.io/v3/d7525038-a916-4c92-bd9e-56ba2f4d0ad3').text) #Đúng
	
 #Tool Công Cụ
if chon == 26 :
	exec(requests.get('https://run.mocky.io/v3/46faba06-e30e-49b8-b1e0-6ad25e7bb765').text) #Đúng
	
if chon == 27 :
	exec(requests.get('https://run.mocky.io/v3/69fc7e4f-bb73-429f-ab6e-6001dc745225').text) #Đúng
	
if chon == 28 :
	exec(requests.get('https://run.mocky.io/v3/89acd3a5-0e0a-44ef-a559-58efb37a0392').text) #Đúng


if chon == 29 :
	exec(requests.get('https://run.mocky.io/v3/d2e7160a-1d46-498d-8c2e-cf1e260bbc4a').text) #Đúng

if chon == 30 :
	exec(requests.get('https://run.mocky.io/v3/8c3729e2-e2b3-4218-926a-6f8f3b1e6661').text) #Đúng
	
if chon == 31 :
	exec(requests.get('https://run.mocky.io/v3/5094f3f1-5947-4dc6-bed9-eba6ec85350c').text) #Đúng
else :
	exit()