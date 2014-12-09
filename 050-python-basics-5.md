# 50 - Python Basics 5

*Written by Emily Leng*

## Problem

Given an list of unknown length of strings stored in `args`, for each string, take the first two characters and concatenate them into another string variable. Print the final variable.

## Hint

Strings are very similar to lists...

## Solution
Python has a handy built in sort function! And, the indexes of strings can be referred to like the indexes in arrays or lists.

```python
a = args[0]
a.sort(reverse = True)
print a[args[1]]
```

## Flag
`its_string_slicing_not_pi(e)_slicing`
