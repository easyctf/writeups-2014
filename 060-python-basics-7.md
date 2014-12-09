# 60 - Python Basics 7

*Written by Emily Leng*

## Problem

Given an list of integers stored in `args[0]` and an integer k stored in `args[1]`, sort them in descending order, then print the value at array index k from the sorted list.

## Hint

I wonder if there's a built in sort function?

## Solution
Python has a handy built in sort function! And, the indexes of strings can be referred to like the indexes in arrays or lists.

```python
a = args[0]
a.sort(reverse = True)
print a[args[1]]
```

## Flag
`arrays_aren't_hard_because_python_rocks`