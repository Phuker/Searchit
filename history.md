# 历史文档

此项目想法来自于百Google度(baigoogledu)，主要为了解决天朝用户同时使用两种搜索引擎的问题。  
*Across the Great Wall, we can reach every corner in the world.*  

## 概述  

### 什么是百Google度  


>百Google度--在他们之间平均85%链接均不相同！   
>百google度是一种元搜索引擎，它综合了谷歌、百度两大搜索引擎。它的首页界面基本和谷歌、百度无异。只要在搜索框里键入关键词，就可搜索目标信息。不过，搜索界面很有特色，浏览器一分为二，左边是谷歌，右边是百度，搜出的信息和使用谷歌百度没有差别。  

（来源：[百度百科](http://baike.baidu.com/item/baigoogledu)） 

### 本项目发展历史  

为了翻墙和同时使用两种搜索引擎，我曾有过较长时间的研究：  
  
- 原版百Google度的Google栏一度失效，后来被网站封，无法使用。此仿制项目由此开始。  
- Google响应头含有 `x-frame-options:SAMEORIGIN`，无法放到非同源的iframe中，过去都是使用`http://www.google.com/custom?btnG=Search&newwindow=1&q=test`配合浏览器代理插件使用；或者使用没有此响应头的第三方反向代理。但是反向代理网站被封的越来越多，越来越难找，Google的custom URL某日失效，自动跳转到普通的搜索。以上方法基本完全失效。  
- 后来想办法一次搜索弹两个窗口，但是窗口太多使用不便。  
- 后来使用 cURL，在服务端请求搜索引擎。（2016年7月）    
