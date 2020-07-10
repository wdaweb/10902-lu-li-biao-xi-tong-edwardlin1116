## 作品集計畫

### 作品分類:

1. 前端程式：
   1.獵人試驗 2.數位時鐘 3.類比時鐘 4.打地鼠 5.顏色選擇器

2. 後端程式：
   1.統一發票 

3. 視覺作品：
   整理中，並會陸續上傳


## 視覺計畫

極簡風格 
背景以白、灰色的區塊分明顯示。


## 資料庫規劃

### 資料表:

####    admin     帳號管理

  | id            流水號 
  | acc           帳號
  | pw            密碼
  
####    title     圖片管理

  | id            流水號 
  | img           圖片
  | text          文字
  | sh            顯示

####    about     個人資料

 | id             流水號
 | name           姓名
 | year           年齡
 | exp            工作經歷
 | country        國家
 | city           城市
 | phone          電話
 | email          電子信箱
 | status         狀態  
 | img            個人照
 | introduction   簡介   

####    skill     專業技能

 | id             流水號
 | img            圖片
 | text           文字
 | sh             顯示

####    edu       學歷

 | id             流水號
 | school         學校名稱
 | year           就學期間
 | dep            系所
 | sh             顯示

####    exp       經歷

 | id             流水號
 | title          公司名稱
 | year           任職期間
 | content        工作內容
 | sh             顯示

####    job       求職條件

 | id             流水號
 | categroy       工作類別
 | property       性質
 | salary         待遇
 | plac           地點
 | sh             顯示

####    auto      自傳

 | id             流水號
 | content        自傳內容
 | sh             顯示
####    portf     作品集

 | id             流水號
 | text           作品名稱
 | img            作品圖
 | href           超連結
 | sh             顯示
