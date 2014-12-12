# 90 - Obfuscation 1

*Written by Michael Zhang, Writeup by MegaAbsol*

## Problem

Free points guyz.

Obfuscation is changing variables and statements in a code so that it still performs the desired functions but is harder to read by humans. This makes it harder for people who are not supposed to see your code to understand your code. Try your hand at the following Python deobfuscation exercise:

[Input file](http://www.easyctf.com/problem_data/obfuscation/obfuscated.py)

## Hint

Think backwards, reverse the encryption.

## Solution

Actually, there's no need to "think backwards." We only need to look at a little bit of the code to get the gist of it.


    def enc(c,k): return chr(((ord(k) + ord(c)) % 26) + ord('A'))
It seems scary, but it looks to me like it's cycling through characters. Wait... cycling? Then what happens if we repeatedly encrypt our data? Let's edit the code a bit:


    from itertools import starmap, cycle
 
    def mystery(a, b):
        a = filter(lambda _: _.isalpha(), a.upper())            
        def enc(c,k): return chr(((ord(k) + ord(c)) % 26) + ord('A'))
 
        return "".join(starmap(enc, zip(a, cycle(b))))

    text = "SWQHRGZZUSSWWBJWMRQTMRYVWVXJMADMKICSVBZCZXMENGJLVWEUDUQYVSEMKRWUBFJF"
    apple = "FOODISYUMMY"
    for i in range(26):
        text = mystery(text, apple)
        print (text)                                                                            

On the second-last line of output, look what we get:

    NICEJOBFIGURINGOUTWHATTHISPROGRAMDOESTHEFLAGISVINEGARISTHEBESTCIPHER

## Flag

VINEGARISTHEBESTCIPHER
