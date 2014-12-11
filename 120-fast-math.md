# 120 - Fast Math

*Written by Michael Zhang, Writeup by Emily Leng*

## Problem

Can you beat the Jung? Try your hand at some fast math at `python.easyctf.com:10660`!

## Hint

How can you solve problems quickly?

## Solution

```python
import socket

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("python.easyctf.com", 10660))
response = s.recv(1024)
response = response.translate(None, "abcdefghijklmnopqrstuvwxyz ")
while s:
    s.send(str(eval(response)))
    response2 = s.recv(1024)
    print response2
    break

```

## Flag

`congratz_u_just_beat_the_jung!!1!`
