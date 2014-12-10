# 65 - Python Basics 8 

*Written by Tim Winters*

## Problem
A boolean is a value that is either True or False. Given an list of arrays of integers as `[a,b]` stored in `args`, for each array, if the sum of `a + b <= 25` then concatenate the value "1" to represent the value `True` to a string. Otherwise, concatenate "0" to represent the value `False`.
## Hint

Use your knowledge from previous problems and apply it here!

## Solution
Python allows you to store an array as individual values in a for loop.

```Python
x=""
for a,b in args:
    if a+b<=25:
        x+="1"
    else:
        x+="0"
print x
```

## Flag

`b0ole4n_l0g1c_011000100110100101101110011000010111001001111001`
