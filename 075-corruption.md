# 75 - Corruption

*Written by Michael Zhang, Writeup by Tim Winters*

## Problem
You revieved a zip file but find that it is orrupted! You're given that it's missing a couple of bytes at the beginning. Replace these bytes and find the flag

## Hint

No clue what bytes to insert? Perhaps looking into file headers would be helpful. Also, you might want to download a hex editor, such as HxD.

## Solution
A google seach of .zip file headers will lead you to [this website](http://www.garykessler.net/library/file_sigs.html). `Ctrl-F` ".zip" shows that the file header for a .zip file is `50 4B 03 04`

If we open the file in a hex editor program, it shows the first byte as `03 04 14 00`. We need it to be `50 4B 03 04`, and we have `03 04`, so by adding `50 4B` the first byte is `50 4B 03 04` and the file will extract.

In the extracted folder, we see a number of files (3000). Opening a file in a text editor reveals a series of characters. To find the flag, use the `findstr` (`grep` for mac) and search for "flag" in all files. To search all files, use a '*'. The final command will be `grep flag *`. The flag is hidden in file f2590

## Flag

`ph1l_k4tz`
