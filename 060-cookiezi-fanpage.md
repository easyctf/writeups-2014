# 60 - Cookiezi Fanpage

*Written by Michael Zhang*

## Problem

Cookiezi has been banned from osu! forever, but we'll never forget him!

Only those who truly believe in the return of Cookiezi can enter this [site](http://easyctf.com/sites/cookiezi).

## Hint

Yum yum yum what could be more delicious than chocolate chip cookies? HTTP cookies, of course!

## Solution

The flag is stored in a cookie when you visit the webpage. Just open the developer console (ctrl+shift+c in most browsers) and type `alert(document.cookie)` into the Javascript console. The flag will appear in an alert box.

## Flag

`osu_is_love_osu_is_l1fe`
