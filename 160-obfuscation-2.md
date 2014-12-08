# 160 - Obfuscation2

*Written by Austin Zhou*

## Problem

This jumbled mess has been left for you... [source](obfuscate.js)

## Hint

Are there any ways to make this code more readable?

## Solution

Go to http://jsbeautifier.org/
Copy paste the code into the box, then "beautify" it.
Copy the "beautified" code.

Open up a web browser (tested on google chrome) and open up console. (F12 then click on "Console")
Copy paste the code into the console and press enter. It should say "The flag is near." 
On the right side of the line, however, there is something that says "VMXXX:X" (X is an arbitrary number, can vary)

Click it and it shows a list of variables and their values, and you get the flag!

## Flag

`0bfuscaTion fTw`
