# 40 - Lines, Dots, and Shift Keys

*Written by Emily Leng*

## Problem

.... - - .--. ---... -..-. -..-. - .. -. -.-- ..- .-. .-.. .-.-.- -.-. --- -- -..-. .-.. .. -. . ... .- -. -.. -.. --- - ...

## Hint

Haven't you already used a Shift Key in a previous problem?

## Solution

By [translating the code](http://morsecode.scphillips.com/jtranslator.html) we get

> HTTP://TINYURL.COM/LINESANDDOTS

We are redirected to [this document](https://docs.google.com/document/d/1KYO5ssmLlGDqtBHlumY63IyFbRNKLZ-vdQNh0PGSz7w/edit) and get a caesar cipher.  Decoding it yeilds the key.

```
$ echo "snhj btwp! ymnx hnumjw xmtzqi gj kfrnqnfw yt dtz, tw rfdgj sty. fsdbfd, fx f wjbfwi, mfaj ymnx kqfl. q1s3x_fsi_i0yx_y0_b0wie"|caesar
nice work! this cipher should be familiar to you, or maybe not. anyway, as a reward, have this flag. l1n3s_and_d0ts_t0_w0rdz
```

## Flag

`l1n3s_and_d0ts_t0_w0rdz`
