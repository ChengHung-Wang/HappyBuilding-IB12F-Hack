# 網頁魔法師訓練營 台灣蘭花科技大學 鑽石大樓 12F 開房預約系統
<!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->
[![All Contributors](https://img.shields.io/badge/all_contributors-2-orange.svg?style=flat-square)](#contributors-)
<!-- ALL-CONTRIBUTORS-BADGE:END -->

![](https://hackmd.io/_uploads/HJZE1lLv3.png)

這是一間位於台北萬華非常有名的大樓，其大樓座落在私立台灣蘭花科技大學裡，本大樓專門提供給人帶來歡樂帶來愛。

## Contributors
<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tbody>
    <tr>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/zhian66"><img src="https://avatars.githubusercontent.com/u/50503333?v=4?s=100" width="100px;" alt="an"/><br /><sub><b>an</b></sub></a><br /><a href="https://github.com/ChengHung-Wang/HappyBuilding-IB12F-Hack/commits?author=zhian66" title="Documentation">📖</a> <a href="https://github.com/ChengHung-Wang/HappyBuilding-IB12F-Hack/commits?author=zhian66" title="Code">💻</a> <a href="#data-zhian66" title="Data">🔣</a> <a href="#ideas-zhian66" title="Ideas, Planning, & Feedback">🤔</a> <a href="#research-zhian66" title="Research">🔬</a></td>
      <td align="center" valign="top" width="14.28%"><a href="https://github.com/CCcat8059"><img src="https://avatars.githubusercontent.com/u/55608737?v=4?s=100" width="100px;" alt="CCcat"/><br /><sub><b>CCcat</b></sub></a><br /><a href="https://github.com/ChengHung-Wang/HappyBuilding-IB12F-Hack/commits?author=CCcat8059" title="Documentation">📖</a> <a href="#research-CCcat8059" title="Research">🔬</a> <a href="#tutorial-CCcat8059" title="Tutorials">✅</a></td>
    </tr>
  </tbody>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->
<!-- markdownlint-disable -->

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

<details>
    <summary>安裝流程</summary>

#### 1. 把 [此專案](https://github.com/ChengHung-Wang/HappyBuilding-IB12F-Hack) clone 下來
#### 2. 下載 xampp，並把專案內所有檔案丟到 xampp/htdocs
![](https://hackmd.io/_uploads/HkYzhZMD3.png)
#### 3. 開啟 apache server 服務
(windows)
![](https://hackmd.io/_uploads/SyK9p-fD2.png)

查看 localhost 有沒有東西，如果有的話應該要顯示
(沒報錯一片空白連登入的表單都沒有表示你的報錯沒開)
![](https://hackmd.io/_uploads/H1Tdhvpwh.png)


#### 4. 下載 mySQL，並創建 ntust_ctf 資料庫 (conn.php)，以及開啟 mySQL 服務
>如果你的 root 的密碼不是預設的話，請至 conn.php 修改

>如何開啟/關閉 MySQL 服務 (windows)
```shell
net start MySQL80
net stop MySQL80
```

如果成功開啟服務的話(也就是可以連到資料庫)
就可以看到以下畫面
![](https://hackmd.io/_uploads/r1GG0bGDn.png)

#### 5. 複製 .env
請到 ntust-ctf\ 裡，把 .env.example 複製一份出來
並把複製出來的那一份重新命名成 `.env`

> 如果你的 mySQL root 的密碼不是預設
請到 .env 裡修改密碼



#### 6. 安裝 [php composer](https://getcomposer.org/)
> 請確保 php 有在環境變數裡 (在 CLI 打 php -v)

在 htdocs\ntust-ctf 裡開啟 cmd
![](https://hackmd.io/_uploads/HklJJfGDn.png)

依序輸入以下指令
```shell
composer install
php artisan key:generate
php artisan migrate
php artisan passport:install
```

- 如果遇到以下錯誤 (Reference: [stackoverflow](https://stackoverflow.com/questions/75050370/the-zip-extension-and-unzip-7z-commands-are-both-missing-skipping-in-windows))
  ![](https://hackmd.io/_uploads/HJtB1GGvn.png)
  請到 xampp\php\php.ini 去更改檔案的內容
  把 `;extension=zip` 改成 `extension=zip`
  - 如果遇到以下錯誤，請將參數增加
    ![](https://hackmd.io/_uploads/SJWg3MGP3.png)
      ```shell
      composer install --ignore-platform-req=ext-sodium
      ```


#### 7. 回到網頁確認
打開網頁，並嘗試登入 (帳密都是學號(英文字母大寫))
![](https://hackmd.io/_uploads/rJpnvMzwn.png)

如果登入失敗，請去下載 [Postman](https://www.postman.com/downloads/)
我們會需要對 API 直接進行 debug (請見本文最後一部分)
如果登入成功了，會出現以下畫面
![](https://hackmd.io/_uploads/HkFRvfGDn.png)


以下這行指令會遇到的奇怪錯誤
```shell
php artisan migrate
```

- zip error (windows)
  - php version limit
  - .htaccess file not work(forget set override permission)
  - server default home file

## 常見錯誤
### 有 error 但看不到錯誤訊息
到 xampp/etc/php.ini 檔案中，將 display error 設成 On

### 設定 php 環境變數
mac:
```shell
export XAMPP_HOME=/Applications/XAMPP
export PATH=${XAMPP_HOME}/bin:${PATH}
export PATH
```

是 bash 輸入
```shell
$ exec $SHELL -l;
```

是 zsh 輸入
```shell
$ echo $SHELL
```

確認環境路徑正確
```shell
$ which php
```

## 對 API debug
這是一個 .json 的檔案，請去下載 [這個資源](https://drive.google.com/file/d/1KeoGbIFxsWPl499PXkINn-amPl7L-dKY/view?usp=drive_link)
開啟 Postman 之後，找到 Workspace，並開啟 My Workspace
在左上角找到小小的 import 按鈕，我們需要匯入剛剛下載的 .json
匯入之後，就可以看到各種測試 API 的請求了
再來，看到最右邊的那排按鈕
![](https://hackmd.io/_uploads/HJyriGGDn.png)

點最上面那顆，我們需要新增 environment
<br>
![](https://hackmd.io/_uploads/ByrDoGzD3.png)
點集右上角的 Add

新增兩個變數 (**記得 ctrl+S 存檔**)
```
host:         http://localhost/ntust-ctf/public/
api_version:  api/v1/
```

完成之後請到右上角切換 environment
![](https://hackmd.io/_uploads/HJD2jMMDh.png)

再來就可以送請求給 API 了

</details>

----

**我說過了，這不是台科大12樓的[這個](http://140.118.104.125)預約系統**
![](https://hackmd.io/_uploads/HyV48lID3.png)
長的一點都不像對吧（You can say Yes or Yes!!!!)

---

## TODO List
1. 這什麼鬼規定啦，哪有 Happy Building 不能色色的，我要變管理員把規定換掉！
2. 什麼，我最心心念念的 R20 不能預約，人家想要 R20 啦？
3. 隔壁那間 216 看起來非常特別，這裡每個房間都走過一輪了，就差那間了，能讓我預約嗎？
4. 三天後我朋友生日，我想包下一整天的 R20 好好慶祝，可是有人預約了，能幫我把他刪了嗎？
5. 你能拿到管理者的帳密嗎？
6. 你知道這個網頁用什麼語言寫的嗎？
7. 你能把整個資料庫 Jump 下來嗎？據說資料庫還是使用 root 連線的？（不可以使用 SQL Injection 達成）
8. 身為一位頂級的魔法師，無所不能，我全都要，來把整個後端的源代碼 + 資料庫都拷貝下來。
9. 我想看到別人的密碼，我這樣就可以隨便進出別人的房間啦～

## 提供者注意事項
- 請管理者提前預約活動三天後的 R20 房間，並手動強制將 id 拉到很奇怪的位置
- 請將 CTF 架設於不可被直接解析出主機真實 IP 之網路環境（例如利用 cloudflare proxy）
- 提醒玩家勿對 API 爆破，否則會被 429
- 提醒玩家勿對遊戲做出破壞行為(ex: DDos)否則遊戲會玩不下去喔
- 請管理者關閉目錄列示(星期四現場教學這樣做是不對的），所有透過目錄列示獲得的 solution 都無效。
- 遊戲期間，請管理者定期刷新預約清單，以利 XSS 攻擊生效
- 為避免有網站長得跟這個很像又剛好有一模一樣的漏洞，所以請提醒玩家不要在活動提供以外的網站壞壞。

## 解答
<details>
    <summary>在遊戲的過程中，你可能會學會這些神奇的網頁技術</summary>

- 利用開發者工具對某個 DOM 元素選取、修改
- 利用開發者工具對網路傳輸的內容進行分析
- 自己發出 HTTP Request
- HTTP Request 觀念(header, auth授權資訊, body data, request method)
- 重整就刷新的網頁怎麼記住你的？
- 網頁端程序編譯的原理(以php為例)

</details>


### 1. 這什麼鬼規定啦，哪有 Happy Building 不能色色的，我要把規定換掉！
按下開發者工具，在這個頁面上面搜尋一些關鍵字，比如說 admin, manage 等等的，你會發現
![](https://hackmd.io/_uploads/rkl6YyID2.png)
把 nonmanage 改掉(以HTML修改)你就變管理者啦～

#### 資安技術
1. 不當的權限管控
    - 建議的修復方法: `TODO`
    - 注意事項(可有可無，像是 改成 POST 也不能改變會被攻擊的事實):


#### 網頁技術技巧(不用特別教學，但是這邊有出現上面就)
1. 利用開發者工具對某個 DOM 元素選取、修改


----


### 2. 什麼，我最心心念念的 R20 不能預約，人家想要 R20 啦？
透過 F12 的小工具，可以定位到選擇房間的按鈕
![](https://hackmd.io/_uploads/ByCBTkUD3.png)

把 disable 刪掉，按鈕就會亮起來了，也變得可以選擇了
![](https://hackmd.io/_uploads/H17K6kIDh.png)


----


### 3. 隔壁那間 216 看起來非常特別，這裡每個房間都走過一輪了，就差那間了，能讓我預約嗎？
(Network) 觀察網路請求
![](https://hackmd.io/_uploads/r1D8Ex8D2.png)

可以找到 reserve 這個請求
這個請求會讓伺服器做一些對應的事情

而這時候我們要嘗試偽造一個請求給伺服器
所以我們把 URL 複製下來
再把 Payload 複製下來
![](https://hackmd.io/_uploads/S1EnNe8Pn.png)

需要注意的是 payload 都存了哪些資料
仔細看 payload 的資訊可以發現一件事，我們並沒有把使用者帳號、ID放在 payload 裡面
那伺服器怎麼知道是誰預約的房間？

這就要提到另一個東西：Authorization
伺服器是透過這個知道我們是誰
所以只要把這些資訊都放到 Postman 裡
我們要請求的 URL，以及方法 (POST)，更不要忘記 Payload
![](https://hackmd.io/_uploads/B1qLBlLvh.png)
<br>
可以辨識身分的 Authorization，Type 記得選 Bearer
![](https://hackmd.io/_uploads/rknPrgUP3.png)

然後我們可以對 Payload 稍作更改
例如：改房間號碼、日期時間、用途等等...

最後就可以去預約管理介面看看有沒有成功了
![](https://hackmd.io/_uploads/B1zEIxLwh.png)


----


### 4. 三天後我朋友生日，我想包下一整天的 R20 好好慶祝，可是有人預約了，能幫我把他刪了嗎？
我們可以點看看密碼查詢的按鈕
![](https://hackmd.io/_uploads/B1zEIxLwh.png)

他會帶你到一個網頁，就是很簡單的告訴你房間的密碼
這邊一樣開著 F12 的 Network 來觀察送出了什麼請求
![](https://hackmd.io/_uploads/Bk-w5xIvn.png)

發現他送了一個 GET 請求
而目的地是 http://localhost/nonmanage/pwd.aspx?sn=6
GET 請求是會把資訊寫在網址的，所以我們不妨從這個 sn=6 下手看看？

我們可以用 SQL Injection 去試試看
http://localhost/nonmanage/pwd.aspx?sn=6%20OR%201=1
這邊的 %20 是空白的意思 (URL encode)，所以完整的 sn 會長這樣
`sn=6 OR 1=1`

> 為了方便理解，這邊直接放上後臺的程式碼
![](https://hackmd.io/_uploads/BJZPoe8v3.png)
所以把 sn 的值放進去，拼出 SQL 查詢語法
會長這樣
```sql
SELECT * FROM `reversed` WHERE `id` = 6 OR 1=1
```

看看回傳回來的東西
![](https://hackmd.io/_uploads/SkvGhxLw2.png)

欸？怎麼不只一筆資料，好像所有的預約資料都被傳過來了耶？
透過這邊就可以拿到預約的資訊

利用第三題學到的技巧
我們嘗試把房間退掉看看，同時觀察請求的變化
![](https://hackmd.io/_uploads/Hyyn3xUv2.png)

果然有一個 DELETE 的請求被送出去了
請求網址後面跟的數字，就是預約的 id

也就是說透過 SQL Injection 漏洞，可以拿到預約 id
再透過這個 DELETE 的請求，就可以把任何一個預約退掉！
(你問如何發送請求？回去複習複習第三題吧！)

----

### 5. 身為一位頂級的魔法師，無所不能，我全都要，來把整個後端的源代碼 + 資料庫都拷貝下來
`TODO: 補實作方法，應該我在後面有講到`

#### 資安技術：
1. WebShell
2. Config（機敏檔案）外洩
    - 發生的原因
    - 改進的方法
3. 反射型攻擊 (拿外網IP)
4. 不當的權限管控
    - SQL 用 root 登入
    - Port 不必要的開放

#### Tips
1. 你知道預設的畫面會對網站帶來資安風險嗎？
   因為駭客可以從網站的報錯畫面或者某個預設的頁面知道你用了什麼框架、環境，可能是某個排版樣式、甚至是底色，就可以直接估出你用的環境(版本)是什麼，駭客可以直接根據網路上的 CVE 漏洞對你「對症下藥」攻擊。

#### 網頁技術技巧
1. 網頁端程序編譯的原理(以php為例)
2. 利用開發者工具對網路傳輸的內容進行分析

----

### 6. 你知道這個網頁用什麼語言寫的嗎？

#### 資安技術：0

#### Tips
很多人透過更改副檔名的方式讓攻擊者誤以為這是其他類型的網頁，最常見的就是把 aspx, php 改成 html 讓攻擊者以為這是靜態網站。

#### 網頁技術技巧
1. 利用開發者工具對網路傳輸的內容進行分析
2. HTTP Request 觀念(header)

---

### 9. 我想看到別人的密碼，我這樣就可以隨便進出別人的房間啦～
其實這題跟第 4 題同理
我們可以透過 SQL Injection
讓所有的預約資訊都回傳出來，這樣就可已知道每個預約的密碼
也就可以隨便進出房間了
