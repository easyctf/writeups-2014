# 40 - Python Basics 3

*Written by Emily Leng*

## Problem

How can you add strings in print statements? `args` is an array of 5 variables than can be accessed with `args[0]`, `args[1]` etc. Write some python code in the IDE to concatenate the variables together before printing.

## Hint

Hmmm... how can you turn that pesky integer into a string?

## Solution

```python
tmp = ""
for i in range(len(args)):
  tmp += str(args[i])
print tmp
```

## Flag
`stupid_ints_causing_those_annoying_type_errorz`
