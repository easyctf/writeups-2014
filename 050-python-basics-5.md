# 50 - Python Basics 5

*Written by Emily Leng*

## Problem

Given an list of unknown length of strings stored in `args`, for each string, take the first two characters and concatenate them into another string variable. Print the final variable.

## Hint

Strings are very similar to lists...

## Solution
The indexes of letters in a string can referred to like the indexes of items in an array or a list. The notation for this is `string[start,end,increment]`. If you leave the first part of the notation blank, the start value will default to zero. If you leave the second part blank, the end value will be the length of the string but exclusive (so think length -1), and if the increment is left blank, then it will default to 1.

```python
s = ""
for x in args:
  s += x[:2]
  
print s
```

## Flag
`its_string_slicing_not_pi(e)_slicing`
