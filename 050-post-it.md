# 50 - POST-it

*Written by Michael Zhang*
*Writeup by Sean Anderson*

## Problem

You need to gain access to this site, but it looks like you have the wrong POST values! Hmm..

http://easyctf.com/sites/post-it

## Hint

It may be helpful to look into what POST requests *are*. How can you use this?

## Solution

Using curl, you can manually specify post values

```
$ curl --data "user=admin&request=flag" http://www.easyctf.com/sites/post-it
flag: p0st_is_moar_secure_than_g3t$
```

## Flag

`p0st_is_moar_secure_than_g3t`
