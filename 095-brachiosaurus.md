# 95 - Brachiosaurus

*Written by Emily Leng, Writeup by MegaAbsol*

## Problem

Here's something a bit harder.

<img src = "http://www.easyctf.com/problem_data/brachiosaurus/brachiosaurus.jpg"></img>

## Hint

Is this jpg really a jpg?

## Solution

Since this seems to be a steg problem, we open it in a hex editor. I used HxD. Scroll to the bottom of the file, and we see lots of "not suspicious" strings, as well as PK's (50 4B). PK is a zip file. We find the first instance of "PK" in the plaintext, and copy everything from there. We take the copied text and make it into a zip file. Looking into our new zip file, we see a "not suspicious" folder filled with .SHORT.OUT files, from 1-25. There also is a "whatAFineKeyThisIs" file. This seems like something, so we look into it.

In this file, it says:

    my favorite numbers are seven and three.
    gaf cnrvp qnjkfs hz zfufqgffq
    
The bottom seems suspicious, and looks like some kind of cipher. Plugging it into [quipqiup](http://quipqiup.com/), we get:

    the lucky number is seventeen

We then look into file 17. It seems like a bunch of meaningless text, but when we CTRL+F "answer," we find:
    
    ANSWER4Y0UREFF0RTSISC1PH3RSANDKRYPT0

## Flag

`C1PH3RSANDKRYPT0`
