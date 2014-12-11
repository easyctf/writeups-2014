# 100 - Palindrama

*Written by Michael Zhang, Writeup by Emily Leng*

## Problem

Given a string stored in `args[0]`, find the longest palindrome inside the string, ignoring the punctuation and spacing during calculations, but including them in the final result.

For example, `I did roar again, Niagara! ... or did I?` returns `I did roar again, Niagara! ... or did I`

Notice how the question mark was not part of the palindromic string, so it was not included in the answer (and neither should trailing spaces or new lines).

## Hint

Python makes palindrome testing easy (after you remove punctuation, that is) with its ability to reverse strings!

## Solution

```python
import string
exclude = set(string.punctuation)
longest = ''
xindex, yindex = 0,0
for x in xrange(0,len(args[0])):
    for y in xrange(0,len(args[0])):
        origStr = args[0][x:y]
        if origStr[0:1] in "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ":
            newStr = ''.join(ch for ch in origStr if ch not in exclude).replace(" ","").lower()
        if newStr == newStr[::-1] and len(newStr) > len(longest):
            longest = newStr
            yindex = y
            xindex = x
print args[0][xindex:yindex].strip(),

```

## Flag

`did_you_use_python's_[::-1]_notation?`
