# 60 - Format Deception

*Written by Michael Zhang and Sean Anderson, Writeup by MegaAbsol*

## Problem

What kind of file is this (format_deception.nds)?

## Hint

After you manage to open the .nds file, (if you don't know how, Google is your best friend), look around for your flag. Maybe go against your first instinct.

## Solution

We open this in a hex editor (I used HxD). We note the header bytes are 50 4B, or PK. This means that it is actually a .zip file. We rename the extension to .zip, and open it. There are lots of files! Our first instinct is to look through the thumbnails, except the image is super blurry. Too bad, we have to look through the slew of other files. Thankfully, the somewhat obvious file "settings" seems to have our flag in it!

## Flag

d0nt_judg3_a_file_by_1ts_ext3nsi0n
