# 80 - Easy As CTF Gets

*Writeup by Jester*

## Problem

What could this possibly mean?

xhwdlsibxnmwvinalpdcbsymzzx

## Hint

Perhaps you could try one of these [ciphers.](http://rumkin.com/tools/cipher/) 

## Solution

At first glance, this problem seems remarkably easy, even for an 80 point problem. However, as you try all the ciphers in the given link, you find that none of them work (unless you got it instantly, of course).

Eventually, the realization that a key is needed pops into your head. But what is the key?

To decipher the ciphertext, go to vigenere on the site given, and the key is... "easyasctfgets"

And voila! You get the flag!

## Flag

hiddeninplainsight
